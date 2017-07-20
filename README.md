# HUAQICMS
公司常用的建站程序


# 常用的htaccess</br></br>
RewriteEngine On</br>
RewriteCond %{REQUEST_FILENAME} !-f</br>
RewriteCond %{REQUEST_FILENAME} !-d</br>
RewriteRule ^(\w+)\.html$ index.php?catdir=$1 [L]</br>
RewriteRule ^(\w+)-([0-9]+)\.html$ index.php?catdir=$1&page=$2 [L]</br>
RewriteRule ^(\w+)/(\w+)-content-([0-9]+)\.html$ index.php?id=$3&x=$2 [L]</br>
RewriteRule ^(\w+)/(\w+)-content-([0-9]+)-([0-9]+)\.html$ index.php?id=$3&page=$4&x=$2 [L]</br>
