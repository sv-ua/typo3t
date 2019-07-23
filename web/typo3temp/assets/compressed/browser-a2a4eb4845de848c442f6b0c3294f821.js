$(document).ready(function(){
	
	var a;
	if (navigator.userAgent.search(/Safari/) > 0) {a = 'safari'};
	if (navigator.userAgent.search(/Firefox/) > 0) {a = 'firefox'};
	if (navigator.userAgent.search(/MSIE/) > 0 || navigator.userAgent.search(/NET CLR /) > 0) {a = 'ie'};
	if (navigator.userAgent.search(/Chrome/) > 0) {a = 'chrome'};
	if (navigator.userAgent.search(/YaBrowser/) > 0) {a = 'yandexb'};
	if (navigator.userAgent.search(/OPR/) > 0) {a = 'opera'};
	if (navigator.userAgent.search(/Konqueror/) > 0) {a = 'konqueror'};
	if (navigator.userAgent.search(/Iceweasel/) > 0) {a = 'debianiceweasel'};
	if (navigator.userAgent.search(/SeaMonkey/) > 0) {a = 'seamonkey'};
	if (navigator.userAgent.search(/Edge/) > 0) {a = 'msedge'};
	$("body").addClass(a);
	
	var is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
    var is_explorer = navigator.userAgent.indexOf('MSIE') > -1;
    var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;
    var is_safari = navigator.userAgent.indexOf("Safari") > -1;
    var is_opera = navigator.userAgent.toLowerCase().indexOf("op") > -1;
    if ((is_chrome)&&(is_safari)) {is_safari=false;}
    if ((is_chrome)&&(is_opera)) {is_chrome=false;}
	if (is_safari){
		$("body").addClass("safari");
	} 
	
	
	
});		
