(function () {
	$('.viewport').mouseenter(function(e) {
		console.log("in")
        $(this).children('a').children('img').animate({ height: '299', left: '0', top: '0', width: '450'}, 100);
    }).mouseleave(function(e) {
    	console.log("out")
        $(this).children('a').children('img').animate({ height: '332', left: '-20', top: '-20', width: '500'}, 100);
    });
})();
