<?php
if (!defined('IN_XIAOCMS')) exit();

class Model
{

    protected $_dbName = null;
    protected $_tableName = null;
    protected $_tableField = array();
    protected $_primaryKey = null;
    protected $_prefix = null;
    protected $_errorInfo = null;
    protected $_parts = array();
    protected $_db = null;

    public function __construct()
    {
        $params = xiaocms::load_config('database');
        if (!is_array($params)) exit('数据库配置文件不存在');
        foreach ($params as $key => $value) {
            $params[$key] = trim($value);
        }
        $dsn_array = array();
        $dsn_array['host'] = $params['host'];
        $dsn_array['port'] = $params['port'];
        $dsn_array['dbname'] = $params['dbname'];
        $dsn_array['charset'] =$params['charset'];
        $params['dsn'] = sprintf('%s:%s', 'mysql', http_build_query($dsn_array, '', ';'));
        $this->_dbName = $params['dbname'];
        $this->_prefix = (isset($params['prefix']) && $params['prefix']) ? $params['prefix'] : '';
        $this->_db = dbpdo::getInstance($params);
        unset($params['username']);
        unset($params['password']);
        return true;
    }

    public function getServerVersion()
    {
        return $this->_db->getServerVersion();
    }

    public function getTableList()
    {
        return $this->_db->getTableList();
    }

    public function getdbName()
    {
        return $this->_dbName;
    }

    public function getTablePrefix()
    {
        return $this->_prefix;
    }

    public function execute($sql, $params = null)
    {
        if (!$sql) return false;
        $sql = str_replace('#xiaocms_', $this->_prefix, $sql);
        return $this->_db->execute($sql, $params);
    }

    public function query($sql, $params = null)
    {
        if (!$sql) return false;
        $sql = str_replace('#xiaocms_', $this->_prefix, $sql);
        return $this->_db->query($sql, $params);
    }

    public function fetchAll($model = 'PDO::FETCH_ASSOC')
    {
        if (!$model) return false;
        return $this->_db->fetchAll($model);
    }

    public function insert($data, $returnId = false)
    {
        if (!$data || !is_array($data)) return false;
        $insertArray = $this->_filterFields($data);
        if (!$insertArray) return false;
        unset($data);
        return $this->_db->insert($this->_tableName, $insertArray, $returnId);
    }

    public function setTableName($tableName)
    {
        if (!$tableName) return false;
        $this->_tableName = $this->_prefix . trim($tableName);
        return $this;
    }

    protected function _filterFields($data)
    {
        if (!$data || !is_array($data)) return false;
        $tableFields = $this->getTableFields();
        $filteredArray = array();
        foreach ($data as $key => $value) {
            if (in_array($key, $tableFields)) {
                $filteredArray[$key] = $value;
            }
        }
        return $filteredArray;
    }

    public function getTableFields()
    {
        if (!$this->_loadCache($this->_tableName)) {
            $this->_createCache($this->_tableName);
        }
        return $this->_tableField;
    }

    protected function _loadCache($tableName)
    {
        if (!$tableName) return false;
        $cacheFile = $this->_getCacheFile($tableName);
        if (!is_file($cacheFile)) return false;
        $cachContent = include $cacheFile;
        $this->_primaryKey = $cachContent['primaryKey'];
        $this->_tableField = $cachContent['fields'];
        unset($cachContent);
        return true;
    }

    protected function _getCacheFile($tableName)
    {
        $cachePath = DATA_DIR . 'models' . DS;
        return $cachePath . $tableName . '.tableinfo.cache.php';
    }

    protected function _createCache($tableName)
    {
        if (!$tableName) return false;
        $tableInfo = $this->_db->getTableInfo($tableName);
        $this->_primaryKey = $tableInfo['primaryKey'][0];
        $this->_tableField = $tableInfo['fields'];
        $cacheDataArray = array(
            'primaryKey' => $this->_primaryKey,
            'fields' => $this->_tableField,
        );
        $cacheContent = "<?php\nif (!defined('IN_XIAOCMS')) exit();\nreturn " . var_export($cacheDataArray, true) . ";";
        $cacheFile = $this->_getCacheFile($tableName);
        $cacehDir = dirname($cacheFile);
        if (!is_dir($cacehDir)) mkdirs($cacehDir);
        file_put_contents($cacheFile, $cacheContent, LOCK_EX);
        return true;
    }

    public function update($data, $where = null, $value = null)
    {
        if (!is_array($data) || !$data) return false;
        $condition = $this->_parseCondition($where, $value);
        if (!$condition['where']) return false;
        $condition['where'] = ltrim($condition['where'], 'WHERE ');
        $updateArray = $this->_filterFields($data);
        unset($data);
        return $this->_db->update($this->_tableName, $updateArray, $condition['where'], $condition['value']);
    }

    protected function _parseCondition($where = null, $value = null)
    {
        $conditionArray = array('where' => null, 'value' => null);
        if (!$where) {
            if (isset($this->_parts['where']) && $this->_parts['where']) {
                $conditionArray['where'] = $this->_parts['where'];
                unset($this->_parts['where']);
            }
            if (isset($this->_parts['whereValue']) && $this->_parts['whereValue']) {
                $conditionArray['value'] = $this->_parts['whereValue'];
                unset($this->_parts['whereValue']);
            }
            return $conditionArray;
        } else {
            if (isset($this->_parts['where'])) {
                unset($this->_parts['where']);
            }
            if (isset($this->_parts['whereValue'])) {
                unset($this->_parts['whereValue']);
            }
        }
        if (is_array($where)) {
            $where = implode(' AND ', $where);
        }
        $conditionArray['where'] = 'WHERE ' . $where;
        if (!is_null($value)) {
            if (!is_array($value)) {
                $value = array($value);
            }
            $conditionArray['value'] = $value;
        }
        return $conditionArray;
    }

    public function delete($where = null, $value = null)
    {
        $condition = $this->_parseCondition($where, $value);
        if (!$condition['where']) return false;
        $condition['where'] = ltrim($condition['where'], 'WHERE ');
        return $this->_db->delete($this->_tableName, $condition['where'], $condition['value']);
    }

    public function find($id, $fields = null)
    {
        if (!$id) return false;
        $fields = $this->_parseFields($fields);
        $primaryKey = $this->_getPrimaryKey();
        $sql = "SELECT {$fields} FROM {$this->_tableName} WHERE {$primaryKey} = ?";
        $myRow = $this->_db->getOne($sql, $id);
        return $myRow;
    }

    protected function _parseFields($fields = null)
    {
        if (!$fields) {
            if (isset($this->_parts['fields']) && $this->_parts['fields']) {
                $fields = $this->_parts['fields'];
                unset($this->_parts['fields']);
            } else {
                $fields = '*';
            }
            return $fields;
        } else {
            if (isset($this->_parts['fields'])) {
                unset($this->_parts['fields']);
            }
        }
        if (is_array($fields)) {
            $fields = implode(',', $fields);
        }
        return $fields;
    }

    protected function _getPrimaryKey()
    {
        if (!$this->_loadCache($this->_tableName)) {
             $this->_createCache($this->_tableName);
        }
        return $this->_primaryKey;
    }

    protected function _parseLimit($startId = null, $listNum = null)
    {
        $limitString = '';
        if (is_null($startId)) {
            if (isset($this->_parts['limit']) && $this->_parts['limit']) {
                $limitString = $this->_parts['limit'];
                unset($this->_parts['limit']);
            }
            return $limitString;
        } else {
            if (isset($this->_parts['limit'])) {
                unset($this->_parts['limit']);
            }
        }
        $limitString = "LIMIT" . (($listNum) ? "{$startId},{$listNum}" : $startId);
        return $limitString;
    }

    public function getOne($where = null, $value = null, $fields = null, $orderDesc = null)
    {
        $condition = $this->_parseCondition($where, $value);
        if (!$condition['where']) return false;
        $fields = $this->_parseFields($fields);
        $sql = "SELECT {$fields} FROM {$this->_tableName} {$condition['where']}";
        $orderString = $this->_parseOrder($orderDesc);
        if ($orderString) {
            $sql .= ' ' . $orderString;
        }
        return $this->_db->getOne($sql, $condition['value']);
    }

    protected function _parseOrder($orderDesc = null)
    {
        if (!$orderDesc) {
            if (isset($this->_parts['order']) && $this->_parts['order']) {
                $orderDesc = $this->_parts['order'];
                unset($this->_parts['order']);
            }
            return $orderDesc;
        } else {
            if (isset($this->_parts['order'])) {
                unset($this->_parts['order']);
            }
        }
        if (is_array($orderDesc)) {
            $orderDesc = implode(',', $orderDesc);
        }
        return 'ORDER BY ' . $orderDesc;
    }

    public function getAll($where = null, $value = null, $fields = null, $orderDesc = null, $limitStart = null, $listNum = null)
    {
        $condition = $this->_parseCondition($where, $value);
        $fields = $this->_parseFields($fields);
        $sql = "SELECT {$fields} FROM {$this->_tableName} {$condition['where']}";
        $orderString = $this->_parseOrder($orderDesc);
        if ($orderString) {
            $sql .= ' ' . $orderString;
        }
        $limitString = $this->_parseLimit($limitStart, $listNum);
        if ($limitString) {
            $sql .= ' ' . $limitString;
        }
        return $this->_db->getAll($sql, $condition['value']);
    }

    public function page($page = null, $pageSize = 10, $fields = null, $order = null)
    {
        //参数分析
        $page = ((int)$page < 1) ? 1 : $page;
        $startId = (int)$pageSize * ($page - 1);
        $condition = $this->_parseCondition($where, $value);
        $fields = $this->_parseFields($fields);
        $sql = "SELECT {$fields} FROM {$this->_tableName} {$condition['where']}";
        $orderString = $this->_parseOrder($order);
        if ($orderString) {
            $sql .= ' ' . $orderString;
        }

        $sql .= " LIMIT " . (($pageSize) ? "{$startId},{$pageSize}" : $startId);
        $data = array();
        $data['list'] = $this->_db->getAll($sql, $condition['value']);

        // 统计的sql
        $csql =  "SELECT COUNT(*) FROM {$this->_tableName} {$condition['where']}";
        $num = $this->_db->getOne($csql, $condition['value']);
        $data['total'] = $num ? $num['COUNT(*)'] : 0;
        return $data;
    }

    public function count($where = null, $value = null)
    {
        $condition = $this->_parseCondition($where, $value);
        $sql = "SELECT COUNT(*) AS valueName  FROM {$this->_tableName} {$condition['where']}";
        $myRow = $this->_db->getOne($sql, $condition['value']);
        return (!$myRow) ? 0 : $myRow['valueName'];
    }

    public function where($where, $value = null)
    {
        if (!$where) return false;
        if (is_array($where)) {
            $where = implode(' AND ', $where);
        }
        $this->_parts['where'] = (isset($this->_parts['where']) && $this->_parts['where']) ? $this->_parts['where'] . ' AND ' . $where : ' WHERE ' . $where;
        if (!is_null($value)) {
            if (!is_array($value)) {
                $value = func_get_args();
                array_shift($value);
            }
            if (isset($this->_parts['whereValue']) && $this->_parts['whereValue']) {
                $this->_parts['whereValue'] = array_merge($this->_parts['whereValue'], $value);
            } else {
                $this->_parts['whereValue'] = $value;
            }
        }
        return $this;
    }

    public function order($orderDesc)
    {
        if (!$orderDesc) return false;
        if (is_array($orderDesc)) {
            $orderDesc = implode(',', $orderDesc);
        }
        $this->_parts['order'] = (isset($this->_parts['order']) && $this->_parts['order']) ? $this->_parts['order'] . ', ' . $orderDesc : ' ORDER BY ' . $orderDesc;
        return $this;
    }

    public function fields($fieldName)
    {

        if (!$fieldName) return false;
        if (!is_array($fieldName)) {
            $fieldName = func_get_args();
        }
        $fieldName = implode(',', $fieldName);
        $this->_parts['fields'] = $fieldName;
        return $this;
    }

    public function pageLimit($page, $listNum)
    {
        $page = (int)$page;
        $listNum = (int)$listNum;
        if (!$listNum) return false;
        $page = ($page < 1) ? 1 : $page;
        $startId = (int)$listNum * ($page - 1);
        return $this->limit($startId, $listNum);
    }

    public function limit($limitStart, $listNum = null)
    {
        $limitStart = (int)$limitStart;
        $listNum = (int)$listNum;
        $limitStr = ($listNum) ? $limitStart . ', ' . $listNum : $limitStart;
        $this->_parts['limit'] = ' LIMIT ' . $limitStr;
        return $this;
    }

    public function __destruct()
    {
        $this->_db = null;
        $this->_parts = array();
    }

}