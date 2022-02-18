/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************!*\
  !*** ./js/index.js ***!
  \*********************/
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

		let numSlides = 3;
		if(window.innerWidth >= 1024){
			numSlides = 6
		}

		if(window.innerWidth < 1024 && window.innerWidth >= 420){
			numSlides = 4;
		}

    $('.sponsors_carousel').slick({
      accesibility: true,
      arrows:false,
      draggable:false,
      slidesToShow: numSlides,
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

		$("body").fitVids();

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

/******/ })()
;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly93ZWItYmFzZS10aGVtZS8uL2pzL2luZGV4LmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGtDQUFrQyx5QkFBeUIsZ0NBQWdDLElBQUksUUFBUSxJQUFJLFFBQVEsSUFBSSxRQUFRLElBQUksaUNBQWlDLEdBQUc7QUFDdks7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLEtBQUs7O0FBRUw7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKO0FBQ0EsR0FBRzs7QUFFSDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLHNCQUFzQiwrQkFBK0I7QUFDckQsS0FBSztBQUNMLElBQUk7QUFDSjs7O0FBR0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLFFBQVE7O0FBRVI7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0Esc0JBQXNCLE1BQU0sS0FBSyxPQUFPO0FBQ3hDO0FBQ0E7QUFDQTs7QUFFQSxFQUFFO0FBQ0YsQ0FBQyIsImZpbGUiOiJpbmRleC5idW5kbGUuanMiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oJCl7XG5cdFwidXNlIHN0cmljdFwiO1xuXHQkKGZ1bmN0aW9uKCl7XG5cdFx0Y29uc29sZS5sb2coJ2luZGV4IGpzJyk7XG5cdFx0LyoqXG5cdFx0ICogVmFsaWRhY2nDs24gZGUgZW1haWxzXG5cdFx0ICovXG5cdFx0d2luZG93LnZhbGlkYXRlRW1haWwgPSBmdW5jdGlvbiAoZW1haWwpIHtcblx0XHRcdHZhciByZWdFeHAgPSAvXigoW148PigpW1xcXVxcXFwuLDs6XFxzQFxcXCJdKyhcXC5bXjw+KClbXFxdXFxcXC4sOzpcXHNAXFxcIl0rKSopfChcXFwiLitcXFwiKSlAKChcXFtbMC05XXsxLDN9XFwuWzAtOV17MSwzfVxcLlswLTldezEsM31cXC5bMC05XXsxLDN9XFxdKXwoKFthLXpBLVpcXC0wLTldK1xcLikrW2EtekEtWl17Mix9KSkkLztcblx0XHRcdHJldHVybiByZWdFeHAudGVzdChlbWFpbCk7XG5cdFx0fTtcblx0XHQvKipcblx0XHQgKiBSZWdyZXNhIHRvZG9zIGxvcyB2YWxvcmVzIGRlIHVuIGZvcm11bGFyaW8gY29tbyB1biBhc3NvY2lhdGl2ZSBhcnJheVxuXHRcdCAqL1xuXHRcdHdpbmRvdy5nZXRGb3JtRGF0YSA9IGZ1bmN0aW9uKHNlbGVjdG9yKXtcblx0XHRcdHZhciByZXN1bHQgPSBbXSxcblx0XHRcdFx0ZGF0YSAgID0gJChzZWxlY3Rvcikuc2VyaWFsaXplQXJyYXkoKTtcblx0XHRcdCQubWFwKGRhdGEsIGZ1bmN0aW9uIChhdHRyKSB7XG5cdFx0XHRcdHJlc3VsdFthdHRyLm5hbWVdID0gYXR0ci52YWx1ZTtcblx0XHRcdH0pO1xuXHRcdFx0cmV0dXJuIHJlc3VsdDtcblx0XHR9XG5cblx0XHRsZXQgbnVtU2xpZGVzID0gMztcblx0XHRpZih3aW5kb3cuaW5uZXJXaWR0aCA+PSAxMDI0KXtcblx0XHRcdG51bVNsaWRlcyA9IDZcblx0XHR9XG5cblx0XHRpZih3aW5kb3cuaW5uZXJXaWR0aCA8IDEwMjQgJiYgd2luZG93LmlubmVyV2lkdGggPj0gNDIwKXtcblx0XHRcdG51bVNsaWRlcyA9IDQ7XG5cdFx0fVxuXG4gICAgJCgnLnNwb25zb3JzX2Nhcm91c2VsJykuc2xpY2soe1xuICAgICAgYWNjZXNpYmlsaXR5OiB0cnVlLFxuICAgICAgYXJyb3dzOmZhbHNlLFxuICAgICAgZHJhZ2dhYmxlOmZhbHNlLFxuICAgICAgc2xpZGVzVG9TaG93OiBudW1TbGlkZXMsXG4gICAgICBhdXRvcGxheTp0cnVlLFxuICAgICAgYXV0b3BsYXlTcGVlZDogNjY2LFxuICAgICAgY2VudGVyTW9kZTp0cnVlLFxuICAgICAgaW5maW5pdGU6dHJ1ZSxcbiAgICAgIG1vYmlsZUZpcnN0OnRydWUsXG4gICAgICBzcGVlZDogMzMzM1xuICAgIH0pO1xuXG5cdFx0bGV0IGhhbWJ1cmdlciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiaGFtYnVyZ2VyXCIpO1xuXHRcdGxldCBpbyA9IDA7XG5cdFx0bGV0IGNvdW50ID0gMDtcblx0XHRoYW1idXJnZXIuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIChldnQpID0+IHtcblx0XHRcdGNvbnN0IG1lbnUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1haW5fbWVudVwiKTtcblx0XHRcdGNvbnN0IG1lbnVfbGlzdCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWVudS1tYWluLW1lbnVcIik7XG5cdFx0XHRsZXQgc2hvd0l0ID0gKCsrY291bnQlMikgPyAxIDogMDtcblx0XHRcdEFycmF5LmZyb20obWVudV9saXN0LmNoaWxkcmVuKS5mb3JFYWNoKCh2LCBrKSA9PiB7XG5cdFx0XHRcdHYuc3R5bGUub3BhY2l0eSA9IHNob3dJdDtcblx0XHRcdH0pO1xuXHRcdFx0KCsraW8lMikgPyBoYW5kbGVUb2dnbGUobWVudSwgdHJ1ZSkgOiBoYW5kbGVUb2dnbGUobWVudSwgZmFsc2UpO1xuXHRcdH0pO1xuXG5cdFx0Y29uc3QgaGFuZGxlVG9nZ2xlID0gKHRhcmcsIHN0YXRlKSA9PiB7XG5cdFx0XHRzd2l0Y2ggKHN0YXRlKSB7XG5cdFx0XHRcdGNhc2UgdHJ1ZTpcblx0XHRcdFx0XHR0YXJnLnN0eWxlLndpZHRoID0gXCIxMDAlXCI7XG5cdFx0XHRcdFx0YnJlYWs7XG5cdFx0XHRcdGRlZmF1bHQ6XG5cdFx0XHRcdFx0dGFyZy5zdHlsZS53aWR0aCA9IFwiMHB4XCI7XG5cdFx0XHR9XG5cdFx0fVxuXG5cdFx0JChcImJvZHlcIikuZml0VmlkcygpO1xuXG5cdFx0Y29uc3QgYnRuX3BsYXllciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiYnRuX2xvYWRfcHlyXCIpO1xuXHRcdGxldCBpZnJhbWUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInlvdXR1YmVfdmlkZW9fcGxheWVyXCIpO1xuXHRcdGNvbnN0IGNvdmVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJmaXJzdF92aWRfZmlnXCIpO1xuXHRcdGlmKGJ0bl9wbGF5ZXIgIT0gbnVsbCl7XG5cdFx0XHRidG5fcGxheWVyLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoZXZ0KSA9PiB7XG5cdFx0XHRcdGxldCB0YXJnZXQgPSBldnQudGFyZ2V0O1xuXHRcdFx0XHRsZXQgdmFsdWUgPSB0YXJnZXQudmFsdWU7XG5cdFx0XHRcdGNvdmVyLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcblx0XHRcdFx0aWZyYW1lLnN0eWxlLmRpc3BsYXkgPSBcImlubGluZVwiO1xuXHRcdFx0XHQkKFwiLmZsdWlkLXdpZHRoLXZpZGVvLXdyYXBwZXJcIikuc2hvdygpO1xuXHRcdFx0fSk7XG5cdFx0fVxuXG5cdFx0bGV0IGNhcmRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5jYXJkX2ZpZ1wiKTtcblx0XHRpZihjYXJkcyAhPSBudWxsKXtcblx0XHRcdGNhcmRzLmZvckVhY2goKGl0ZW0sIGkpID0+IHtcblx0XHRcdFx0aXRlbS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGV2dCkgPT4ge1xuXHRcdFx0XHRcdGxldCB0YXJnZXQgPSBldnQudGFyZ2V0O1xuXHRcdFx0XHRcdGxldCB2SUQgPSB0YXJnZXQuZGF0YXNldC5hc3NldDtcblx0XHRcdFx0XHRsZXQgYXNzZXRfdXJsID0gXCJodHRwczovL3d3dy55b3V0dWJlLmNvbS9lbWJlZC9cIit2SUQ7XG5cdFx0XHRcdFx0aWZyYW1lLnNyYyA9IGFzc2V0X3VybDtcblx0XHRcdFx0XHRjb3Zlci5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG5cdFx0XHRcdFx0aWZyYW1lLnN0eWxlLmRpc3BsYXkgPSBcImlubGluZVwiO1xuXHRcdFx0XHRcdCQoXCIuZmx1aWQtd2lkdGgtdmlkZW8td3JhcHBlclwiKS5zaG93KCk7XG5cdFx0XHRcdFx0d2luZG93LnNjcm9sbFRvKHt0b3A6MCxsZWZ0OjAsYmVoYXZpb3I6XCJzbW9vdGhcIn0pO1xuXHRcdFx0XHR9KTtcblx0XHRcdH0pO1xuXHRcdH1cblxuXG5cdFx0Ly8gJChcIiNsYXRlc3QgLmlubmVyX3dyYXBwZXJcIikuc2xpY2soe1xuXHRcdC8vIFx0YWNjZXNpYmlsaXR5OiB0cnVlLFxuICAgIC8vICAgYXJyb3dzOmZhbHNlLFxuICAgIC8vICAgZHJhZ2dhYmxlOmZhbHNlLFxuICAgIC8vICAgc2xpZGVzVG9TaG93OiAzLFxuICAgIC8vICAgYXV0b3BsYXk6dHJ1ZSxcbiAgICAvLyAgIGF1dG9wbGF5U3BlZWQ6IDY2NixcbiAgICAvLyAgIGNlbnRlck1vZGU6dHJ1ZSxcbiAgICAvLyAgIGluZmluaXRlOnRydWUsXG4gICAgLy8gICBtb2JpbGVGaXJzdDp0cnVlLFxuICAgIC8vICAgc3BlZWQ6IDMzMzNcbiAgICAvLyB9KTtcblxuXHRcdC8vIGxldCB3aWR0aCA9IHdpbmRvdy5pbm5lcldpZHRoO1xuXHRcdC8vIGxldCBoZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQ7XG5cdFx0Ly8gd2luZG93Lm9ucmVzaXplID0gZnVuY3Rpb24oKXtcblx0XHQvLyBcdHdpZHRoID0gd2luZG93LmlubmVyV2lkdGg7XG5cdFx0Ly8gXHRoZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQ7XG5cdFx0Ly8gXHRpZih3aWR0aCA+PSBcIjEyMDBcIil7XG5cdFx0Ly8gXHRcdGNvbnNvbGUubG9nKGAke3dpZHRofSB4ICR7aGVpZ2h0fWApO1xuXHRcdC8vXG5cdFx0Ly8gXHR9XG5cdFx0Ly8gfVxuXG5cdH0pO1xufSkoalF1ZXJ5KTtcbiJdLCJzb3VyY2VSb290IjoiIn0=