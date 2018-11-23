
// should be embedded on a web page

String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};

var characts = {
	"ë":"e",
		"é":"e",
		"ê":"e",
		"è":"e",
		"â":"a",
		"à":"a",
		"ä":"a",
		"ö":"o",
		"ô":"o",
		"ü":"u",
		"î":"i",
		"ï":"i",
		"ç":"c",
		"Ã¨":"e",
		"Ã©":"e"
 } ;
$( document ).ready(function() { 




//$("a").attr("href", "http://www.google.com/") ;

$("a")
   .each(function()
   { 
	 var arr = this.href.split("/") ;
	 var sfile  = arr.pop() ;

	 sfile =  unescape(sfile).replaceAll(" ", "_") ;
	 for(var prop in characts){
		 //console.log(prop) ;
		 //console.log(characts[prop]) ;
	 	sfile= sfile.replaceAll(prop, characts[prop]) ;
	}
	console.log(sfile) ;	 
	 this.href = "annexes/" + sfile ;

	 
   });
console.log("running") ;
});


