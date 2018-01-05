<script> 
var a = "https://render.alipay.com/p/f/fd-j6lzqrgm/guiderofmklvtvw.html?shareId=2088512285275694&campStr=p1j%2BdzkZl018zOczaHT4Z5CLdPVCgrEXq89JsWOx1gdt05SIDMPg3PTxZbdPw9dL&sign=dm2TaFkJgHFY%2Fu7NdQy7mki9pb05MBclo%2F03QkCKSuM%3D&scene=offlinePaymentNewSns";//替换你的红包链接
var b = "https://render.alipay.com/p/f/fd-j6lzqrgm/guiderofmklvtvw.html?shareId=2088512285275694&campStr=p1j%2BdzkZl018zOczaHT4Z5CLdPVCgrEXq89JsWOx1gdt05SIDMPg3PTxZbdPw9dL&sign=dm2TaFkJgHFY%2Fu7NdQy7mki9pb05MBclo%2F03QkCKSuM%3D&scene=offlinePaymentNewSns";//替换你的红包链接
function is_weixin() {

if (/MicroMessenger/i.test(navigator.userAgent)) { return true } else { return false }

}
function is_android() {

var ua = navigator.userAgent.toLowerCase(); if (ua.match(/(Android|SymbianOS)/i)) { return true } else { return false }

}
function is_ios() {

var ua = navigator.userAgent.toLowerCase(); if (/iphone|ipad|ipod/.test(ua)) { return true } else { return false }

}
function android_auto_jump() {

WeixinJSBridge.invoke("jumpToInstallUrl", {}, function(e) {}); window.close(); WeixinJSBridge.call("closeWindow")

}
function ios_auto_jump() {

if (a != "") { location.href = a } else { window.close(); WeixinJSBridge.call("closeWindow") }

}
function onAutoinit() {

if (is_android()) { android_auto_jump(); return false } if (is_ios()) { ios_auto_jump(); return false }

}
if (is_weixin()) {

if (typeof WeixinJSBridge == "undefined") { if (document.addEventListener) { document.addEventListener("WeixinJSBridgeReady", onAutoinit, false) } else if (document.attachEvent) { document.attachEvent("WeixinJSBridgeReady", onAutoinit); document.attachEvent("onWeixinJSBridgeReady", onAutoinit) } } else { onAutoinit() }

} else {

if (b != "") { location.href = b } else { window.close() }

}
</script>