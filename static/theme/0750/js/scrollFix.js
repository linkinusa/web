!function(a){jQuery.fn.scrollFix=function(b,c){return b=b||0,b="top"==b?0:b,this.each(function(){function i(){return(document.documentElement.scrollTop||document.body.scrollTop)+b-d.offset().top}"bottom"==b?b=document.documentElement.clientHeight-this.scrollHeight:0>b&&(b=document.documentElement.clientHeight-this.scrollHeight+b);var f,g,d=a(this),e=!1;d.offset().left,c="bottom"==c?c:"top",window.XMLHttpRequest?a(window).scroll(function(){e===!1?(i()>=0&&"top"==c||i()<=0&&"bottom"==c)&&(e=d.offset().top-b,d.css({position:"fixed",top:b,left:"auto"})):"top"==c&&(document.documentElement.scrollTop||document.body.scrollTop)<e?(d.css({position:"static"}),e=!1):"bottom"==c&&(document.documentElement.scrollTop||document.body.scrollTop)>e&&(d.css({position:"static"}),e=!1)}):a(window).scroll(function(){e===!1?(i()>=0&&"top"==c||i()<=0&&"bottom"==c)&&(e=d.offset().top-b,g=document.createElement("span"),f=d[0].parentNode,f.replaceChild(g,d[0]),document.body.appendChild(d[0]),d[0].style.position="absolute"):"top"==c&&(document.documentElement.scrollTop||document.body.scrollTop)<e||"bottom"==c&&(document.documentElement.scrollTop||document.body.scrollTop)>e?(d[0].style.position="static",f.replaceChild(d[0],g),g=null,e=!1):d.css({left:"auto",top:b+document.documentElement.scrollTop})})})}}(jQuery);