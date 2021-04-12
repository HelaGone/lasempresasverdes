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

		const btn_player = document.getElementById("btn_load_pyr");
		let iframe = document.getElementById("youtube_video_player");
		const cover = document.getElementById("first_vid_fig");
		if(btn_player != null){
			btn_player.addEventListener("click", (evt) => {
				let target = evt.target;
				let value = target.value;
				cover.style.display = "none";
				iframe.style.display = "inline";
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly93ZWItYmFzZS10aGVtZS8uL2pzL2luZGV4LmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGtDQUFrQyx5QkFBeUIsZ0NBQWdDLElBQUksUUFBUSxJQUFJLFFBQVEsSUFBSSxRQUFRLElBQUksaUNBQWlDLEdBQUc7QUFDdks7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsS0FBSzs7QUFFTDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7QUFDQSxHQUFHOztBQUVIO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxzQkFBc0IsK0JBQStCO0FBQ3JELEtBQUs7QUFDTCxJQUFJO0FBQ0o7OztBQUdBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxRQUFROztBQUVSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLHNCQUFzQixNQUFNLEtBQUssT0FBTztBQUN4QztBQUNBO0FBQ0E7O0FBRUEsRUFBRTtBQUNGLENBQUMiLCJmaWxlIjoiaW5kZXguYnVuZGxlLmpzIiwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uKCQpe1xuXHRcInVzZSBzdHJpY3RcIjtcblx0JChmdW5jdGlvbigpe1xuXHRcdGNvbnNvbGUubG9nKCdpbmRleCBqcycpO1xuXHRcdC8qKlxuXHRcdCAqIFZhbGlkYWNpw7NuIGRlIGVtYWlsc1xuXHRcdCAqL1xuXHRcdHdpbmRvdy52YWxpZGF0ZUVtYWlsID0gZnVuY3Rpb24gKGVtYWlsKSB7XG5cdFx0XHR2YXIgcmVnRXhwID0gL14oKFtePD4oKVtcXF1cXFxcLiw7Olxcc0BcXFwiXSsoXFwuW148PigpW1xcXVxcXFwuLDs6XFxzQFxcXCJdKykqKXwoXFxcIi4rXFxcIikpQCgoXFxbWzAtOV17MSwzfVxcLlswLTldezEsM31cXC5bMC05XXsxLDN9XFwuWzAtOV17MSwzfVxcXSl8KChbYS16QS1aXFwtMC05XStcXC4pK1thLXpBLVpdezIsfSkpJC87XG5cdFx0XHRyZXR1cm4gcmVnRXhwLnRlc3QoZW1haWwpO1xuXHRcdH07XG5cdFx0LyoqXG5cdFx0ICogUmVncmVzYSB0b2RvcyBsb3MgdmFsb3JlcyBkZSB1biBmb3JtdWxhcmlvIGNvbW8gdW4gYXNzb2NpYXRpdmUgYXJyYXlcblx0XHQgKi9cblx0XHR3aW5kb3cuZ2V0Rm9ybURhdGEgPSBmdW5jdGlvbihzZWxlY3Rvcil7XG5cdFx0XHR2YXIgcmVzdWx0ID0gW10sXG5cdFx0XHRcdGRhdGEgICA9ICQoc2VsZWN0b3IpLnNlcmlhbGl6ZUFycmF5KCk7XG5cdFx0XHQkLm1hcChkYXRhLCBmdW5jdGlvbiAoYXR0cikge1xuXHRcdFx0XHRyZXN1bHRbYXR0ci5uYW1lXSA9IGF0dHIudmFsdWU7XG5cdFx0XHR9KTtcblx0XHRcdHJldHVybiByZXN1bHQ7XG5cdFx0fVxuXG4gICAgJCgnLnNwb25zb3JzX2Nhcm91c2VsJykuc2xpY2soe1xuICAgICAgYWNjZXNpYmlsaXR5OiB0cnVlLFxuICAgICAgYXJyb3dzOmZhbHNlLFxuICAgICAgZHJhZ2dhYmxlOmZhbHNlLFxuICAgICAgc2xpZGVzVG9TaG93OiAzLFxuICAgICAgYXV0b3BsYXk6dHJ1ZSxcbiAgICAgIGF1dG9wbGF5U3BlZWQ6IDY2NixcbiAgICAgIGNlbnRlck1vZGU6dHJ1ZSxcbiAgICAgIGluZmluaXRlOnRydWUsXG4gICAgICBtb2JpbGVGaXJzdDp0cnVlLFxuICAgICAgc3BlZWQ6IDMzMzNcbiAgICB9KTtcblxuXHRcdGxldCBoYW1idXJnZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImhhbWJ1cmdlclwiKTtcblx0XHRsZXQgaW8gPSAwO1xuXHRcdGxldCBjb3VudCA9IDA7XG5cdFx0aGFtYnVyZ2VyLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoZXZ0KSA9PiB7XG5cdFx0XHRjb25zdCBtZW51ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJtYWluX21lbnVcIik7XG5cdFx0XHRjb25zdCBtZW51X2xpc3QgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1lbnUtbWFpbi1tZW51XCIpO1xuXHRcdFx0bGV0IHNob3dJdCA9ICgrK2NvdW50JTIpID8gMSA6IDA7XG5cdFx0XHRBcnJheS5mcm9tKG1lbnVfbGlzdC5jaGlsZHJlbikuZm9yRWFjaCgodiwgaykgPT4ge1xuXHRcdFx0XHR2LnN0eWxlLm9wYWNpdHkgPSBzaG93SXQ7XG5cdFx0XHR9KTtcblx0XHRcdCgrK2lvJTIpID8gaGFuZGxlVG9nZ2xlKG1lbnUsIHRydWUpIDogaGFuZGxlVG9nZ2xlKG1lbnUsIGZhbHNlKTtcblx0XHR9KTtcblxuXHRcdGNvbnN0IGhhbmRsZVRvZ2dsZSA9ICh0YXJnLCBzdGF0ZSkgPT4ge1xuXHRcdFx0c3dpdGNoIChzdGF0ZSkge1xuXHRcdFx0XHRjYXNlIHRydWU6XG5cdFx0XHRcdFx0dGFyZy5zdHlsZS53aWR0aCA9IFwiMTAwJVwiO1xuXHRcdFx0XHRcdGJyZWFrO1xuXHRcdFx0XHRkZWZhdWx0OlxuXHRcdFx0XHRcdHRhcmcuc3R5bGUud2lkdGggPSBcIjBweFwiO1xuXHRcdFx0fVxuXHRcdH1cblxuXHRcdGNvbnN0IGJ0bl9wbGF5ZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImJ0bl9sb2FkX3B5clwiKTtcblx0XHRsZXQgaWZyYW1lID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ5b3V0dWJlX3ZpZGVvX3BsYXllclwiKTtcblx0XHRjb25zdCBjb3ZlciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZmlyc3RfdmlkX2ZpZ1wiKTtcblx0XHRpZihidG5fcGxheWVyICE9IG51bGwpe1xuXHRcdFx0YnRuX3BsYXllci5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGV2dCkgPT4ge1xuXHRcdFx0XHRsZXQgdGFyZ2V0ID0gZXZ0LnRhcmdldDtcblx0XHRcdFx0bGV0IHZhbHVlID0gdGFyZ2V0LnZhbHVlO1xuXHRcdFx0XHRjb3Zlci5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG5cdFx0XHRcdGlmcmFtZS5zdHlsZS5kaXNwbGF5ID0gXCJpbmxpbmVcIjtcblx0XHRcdH0pO1xuXHRcdH1cblxuXHRcdGxldCBjYXJkcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuY2FyZF9maWdcIik7XG5cdFx0aWYoY2FyZHMgIT0gbnVsbCl7XG5cdFx0XHRjYXJkcy5mb3JFYWNoKChpdGVtLCBpKSA9PiB7XG5cdFx0XHRcdGl0ZW0uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIChldnQpID0+IHtcblx0XHRcdFx0XHRsZXQgdGFyZ2V0ID0gZXZ0LnRhcmdldDtcblx0XHRcdFx0XHRsZXQgdklEID0gdGFyZ2V0LmRhdGFzZXQuYXNzZXQ7XG5cdFx0XHRcdFx0bGV0IGFzc2V0X3VybCA9IFwiaHR0cHM6Ly93d3cueW91dHViZS5jb20vZW1iZWQvXCIrdklEO1xuXHRcdFx0XHRcdGlmcmFtZS5zcmMgPSBhc3NldF91cmw7XG5cdFx0XHRcdFx0Y292ZXIuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xuXHRcdFx0XHRcdGlmcmFtZS5zdHlsZS5kaXNwbGF5ID0gXCJpbmxpbmVcIjtcblx0XHRcdFx0XHR3aW5kb3cuc2Nyb2xsVG8oe3RvcDowLGxlZnQ6MCxiZWhhdmlvcjpcInNtb290aFwifSk7XG5cdFx0XHRcdH0pO1xuXHRcdFx0fSk7XG5cdFx0fVxuXG5cblx0XHQvLyAkKFwiI2xhdGVzdCAuaW5uZXJfd3JhcHBlclwiKS5zbGljayh7XG5cdFx0Ly8gXHRhY2Nlc2liaWxpdHk6IHRydWUsXG4gICAgLy8gICBhcnJvd3M6ZmFsc2UsXG4gICAgLy8gICBkcmFnZ2FibGU6ZmFsc2UsXG4gICAgLy8gICBzbGlkZXNUb1Nob3c6IDMsXG4gICAgLy8gICBhdXRvcGxheTp0cnVlLFxuICAgIC8vICAgYXV0b3BsYXlTcGVlZDogNjY2LFxuICAgIC8vICAgY2VudGVyTW9kZTp0cnVlLFxuICAgIC8vICAgaW5maW5pdGU6dHJ1ZSxcbiAgICAvLyAgIG1vYmlsZUZpcnN0OnRydWUsXG4gICAgLy8gICBzcGVlZDogMzMzM1xuICAgIC8vIH0pO1xuXG5cdFx0Ly8gbGV0IHdpZHRoID0gd2luZG93LmlubmVyV2lkdGg7XG5cdFx0Ly8gbGV0IGhlaWdodCA9IHdpbmRvdy5pbm5lckhlaWdodDtcblx0XHQvLyB3aW5kb3cub25yZXNpemUgPSBmdW5jdGlvbigpe1xuXHRcdC8vIFx0d2lkdGggPSB3aW5kb3cuaW5uZXJXaWR0aDtcblx0XHQvLyBcdGhlaWdodCA9IHdpbmRvdy5pbm5lckhlaWdodDtcblx0XHQvLyBcdGlmKHdpZHRoID49IFwiMTIwMFwiKXtcblx0XHQvLyBcdFx0Y29uc29sZS5sb2coYCR7d2lkdGh9IHggJHtoZWlnaHR9YCk7XG5cdFx0Ly9cblx0XHQvLyBcdH1cblx0XHQvLyB9XG5cblx0fSk7XG59KShqUXVlcnkpO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==