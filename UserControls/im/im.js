var __oran_top_offset = 0, isIE6;
function __oran_kf_get(elmId) { return document.getElementById(elmId); }
function writeIm(textS) {
    var siteNm = "";
    __oran_top_offset = imInfo.imTop;
    var textCrumbs = textS.split(',');
    if (textCrumbs.length == 0) return;
    if (!imInfo.imCom) { siteNm = "Oran"; } else { siteNm = imInfo.imCom; }
    var rowStr = "<div id='kefubtn' style='text-align:" + imInfo.imPosition + ";cursor:pointer;display:none' ><img alt='打开客服菜单' src='/UserControls/im/kefu/kf-1.gif' onclick='__oran_kf_setKf(1,true)'></div><div id='bodd'><div class='ImHeader' onclick='__oran_kf_setKf(0)' style='cursor:pointer' title='隐藏客服菜单'></div><table class='ImTable' border='0' cellspacing='0' cellpadding='0' width='150'>";
    var online = [0];
    var imName = "qq";
    var altText;
    var imgPath;
    var classIm;
    var thisIm;
    var idCrumbs;
    for (var i = 0; i < textCrumbs.length; ++i) {
        if (textCrumbs[i].indexOf('||') == -1) {
            continue;
        }
        classIm = textCrumbs[i].split('||');
        if (classIm[0]) {
            rowStr += "<tr style='display:none;'><td align='center' valign='middle' height='30'><h2>" + classIm[0] + "</h2><img src='/UserControls/im/kefu/title.gif'></td></tr>";
        }
        idCrumbs = classIm[1].split('|');
        for (var j = 0; j < idCrumbs.length; ++j) {
            thisim = idCrumbs[j].split('$');
            rowStr += "<tr><td><div  class='ImRow" + (j % 2) + "'><a title='" + thisim[2] + "' target='_blank' class='im' href='";
            if (idCrumbs[j].indexOf('@') != -1) {
                rowStr += "msnim:chat?contact=";
                imName = "msn";
            } else if (idCrumbs[j].indexOf('?call') != -1) {
                rowStr += "skype:";
                imName = "skype";
            } else if (idCrumbs[j].indexOf('?ww') != -1) {
                rowStr += "http://amos.alicdn.com/getcid.aw?v=2&site=cntaobao&s=2&groupid=0&charset=utf-8&uid=";
                imName = "ww";
            } else if (idCrumbs[j].indexOf('?ali') != -1) {
                rowStr += "http://amos.alicdn.com/getcid.aw?v=2&site=cnalichn&s=11&groupid=0&charset=utf-8&uid=";
                imName = "ali";
            }
            else {
                rowStr += "http://wpa.qq.com/msgrd?v=3&site=" + siteNm + "&menu=yes&uin=";
                imName = "qq";
            }
            rowStr += thisim[0].replace("?ww", "").replace("?ali", "");
            switch (imName) {
                case "msn": altText = "MSN"; imgPath = "/UserControls/im/kefu/im_msn_online.gif"; break;
                case "qq": altText = "QQ"; imgPath = "http://wpa.qq.com/pa?p=2:" + thisim[0] + ":52"; break;
                case "skype": altText = "Skype"; imgPath = "/UserControls/im/kefu/skype.gif"; break;
                case "ww": altText = "Wangwang"; imgPath = "http://amos.alicdn.com/online.aw?v=2&uid=" + thisim[0].replace("?ww", "") + "&site=cntaobao&s=2&charset=utf-8"; break;
                case "ali": altText = "阿里巴巴"; imgPath = "http://amos.alicdn.com/online.aw?v=2&uid=" + thisim[0].replace("?ali", "") + "&site=cnalichn&s=11&charset=utf-8"; break;
            }
            rowStr += "'><img src='" + imgPath + "' alt='" + altText + "' onload='asdf(this,\"" + altText + "\")' onerror='asdf(this,\"" + altText + "\",true)' style='border:none' align='absmiddle' border='0' /> " + thisim[1] + "</a></div></td></tr>";
        }
    }
    rowStr += "</table><div class='ImFooter' onclick='__oran_kf_setKf(0,true)' style='cursor:pointer' title='隐藏客服菜单'><h5>全国服务热线</h5><p>" + imInfo.imLine + "</p></div></div>";
    $("#divOranIm").html(rowStr).css({ position: getOs(), top: __oran_top_offset }).css(imInfo.imPosition, "0px");
    __oran_kf_setPostion('divOranIm');
}
function __oran_kf_setKf(valtype, writeCookie) {
    if (valtype == 0) {
        __oran_kf_get("bodd").style.display = "none";
        __oran_kf_get("kefubtn").style.display = "";
        __oran_kf_get("divOranIm").style.width = "25px";
        if (writeCookie)
            __oran_kf_setCookie("kefutype", 0);
    } else {
        __oran_kf_get("bodd").style.display = "";
        __oran_kf_get("kefubtn").style.display = "none";
        __oran_kf_get("divOranIm").style.width = "150px";
        if (writeCookie)
            __oran_kf_setCookie("kefutype", 1);
    }
}
function __oran_kf_getPosition() {
    var top = document.documentElement.scrollTop;
    var left = document.documentElement.scrollLeft;
    var height = document.documentElement.clientHeight;
    var width = document.documentElement.clientWidth;
    return { top: top, left: left, height: height, width: width };
}
function __oran_kf_setPostion(objID) {
    var obj = __oran_kf_get(objID);
    window.onscroll = function () {
        var Position = __oran_kf_getPosition();
        obj.style.top = (window.isIE6 ? (Position.top) : 0) + __oran_top_offset + "px";
        obj.style.right = 0;
    };
    var show = true;
    var cookeVal = __oran_kf_getCookie("kefutype");
    if (cookeVal == null || cookeVal == "0") show = false;
    __oran_kf_setKf(show ? 1 : 0, true);
}
function __oran_kf_setCookie(name, value) {
    var Days = 1;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 10000);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString() + ";path=/";
}
function __oran_kf_getCookie(name) {
    var arr;
    var rgx = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
    if (arr = document.cookie.match(rgx)) return unescape(arr[2]);
    else return null;
}
function getOs() {
    var OsObject = "";
    if (navigator.userAgent.indexOf("MSIE") > 0) {
        if (isIE6 = navigator.appVersion.split(";")[1].replace(/[ ]/g, "").indexOf("6") > 0)
        { return "absolute"; } else {
            return "fixed";
        }
    }
    if (isFirefox = navigator.userAgent.indexOf("Firefox") > 0) {
        return "fixed";
    }
    if (isSafari = navigator.userAgent.indexOf("Safari") > 0) {
        return "fixed";
    }
    if (isCamino = navigator.userAgent.indexOf("Camino") > 0) {
        return "fixed";
    }
    if (isMozilla = navigator.userAgent.indexOf("Gecko/") > 0) {
        return "absolute";
    } else { return "fixed"; }
}
function asdf(src, a, isError) {
    if (a == "QQ") {
        var impic = new Image();
        impic.src = src.src;
        if (impic.width > 30 || isError) {
            src.src = "/UserControls/IM/kefu/im_qq_offline.gif";
            src.title = "未启用";
        }
        impic = null;
    }
} 