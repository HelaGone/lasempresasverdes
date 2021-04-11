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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly93ZWItYmFzZS10aGVtZS8uL2pzL2luZGV4LmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGtDQUFrQyx5QkFBeUIsZ0NBQWdDLElBQUksUUFBUSxJQUFJLFFBQVEsSUFBSSxRQUFRLElBQUksaUNBQWlDLEdBQUc7QUFDdks7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsS0FBSzs7QUFFTDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsUUFBUTs7QUFFUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxzQkFBc0IsTUFBTSxLQUFLLE9BQU87QUFDeEM7QUFDQTtBQUNBOztBQUVBLEVBQUU7QUFDRixDQUFDIiwiZmlsZSI6ImluZGV4LmJ1bmRsZS5qcyIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbigkKXtcblx0XCJ1c2Ugc3RyaWN0XCI7XG5cdCQoZnVuY3Rpb24oKXtcblx0XHRjb25zb2xlLmxvZygnaW5kZXgganMnKTtcblx0XHQvKipcblx0XHQgKiBWYWxpZGFjacOzbiBkZSBlbWFpbHNcblx0XHQgKi9cblx0XHR3aW5kb3cudmFsaWRhdGVFbWFpbCA9IGZ1bmN0aW9uIChlbWFpbCkge1xuXHRcdFx0dmFyIHJlZ0V4cCA9IC9eKChbXjw+KClbXFxdXFxcXC4sOzpcXHNAXFxcIl0rKFxcLltePD4oKVtcXF1cXFxcLiw7Olxcc0BcXFwiXSspKil8KFxcXCIuK1xcXCIpKUAoKFxcW1swLTldezEsM31cXC5bMC05XXsxLDN9XFwuWzAtOV17MSwzfVxcLlswLTldezEsM31cXF0pfCgoW2EtekEtWlxcLTAtOV0rXFwuKStbYS16QS1aXXsyLH0pKSQvO1xuXHRcdFx0cmV0dXJuIHJlZ0V4cC50ZXN0KGVtYWlsKTtcblx0XHR9O1xuXHRcdC8qKlxuXHRcdCAqIFJlZ3Jlc2EgdG9kb3MgbG9zIHZhbG9yZXMgZGUgdW4gZm9ybXVsYXJpbyBjb21vIHVuIGFzc29jaWF0aXZlIGFycmF5XG5cdFx0ICovXG5cdFx0d2luZG93LmdldEZvcm1EYXRhID0gZnVuY3Rpb24oc2VsZWN0b3Ipe1xuXHRcdFx0dmFyIHJlc3VsdCA9IFtdLFxuXHRcdFx0XHRkYXRhICAgPSAkKHNlbGVjdG9yKS5zZXJpYWxpemVBcnJheSgpO1xuXHRcdFx0JC5tYXAoZGF0YSwgZnVuY3Rpb24gKGF0dHIpIHtcblx0XHRcdFx0cmVzdWx0W2F0dHIubmFtZV0gPSBhdHRyLnZhbHVlO1xuXHRcdFx0fSk7XG5cdFx0XHRyZXR1cm4gcmVzdWx0O1xuXHRcdH1cblxuICAgICQoJy5zcG9uc29yc19jYXJvdXNlbCcpLnNsaWNrKHtcbiAgICAgIGFjY2VzaWJpbGl0eTogdHJ1ZSxcbiAgICAgIGFycm93czpmYWxzZSxcbiAgICAgIGRyYWdnYWJsZTpmYWxzZSxcbiAgICAgIHNsaWRlc1RvU2hvdzogMyxcbiAgICAgIGF1dG9wbGF5OnRydWUsXG4gICAgICBhdXRvcGxheVNwZWVkOiA2NjYsXG4gICAgICBjZW50ZXJNb2RlOnRydWUsXG4gICAgICBpbmZpbml0ZTp0cnVlLFxuICAgICAgbW9iaWxlRmlyc3Q6dHJ1ZSxcbiAgICAgIHNwZWVkOiAzMzMzXG4gICAgfSk7XG5cblx0XHQvLyAkKFwiI2xhdGVzdCAuaW5uZXJfd3JhcHBlclwiKS5zbGljayh7XG5cdFx0Ly8gXHRhY2Nlc2liaWxpdHk6IHRydWUsXG4gICAgLy8gICBhcnJvd3M6ZmFsc2UsXG4gICAgLy8gICBkcmFnZ2FibGU6ZmFsc2UsXG4gICAgLy8gICBzbGlkZXNUb1Nob3c6IDMsXG4gICAgLy8gICBhdXRvcGxheTp0cnVlLFxuICAgIC8vICAgYXV0b3BsYXlTcGVlZDogNjY2LFxuICAgIC8vICAgY2VudGVyTW9kZTp0cnVlLFxuICAgIC8vICAgaW5maW5pdGU6dHJ1ZSxcbiAgICAvLyAgIG1vYmlsZUZpcnN0OnRydWUsXG4gICAgLy8gICBzcGVlZDogMzMzM1xuICAgIC8vIH0pO1xuXG5cdFx0Ly8gbGV0IHdpZHRoID0gd2luZG93LmlubmVyV2lkdGg7XG5cdFx0Ly8gbGV0IGhlaWdodCA9IHdpbmRvdy5pbm5lckhlaWdodDtcblx0XHQvLyB3aW5kb3cub25yZXNpemUgPSBmdW5jdGlvbigpe1xuXHRcdC8vIFx0d2lkdGggPSB3aW5kb3cuaW5uZXJXaWR0aDtcblx0XHQvLyBcdGhlaWdodCA9IHdpbmRvdy5pbm5lckhlaWdodDtcblx0XHQvLyBcdGlmKHdpZHRoID49IFwiMTIwMFwiKXtcblx0XHQvLyBcdFx0Y29uc29sZS5sb2coYCR7d2lkdGh9IHggJHtoZWlnaHR9YCk7XG5cdFx0Ly9cblx0XHQvLyBcdH1cblx0XHQvLyB9XG5cblx0fSk7XG59KShqUXVlcnkpO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==