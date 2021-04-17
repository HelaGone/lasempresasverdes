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

/******/ })()
;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly93ZWItYmFzZS10aGVtZS8uL2pzL2luZGV4LmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGtDQUFrQyx5QkFBeUIsZ0NBQWdDLElBQUksUUFBUSxJQUFJLFFBQVEsSUFBSSxRQUFRLElBQUksaUNBQWlDLEdBQUc7QUFDdks7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsS0FBSzs7QUFFTDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7QUFDQSxHQUFHOztBQUVIO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSjs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0Esc0JBQXNCLCtCQUErQjtBQUNyRCxLQUFLO0FBQ0wsSUFBSTtBQUNKOzs7QUFHQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsUUFBUTs7QUFFUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxzQkFBc0IsTUFBTSxLQUFLLE9BQU87QUFDeEM7QUFDQTtBQUNBOztBQUVBLEVBQUU7QUFDRixDQUFDIiwiZmlsZSI6ImluZGV4LmJ1bmRsZS5qcyIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbigkKXtcblx0XCJ1c2Ugc3RyaWN0XCI7XG5cdCQoZnVuY3Rpb24oKXtcblx0XHRjb25zb2xlLmxvZygnaW5kZXgganMnKTtcblx0XHQvKipcblx0XHQgKiBWYWxpZGFjacOzbiBkZSBlbWFpbHNcblx0XHQgKi9cblx0XHR3aW5kb3cudmFsaWRhdGVFbWFpbCA9IGZ1bmN0aW9uIChlbWFpbCkge1xuXHRcdFx0dmFyIHJlZ0V4cCA9IC9eKChbXjw+KClbXFxdXFxcXC4sOzpcXHNAXFxcIl0rKFxcLltePD4oKVtcXF1cXFxcLiw7Olxcc0BcXFwiXSspKil8KFxcXCIuK1xcXCIpKUAoKFxcW1swLTldezEsM31cXC5bMC05XXsxLDN9XFwuWzAtOV17MSwzfVxcLlswLTldezEsM31cXF0pfCgoW2EtekEtWlxcLTAtOV0rXFwuKStbYS16QS1aXXsyLH0pKSQvO1xuXHRcdFx0cmV0dXJuIHJlZ0V4cC50ZXN0KGVtYWlsKTtcblx0XHR9O1xuXHRcdC8qKlxuXHRcdCAqIFJlZ3Jlc2EgdG9kb3MgbG9zIHZhbG9yZXMgZGUgdW4gZm9ybXVsYXJpbyBjb21vIHVuIGFzc29jaWF0aXZlIGFycmF5XG5cdFx0ICovXG5cdFx0d2luZG93LmdldEZvcm1EYXRhID0gZnVuY3Rpb24oc2VsZWN0b3Ipe1xuXHRcdFx0dmFyIHJlc3VsdCA9IFtdLFxuXHRcdFx0XHRkYXRhICAgPSAkKHNlbGVjdG9yKS5zZXJpYWxpemVBcnJheSgpO1xuXHRcdFx0JC5tYXAoZGF0YSwgZnVuY3Rpb24gKGF0dHIpIHtcblx0XHRcdFx0cmVzdWx0W2F0dHIubmFtZV0gPSBhdHRyLnZhbHVlO1xuXHRcdFx0fSk7XG5cdFx0XHRyZXR1cm4gcmVzdWx0O1xuXHRcdH1cblxuICAgICQoJy5zcG9uc29yc19jYXJvdXNlbCcpLnNsaWNrKHtcbiAgICAgIGFjY2VzaWJpbGl0eTogdHJ1ZSxcbiAgICAgIGFycm93czpmYWxzZSxcbiAgICAgIGRyYWdnYWJsZTpmYWxzZSxcbiAgICAgIHNsaWRlc1RvU2hvdzogMyxcbiAgICAgIGF1dG9wbGF5OnRydWUsXG4gICAgICBhdXRvcGxheVNwZWVkOiA2NjYsXG4gICAgICBjZW50ZXJNb2RlOnRydWUsXG4gICAgICBpbmZpbml0ZTp0cnVlLFxuICAgICAgbW9iaWxlRmlyc3Q6dHJ1ZSxcbiAgICAgIHNwZWVkOiAzMzMzXG4gICAgfSk7XG5cblx0XHRsZXQgaGFtYnVyZ2VyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJoYW1idXJnZXJcIik7XG5cdFx0bGV0IGlvID0gMDtcblx0XHRsZXQgY291bnQgPSAwO1xuXHRcdGhhbWJ1cmdlci5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGV2dCkgPT4ge1xuXHRcdFx0Y29uc3QgbWVudSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWFpbl9tZW51XCIpO1xuXHRcdFx0Y29uc3QgbWVudV9saXN0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJtZW51LW1haW4tbWVudVwiKTtcblx0XHRcdGxldCBzaG93SXQgPSAoKytjb3VudCUyKSA/IDEgOiAwO1xuXHRcdFx0QXJyYXkuZnJvbShtZW51X2xpc3QuY2hpbGRyZW4pLmZvckVhY2goKHYsIGspID0+IHtcblx0XHRcdFx0di5zdHlsZS5vcGFjaXR5ID0gc2hvd0l0O1xuXHRcdFx0fSk7XG5cdFx0XHQoKytpbyUyKSA/IGhhbmRsZVRvZ2dsZShtZW51LCB0cnVlKSA6IGhhbmRsZVRvZ2dsZShtZW51LCBmYWxzZSk7XG5cdFx0fSk7XG5cblx0XHRjb25zdCBoYW5kbGVUb2dnbGUgPSAodGFyZywgc3RhdGUpID0+IHtcblx0XHRcdHN3aXRjaCAoc3RhdGUpIHtcblx0XHRcdFx0Y2FzZSB0cnVlOlxuXHRcdFx0XHRcdHRhcmcuc3R5bGUud2lkdGggPSBcIjEwMCVcIjtcblx0XHRcdFx0XHRicmVhaztcblx0XHRcdFx0ZGVmYXVsdDpcblx0XHRcdFx0XHR0YXJnLnN0eWxlLndpZHRoID0gXCIwcHhcIjtcblx0XHRcdH1cblx0XHR9XG5cblx0XHQvLyQoXCJib2R5XCIpLmZpdFZpZHMoKTtcblxuXHRcdGNvbnN0IGJ0bl9wbGF5ZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImJ0bl9sb2FkX3B5clwiKTtcblx0XHRsZXQgaWZyYW1lID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ5b3V0dWJlX3ZpZGVvX3BsYXllclwiKTtcblx0XHRjb25zdCBjb3ZlciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZmlyc3RfdmlkX2ZpZ1wiKTtcblx0XHRpZihidG5fcGxheWVyICE9IG51bGwpe1xuXHRcdFx0YnRuX3BsYXllci5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGV2dCkgPT4ge1xuXHRcdFx0XHRsZXQgdGFyZ2V0ID0gZXZ0LnRhcmdldDtcblx0XHRcdFx0bGV0IHZhbHVlID0gdGFyZ2V0LnZhbHVlO1xuXHRcdFx0XHRjb3Zlci5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG5cdFx0XHRcdGlmcmFtZS5zdHlsZS5kaXNwbGF5ID0gXCJpbmxpbmVcIjtcblx0XHRcdFx0JChcIi5mbHVpZC13aWR0aC12aWRlby13cmFwcGVyXCIpLnNob3coKTtcblx0XHRcdH0pO1xuXHRcdH1cblxuXHRcdGxldCBjYXJkcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuY2FyZF9maWdcIik7XG5cdFx0aWYoY2FyZHMgIT0gbnVsbCl7XG5cdFx0XHRjYXJkcy5mb3JFYWNoKChpdGVtLCBpKSA9PiB7XG5cdFx0XHRcdGl0ZW0uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIChldnQpID0+IHtcblx0XHRcdFx0XHRsZXQgdGFyZ2V0ID0gZXZ0LnRhcmdldDtcblx0XHRcdFx0XHRsZXQgdklEID0gdGFyZ2V0LmRhdGFzZXQuYXNzZXQ7XG5cdFx0XHRcdFx0bGV0IGFzc2V0X3VybCA9IFwiaHR0cHM6Ly93d3cueW91dHViZS5jb20vZW1iZWQvXCIrdklEO1xuXHRcdFx0XHRcdGlmcmFtZS5zcmMgPSBhc3NldF91cmw7XG5cdFx0XHRcdFx0Y292ZXIuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xuXHRcdFx0XHRcdGlmcmFtZS5zdHlsZS5kaXNwbGF5ID0gXCJpbmxpbmVcIjtcblx0XHRcdFx0XHQkKFwiLmZsdWlkLXdpZHRoLXZpZGVvLXdyYXBwZXJcIikuc2hvdygpO1xuXHRcdFx0XHRcdHdpbmRvdy5zY3JvbGxUbyh7dG9wOjAsbGVmdDowLGJlaGF2aW9yOlwic21vb3RoXCJ9KTtcblx0XHRcdFx0fSk7XG5cdFx0XHR9KTtcblx0XHR9XG5cblxuXHRcdC8vICQoXCIjbGF0ZXN0IC5pbm5lcl93cmFwcGVyXCIpLnNsaWNrKHtcblx0XHQvLyBcdGFjY2VzaWJpbGl0eTogdHJ1ZSxcbiAgICAvLyAgIGFycm93czpmYWxzZSxcbiAgICAvLyAgIGRyYWdnYWJsZTpmYWxzZSxcbiAgICAvLyAgIHNsaWRlc1RvU2hvdzogMyxcbiAgICAvLyAgIGF1dG9wbGF5OnRydWUsXG4gICAgLy8gICBhdXRvcGxheVNwZWVkOiA2NjYsXG4gICAgLy8gICBjZW50ZXJNb2RlOnRydWUsXG4gICAgLy8gICBpbmZpbml0ZTp0cnVlLFxuICAgIC8vICAgbW9iaWxlRmlyc3Q6dHJ1ZSxcbiAgICAvLyAgIHNwZWVkOiAzMzMzXG4gICAgLy8gfSk7XG5cblx0XHQvLyBsZXQgd2lkdGggPSB3aW5kb3cuaW5uZXJXaWR0aDtcblx0XHQvLyBsZXQgaGVpZ2h0ID0gd2luZG93LmlubmVySGVpZ2h0O1xuXHRcdC8vIHdpbmRvdy5vbnJlc2l6ZSA9IGZ1bmN0aW9uKCl7XG5cdFx0Ly8gXHR3aWR0aCA9IHdpbmRvdy5pbm5lcldpZHRoO1xuXHRcdC8vIFx0aGVpZ2h0ID0gd2luZG93LmlubmVySGVpZ2h0O1xuXHRcdC8vIFx0aWYod2lkdGggPj0gXCIxMjAwXCIpe1xuXHRcdC8vIFx0XHRjb25zb2xlLmxvZyhgJHt3aWR0aH0geCAke2hlaWdodH1gKTtcblx0XHQvL1xuXHRcdC8vIFx0fVxuXHRcdC8vIH1cblxuXHR9KTtcbn0pKGpRdWVyeSk7XG4iXSwic291cmNlUm9vdCI6IiJ9