function isMobile() {
    var navegador = navigator.userAgent.toLowerCase();
    if (navegador.search(/iphone|ipod|android|ipad|mobile/) > -1) { return true; }
    else {return false;}
}
function isIpad() {
    if (navigator.platform == 'iPad') { return true; }
    else { return false; }
}
//Detect android native browser
function isAndroid() {
    if (navigator.userAgent.toLowerCase().search("version/") > -1 && navigator.userAgent.toLowerCase().search("android") > -1) { return true; }
    else { return false; }
}
//Check if is Stand-Alone Web Application (by User Agent).
//iPad Stand-Alone Web applications don't have "Safari" in their UA.
function isStandAlone() {
    safariCondition = /Safari/g;
    androidCondition = "FitAndroid";
    if ((navigator.userAgent.match(safariCondition)) && !(navigator.userAgent.match(androidCondition))) { return false; }
    else { return true; }
}