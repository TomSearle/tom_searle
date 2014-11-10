(function(){
	var menuBtn = document.getElementsByClassName('btn--menu')[0];
	var menu = document.getElementsByClassName('menu')[0];
	var main = document.getElementsByTagName('body')[0];

	menuBtn.addEventListener('click',function(e){
		//Stop the event from bubbling up the dom
		e.stopPropagation();
		
		if (apollo.hasClass(menu,'open')) {
			apollo.removeClass(menu,'open');
		} else {
			apollo.addClass(menu,'open');
		}

		main.addEventListener('click', function(e){
			apollo.removeClass(menu,'open');
			this.removeEventListener('click');
		});

	}, false);

	//Logic for checking scrolling for the header

	var viewport = window;
	var header = document.getElementsByClassName('header')[0];
	var headerCoords = header.getBoundingClientRect();

	viewport.addEventListener('scroll',function(e){
		if ( viewport.scrollY >= headerCoords.top + 50) {
			apollo.addClass(header, 'header--is-scrolled');
		} else {
			apollo.removeClass(header, 'header--is-scrolled');
		}
	}, false);



}());