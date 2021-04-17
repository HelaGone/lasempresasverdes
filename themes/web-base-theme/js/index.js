(function($){
	"use strict";
	$(function(){
		console.log('index js');
		/**
		 * Validación de emails
		 */
		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};
		/**
		 * Regresa todos los valores de un formulario como un associative array
		 */
		window.getFormData = function(selector){
			var result = [],
				data   = $(selector).serializeArray();
			$.map(data, function (attr) {
				result[attr.name] = attr.value;
			});
			return result;
		}

    $('.sponsors_carousel').slick({
      accesibility: true,
      arrows:false,
      draggable:false,
      slidesToShow: 3,
      autoplay:true,
      autoplaySpeed: 666,
      centerMode:true,
      infinite:true,
      mobileFirst:true,
      speed: 3333
    });

		let hamburger = document.getElementById("hamburger");
		let io = 0;
		let count = 0;
		hamburger.addEventListener("click", (evt) => {
			const menu = document.getElementById("main_menu");
			const menu_list = document.getElementById("menu-main-menu");
			let showIt = (++count%2) ? 1 : 0;
			Array.from(menu_list.children).forEach((v, k) => {
				v.style.opacity = showIt;
			});
			(++io%2) ? handleToggle(menu, true) : handleToggle(menu, false);
		});

		const handleToggle = (targ, state) => {
			switch (state) {
				case true:
					targ.style.width = "100%";
					break;
				default:
					targ.style.width = "0px";
			}
		}

		//$("body").fitVids();

		const btn_player = document.getElementById("btn_load_pyr");
		let iframe = document.getElementById("youtube_video_player");
		const cover = document.getElementById("first_vid_fig");
		if(btn_player != null){
			btn_player.addEventListener("click", (evt) => {
				let target = evt.target;
				let value = target.value;
				cover.style.display = "none";
				iframe.style.display = "inline";
				$(".fluid-width-video-wrapper").show();
			});
		}

		let cards = document.querySelectorAll(".card_fig");
		if(cards != null){
			cards.forEach((item, i) => {
				item.addEventListener("click", (evt) => {
					let target = evt.target;
					let vID = target.dataset.asset;
					let asset_url = "https://www.youtube.com/embed/"+vID;
					iframe.src = asset_url;
					cover.style.display = "none";
					iframe.style.display = "inline";
					$(".fluid-width-video-wrapper").show();
					window.scrollTo({top:0,left:0,behavior:"smooth"});
				});
			});
		}


		// $("#latest .inner_wrapper").slick({
		// 	accesibility: true,
    //   arrows:false,
    //   draggable:false,
    //   slidesToShow: 3,
    //   autoplay:true,
    //   autoplaySpeed: 666,
    //   centerMode:true,
    //   infinite:true,
    //   mobileFirst:true,
    //   speed: 3333
    // });

		// let width = window.innerWidth;
		// let height = window.innerHeight;
		// window.onresize = function(){
		// 	width = window.innerWidth;
		// 	height = window.innerHeight;
		// 	if(width >= "1200"){
		// 		console.log(`${width} x ${height}`);
		//
		// 	}
		// }

	});
})(jQuery);
