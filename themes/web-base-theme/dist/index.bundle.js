/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************!*\
  !*** ./js/index.js ***!
  \*********************/
(function($){
	"use strict";
	$(function(){
		console.log('hello from index.js');
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
      slidesPerRow: 3,
      autoplay:true,
      autoplaySpeed: 666,
      centerMode:true,
      infinite:true,
      mobileFirst:true,
      speed: 3333
    });

	});
})(jQuery);

/******/ })()
;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly93ZWItYmFzZS10aGVtZS8uL2pzL2luZGV4LmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGtDQUFrQyx5QkFBeUIsZ0NBQWdDLElBQUksUUFBUSxJQUFJLFFBQVEsSUFBSSxRQUFRLElBQUksaUNBQWlDLEdBQUc7QUFDdks7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsS0FBSzs7QUFFTCxFQUFFO0FBQ0YsQ0FBQyIsImZpbGUiOiJpbmRleC5idW5kbGUuanMiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oJCl7XG5cdFwidXNlIHN0cmljdFwiO1xuXHQkKGZ1bmN0aW9uKCl7XG5cdFx0Y29uc29sZS5sb2coJ2hlbGxvIGZyb20gaW5kZXguanMnKTtcblx0XHQvKipcblx0XHQgKiBWYWxpZGFjacOzbiBkZSBlbWFpbHNcblx0XHQgKi9cblx0XHR3aW5kb3cudmFsaWRhdGVFbWFpbCA9IGZ1bmN0aW9uIChlbWFpbCkge1xuXHRcdFx0dmFyIHJlZ0V4cCA9IC9eKChbXjw+KClbXFxdXFxcXC4sOzpcXHNAXFxcIl0rKFxcLltePD4oKVtcXF1cXFxcLiw7Olxcc0BcXFwiXSspKil8KFxcXCIuK1xcXCIpKUAoKFxcW1swLTldezEsM31cXC5bMC05XXsxLDN9XFwuWzAtOV17MSwzfVxcLlswLTldezEsM31cXF0pfCgoW2EtekEtWlxcLTAtOV0rXFwuKStbYS16QS1aXXsyLH0pKSQvO1xuXHRcdFx0cmV0dXJuIHJlZ0V4cC50ZXN0KGVtYWlsKTtcblx0XHR9O1xuXHRcdC8qKlxuXHRcdCAqIFJlZ3Jlc2EgdG9kb3MgbG9zIHZhbG9yZXMgZGUgdW4gZm9ybXVsYXJpbyBjb21vIHVuIGFzc29jaWF0aXZlIGFycmF5XG5cdFx0ICovXG5cdFx0d2luZG93LmdldEZvcm1EYXRhID0gZnVuY3Rpb24oc2VsZWN0b3Ipe1xuXHRcdFx0dmFyIHJlc3VsdCA9IFtdLFxuXHRcdFx0XHRkYXRhICAgPSAkKHNlbGVjdG9yKS5zZXJpYWxpemVBcnJheSgpO1xuXHRcdFx0JC5tYXAoZGF0YSwgZnVuY3Rpb24gKGF0dHIpIHtcblx0XHRcdFx0cmVzdWx0W2F0dHIubmFtZV0gPSBhdHRyLnZhbHVlO1xuXHRcdFx0fSk7XG5cdFx0XHRyZXR1cm4gcmVzdWx0O1xuXHRcdH1cblxuICAgICQoJy5zcG9uc29yc19jYXJvdXNlbCcpLnNsaWNrKHtcbiAgICAgIGFjY2VzaWJpbGl0eTogdHJ1ZSxcbiAgICAgIGFycm93czpmYWxzZSxcbiAgICAgIGRyYWdnYWJsZTpmYWxzZSxcbiAgICAgIHNsaWRlc1BlclJvdzogMyxcbiAgICAgIGF1dG9wbGF5OnRydWUsXG4gICAgICBhdXRvcGxheVNwZWVkOiA2NjYsXG4gICAgICBjZW50ZXJNb2RlOnRydWUsXG4gICAgICBpbmZpbml0ZTp0cnVlLFxuICAgICAgbW9iaWxlRmlyc3Q6dHJ1ZSxcbiAgICAgIHNwZWVkOiAzMzMzXG4gICAgfSk7XG5cblx0fSk7XG59KShqUXVlcnkpO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==