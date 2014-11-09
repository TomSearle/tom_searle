(function(){
	var menuBtn = document.getElementsByClassName('btn--menu')[0];
	var menu = document.getElementsByClassName('menu')[0];
	var main = document.getElementsByClassName('main')[0];

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



}());