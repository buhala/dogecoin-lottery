$(function(){
	page=window.location.href.split("/");
	url=page[page.length-1];
	if(window.location.hash){
		url=url.replace(window.location.hash,"");
	}
	$("a[href='"+url+"']").parent().attr("class","active");
})