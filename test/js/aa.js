// THIS SCRIPT SHOULD BE USED FOR 'EVERYWHERE' FUNCTIONS FOR ART & AUSTRALIA
// TO ADD BG IMAGES ON CASE_BY_CASE ARTICLE_BY_ARTICLE DIVS
// Usage: 1. make sure the div in question has the class "fullImage"
// 2. make sure the page accesses the script
// <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
// 3. add the data-imgbefore="IMAGE URL" to the div tag
// 4.[optional] add hover alt image to the data-imgafter="HOVER IMAGE" tag
// eg. ~~> <div class="fullImage" data-imgbefore="IMAGE URL" data-imgafter="HOVER IMAGE"></div>
// $(document).ready(function(){
//
// 	$('.cardImage').each(function( index, value ) {
// 		var img = $(this).attr('data-imgbefore');
// 		$('.cardImage').css({'background-image':'url('+ img +')'});
// 	});
//
// 	$('.cardImage').hover(
// 		function () {
// 			var img = $(this).attr('data-imgafter');
// 			$(this).css({'background-image':'url('+ img +')'});
// 		},
//
// 		function () {
// 			var img = $(this).attr('data-imgbefore');
// 			$(this).css({'background-image':'url('+ img +')'});
// 		}
// 	);
// });
function titleTrace(){
	$('#titleTrace').show();
	setTimeout (removeAA, 8000);}
function unTrace(){$('#titleTrace').hide();
	}
jQuery(document).ready(function($) {
// const details = document.querySelectorAll('liminalSpace');
// var zzz=33;
// details.forEach(detail => {
// 	detail.style.z-index = zzz;
// 	zzz+=20;}

    $(".didactics").hover(
        function() {
        var fulldida = $(this).attr('data-fulldida');
				console.log(fulldida)
            $(this).html(fulldida);
						//.fadeTo( "fast" , 0 );
		// 				.animate({
		//     opacity: 1,
		//     height: "100%",
		// 		width:"100%"
		//   }, 5000, function() {
    // // Animation complete.
  	// });
            //$(this).html(fulldida).fadeTo( "slow" , 1 );
    }, function () {
					var dida = $(this).attr('data-dida');
            $(this).html(dida);
		// 				.fadeTo( "slow" , 0 ).animate({
		//     opacity: 1,
		//     height: "20%",
		// 		width:"30%"
		//   }, 5000, function() {
    // // Animation complete.
  	// });
    }
)});

document.addEventListener("keydown", function(){
var x=event.keyCode || event.which;
if(x==13){
	var y = document.getElementById("template");
	if (y.style.visibility === "visible"){
		document.getElementById("template").style.visibility = "hidden";
		}
	else{
		document.getElementById("template").style.visibility = "visible";
		}
	}
else if (x==68){
	function myFunction() {
	  var wholePage = document.body;
	  wholePage.classList.toggle("dark-mode");
	}
}
});
// JAVASCRIPT FOR DETAILS TAGS //
/* !!!!!!! NEEDS JAVASCRIPT !!!!!!! */
const details = document.querySelectorAll('details');

details.forEach(detail => {
  const detailContent = detail.querySelector('div');
  const detailClosedHeight = detail.scrollHeight;
  // open the details to get the height of the content
  detail.open = true;
  // pass it to the the element as CSS property
  detailContent.style.setProperty('--details-content-height-open', detailContent.scrollHeight + 'px');
  detail.style.setProperty('--details-height-open', detailContent.scrollHeight + detailClosedHeight + 'px');
  // close the details again
  detail.open = false;

  detailContent.style.setProperty('--details-content-height-closed', detailContent.scrollHeight + 'px');
  detail.style.setProperty('--details-height-closed', detailClosedHeight + 'px');

  detail.addEventListener('click', (ev) => {
    const container = ev.target.parentElement;
    // get time of transition from CSS property
    const timeout = getComputedStyle(container.querySelector('div')).getPropertyValue('--details-transition-time');

    // we can't use [open] as it will be only removed after the transition
    container.classList.toggle('is--open');

    // remove the open attribute once the transition is done, because otherwise we won't see the transition
    if (container.open) {
      ev.preventDefault();
      setTimeout(function() {
        container.open = false;
      }, parseInt(timeout))
    }
  })
	window.addEventListener('resize', (ev) => {
    // if the details is open, adjust height
    if (detail.classList.contains('is--open')) {
      detailContent.style.setProperty('--details-height-open', detailContent.scrollHeight + 'px');
      }
  });
});
$(document).ready(function() {
            $(window).resize(function() {
                /* makeWaves(); */
            });
        });

/*!
* jQuery DrawSVG v1.1.0 (Oct 05 2016) - http://lcdsantos.github.io/jquery-drawsvg/
*
* Copyright (c) 2016 Leonardo Santos; MIT License
*
*/

	(function(factory) {
				  /* global define */
				  if ( typeof define === 'function' && define.amd ) {
				    define(['jquery'], factory);
				  } else if ( typeof module === 'object' && module.exports ) {
				    // Node/CommonJS
				    module.exports = function( root, jQuery ) {
				      if ( jQuery === undefined ) {
				        if ( typeof window !== 'undefined' ) {
				          jQuery = require('jquery');
				        } else {
				          jQuery = require('jquery')(root);
				        }
				      }
				      factory(jQuery);
				      return jQuery;
				    };
				  } else {
				    // Browser globals
				    factory(jQuery);
				  }
				}(function($) {
				  'use strict';

				  var pluginName = 'drawsvg',
				      defaults = {
				        duration: 4000,
				        stagger: 200,
				        easing: 'swing',
				        reverse: true,
				        callback: $.noop
				      },
				      DrawSvg = (function() {
				        var fn = function fn(elm, options) {
				          var _this = this,
				              opts = $.extend(defaults, options);

				          _this.$elm = $(elm);

				          if ( !_this.$elm.is('svg') )
				            return;

				          _this.options = opts;
				          _this.$paths = _this.$elm.find('path');

				          _this.totalDuration = opts.duration + (opts.stagger * _this.$paths.length);
				          _this.duration = opts.duration / _this.totalDuration;

				          _this.$paths.each(function(index, elm) {
				            var pathLength = elm.getTotalLength();

				            elm.pathLen = pathLength;
				            elm.delay = (opts.stagger * index) / _this.totalDuration;
				            elm.style.strokeDasharray = [pathLength, pathLength].join(' ');
				            elm.style.strokeDashoffset = pathLength;
				          });

				          _this.$elm.attr('class', function(index, classNames) {
				            return [classNames, pluginName + '-initialized'].join(' ');
				          });
				        };

				        fn.prototype.getVal = function(p, easing) {
				          return 1 - $.easing[easing](p, p, 0, 1, 1);
				        };

				        fn.prototype.progress = function progress(prog) {
				          var _this = this,
				              opts = _this.options,
				              duration = _this.duration;

				          _this.$paths.each(function(index, elm) {
				            var elmStyle = elm.style;

				            if ( prog === 1 ) {
				              elmStyle.strokeDashoffset = 0;
				            } else if ( prog === 0 ) {
				              elmStyle.strokeDashoffset = elm.pathLen + 'px';
				            } else if ( prog >= elm.delay && prog <= duration + elm.delay ) {
				              var p = ((prog - elm.delay) / duration);
				              elmStyle.strokeDashoffset = ((_this.getVal(p, opts.easing) * elm.pathLen) * (opts.reverse ? -1 : 1)) + 'px';
				            }
				          });
				        };

				        fn.prototype.animate = function animate() {
				          var _this = this;

				          _this.$elm.attr('class', function(index, classNames) {
				            return [classNames, pluginName + '-animating'].join(' ');
				          });

				          $({ len: 0 }).animate({
				            len: 1
				          }, {
				            easing: 'swing',
				            duration: _this.totalDuration,
				            step: function(now, fx) {
				              _this.progress.call(_this, now / fx.end);
				            },
				            complete: function() {
				              _this.options.callback.call(this);

				              _this.$elm.attr('class', function(index, classNames) {
				                return classNames.replace(pluginName + '-animating', '');
				              });
				            }
				          });
				        };

				        return fn;
				      })();

				  $.fn[pluginName] = function(method, args) {
				    return this.each(function() {
				      var data = $.data(this, pluginName);

				      ( data && ''+method === method && data[method] ) ?
				        data[method](args) :
				        $.data(this, pluginName, new DrawSvg(this, method));
				    });
				  };
				}));
