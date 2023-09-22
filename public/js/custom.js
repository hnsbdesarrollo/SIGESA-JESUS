(function($) {
	
var eres = function(){
	
	var screenWidth = $(window).width();

	var handleAllChecked = function() {
		$("#checkAll").on('change',function() {
			$("td input, .email-list .custom-checkbox input").prop('checked', $(this).prop("checked"));
		});
		
		$(".checkAll").on('change',function() {
			$(this).closest('.check-data').find('.form-check-input').prop('checked', $(this).prop("checked"));
		});
	}

	var handleToggleMenu = function(){	
		$(".nav-control").on('click', function() {
			$('#main-wrapper').toggleClass("menu-toggle");
			$(".hamburger").toggleClass("is-active");
		});
	}
	
	var handleLightgallery = function(){
		if(jQuery('#lightgallery').length > 0){
			lightGallery(document.getElementById('lightgallery'), {
				plugins: [lgThumbnail, lgZoom],
				selector: '.lg-item',
				thumbnail:true,
				exThumbImage: 'data-src'
            });
		}
	}
	
	var handlePageActive = function(){
		//to keep the current page active
		for (var nk = window.location,
			o = $("ul#menu a").filter(function() {
				return this.href == nk;
			})
			.addClass("mm-active")
			.parent()
			.addClass("mm-active");;) {
			
		// console.log(o)
		if (!o.is("li")) break;
		o = o.parent()
			.addClass("mm-show")
			.parent()
			.addClass("mm-active");
		}
	}
	
	var dzSidebarStyle = function(){
		$("ul#menu>li").on('click', function() {
			const sidebarStyle = $('body').attr('data-sidebar-style');
			if (sidebarStyle === 'mini') {
				console.log($(this).find('ul'))
				$(this).find('ul').stop()
			}
		})	
	}

	var contentBodyHeight = function(){
		var win_h = window.outerHeight;
		var win_h = window.outerHeight;
		if (win_h > 0 ? win_h : screen.height) {
			$(".content-body").css("min-height", (win_h + 60) + "px");
		};
	}

	var cardCollapse = function(){
		$('a[data-action="collapse"]').on("click", function(i) {
			i.preventDefault(),
			$(this).closest(".card").find('[data-action="collapse"] i').toggleClass("mdi-arrow-down mdi-arrow-up"),
			$(this).closest(".card").children(".card-body").collapse("toggle");
		});
		$('a[data-action="expand"]').on("click", function(i) {
			i.preventDefault(),
			$(this).closest(".card").find('[data-action="expand"] i').toggleClass("icon-size-actual icon-size-fullscreen"),
			$(this).closest(".card").toggleClass("card-fullscreen");
		});
	}	
	
	var cardLoader = function(){
		$('[data-action="close"]').on("click", function() {
			$(this).closest(".card").removeClass().slideUp("fast");
		});
		$('[data-action="reload"]').on("click", function() {
			var e = $(this);
			e.parents(".card").addClass("card-load"),
			e.parents(".card").append('<div class="card-loader"><i class=" ti-reload rotate-refresh"></div>'),
			setTimeout(function() {
				e.parents(".card").children(".card-loader").remove(),
					e.parents(".card").removeClass("card-load")
			}, 2000)
		});
	}
	
	var dzScrollBar = function(){
		jQuery('.dz-scroll').each(function(){
			var scroolWidgetId = jQuery(this).attr('id');
			const ps = new PerfectScrollbar('#'+scroolWidgetId, {
			  wheelSpeed: 2,
			  wheelPropagation: true,
			  minScrollbarLength: 20
			});
		})
	}
	
	var handleBodyLayout = function(){
		const headerHight = $('.header').innerHeight();
		$(window).scroll(function() {
			if ($('body').attr('data-layout') === "horizontal" && $('body').attr('data-header-position') === "static" && $('body').attr('data-sidebar-position') === "fixed")
				$(this.window).scrollTop() >= headerHight ? $('.deznav').addClass('fixed') : $('.deznav').removeClass('fixed')
		});
	}
	
	var metisMenuSidebar = function(){
		jQuery('.metismenu > .mm-active ').each(function(){
			if(!jQuery(this).children('ul').length > 0)
			{
				jQuery(this).addClass('active-no-child');
			}
		});	
	}
	
	var dzAjex = function(){
		jQuery('.bell-link').on('click',function(){
			jQuery('.chatbox').addClass('active');
		});
		jQuery('.chatbox-close').on('click',function(){
			jQuery('.chatbox').removeClass('active');
		});
		jQuery('.dz-chat-user-box .dz-chat-user').on('click',function(){
			jQuery('.dz-chat-user-box').addClass('d-none');
			jQuery('.dz-chat-history-box').removeClass('d-none');
		});
		jQuery('.dz-chat-history-back').on('click',function(){
			jQuery('.dz-chat-user-box').removeClass('d-none');
			jQuery('.dz-chat-history-box').addClass('d-none');
		});
		jQuery('.dz-fullscreen').on('click',function(){
			jQuery('.dz-fullscreen').toggleClass('active');
		});
	}
	
	var btnNumber = function(){
		$('.btn-number').on('click', function(e) {
			e.preventDefault();

			fieldName = $(this).attr('data-field');
			type = $(this).attr('data-type');
			var input = $("input[name='" + fieldName + "']");
			var currentVal = parseInt(input.val());
			if (!isNaN(currentVal)) {
				if (type == 'minus')
					input.val(currentVal - 1);
				else if (type == 'plus')
					input.val(currentVal + 1);
			} else {
				input.val(0);
			}
		});	
	}
	
	var domoPanel = function(){
		if(jQuery('.dz-demo-content').length > 0){
			const ps = new PerfectScrollbar('.dz-demo-content');
		}
		$('.dz-demo-trigger').on('click', function() {
			$('.dz-demo-panel').addClass('show');
		});
		$('.dz-demo-close, .bg-close').on('click', function() {
			$('.dz-demo-panel').removeClass('show');
		});
		$('.dz-demo-bx').on('click', function() {
			$('.dz-demo-bx').removeClass('demo-active');
			$(this).addClass('demo-active');
		});
	} 
	
	var dzFullScreen = function(){
		jQuery('.dz-fullscreen').on('click',function(e){
			if(document.fullscreenElement||document.webkitFullscreenElement||document.mozFullScreenElement||document.msFullscreenElement) 
			{ /* Enter fullscreen */
				
				if(document.exitFullscreen) {
					document.exitFullscreen();
				} else if(document.msExitFullscreen) {
					document.msExitFullscreen(); /* IE/Edge */
				} else if(document.mozCancelFullScreen) {
					document.mozCancelFullScreen(); /* Firefox */
				} else if(document.webkitExitFullscreen) {
					document.webkitExitFullscreen(); /* Chrome, Safari & Opera */
				}
			} 
			else { /* exit fullscreen */
				if(document.documentElement.requestFullscreen) {
					document.documentElement.requestFullscreen();
				} 
				else if(document.documentElement.webkitRequestFullscreen) {
					document.documentElement.webkitRequestFullscreen();
				} 
				else if(document.documentElement.mozRequestFullScreen) {
					document.documentElement.mozRequestFullScreen();
				} 
				else if(document.documentElement.msRequestFullscreen) {
					document.documentElement.msRequestFullscreen();
				}
			}
		});
	}
	
	var handleDraggableCard = function() {
		var dzCardDraggable = function () {
			return{		  
				//main function to initiate the module
				init: function () {
					var containers = document.querySelectorAll('.draggable-zone');

					if (containers.length === 0) {
						return false;
					}

					var swappable = new Sortable.default(containers, {
						draggable: '.draggable',
						handle: '.draggable.draggable-handle',
						mirror: {
							appendTo: 'body',
							constrainDimensions: true
						}
					});
					swappable.on('drag:stop', () => {
						setTimeout(function(){
							setBoxCount();
						}, 200);
					})
				}
			};
		}();

		jQuery(document).ready(function () {
			dzCardDraggable.init();
		});
		
		function setBoxCount(){
			var cardCount = 0;
			jQuery('.dropzoneContainer').each(function(){
				cardCount = jQuery(this).find('.draggable-handle').length;
				jQuery(this).find('.totalCount').html(cardCount);
			});
		}
	}
	
	var handleImageSelect = function(){
		const $_SELECT_PICKER = $('.image-select');
		$_SELECT_PICKER.find('option').each((idx, elem) => {
			const $OPTION = $(elem);
			const IMAGE_URL = $OPTION.attr('data-thumbnail');
			if (IMAGE_URL) {
				$OPTION.attr('data-content', "<img src='%i'/> %s".replace(/%i/, IMAGE_URL).replace(/%s/, $OPTION.text()))
			}
			
		});
		$_SELECT_PICKER.selectpicker();
	}
	
	var handleSmartWizard = function() {
		if(jQuery('#smartwizard').length > 0)
		{
			$(document).ready(function(){
				// SmartWizard initialize
				$('#smartwizard').smartWizard(); 
			});
		}
	}
	
	var heartBlast = function (){
		$(".heart").on("click", function() {
			$(this).toggleClass("heart-blast");
		});
	}
	
	var handleCkEditor = function(){
		if(jQuery("#ckeditor").length>0) {
			ClassicEditor
			.create( document.querySelector( '#ckeditor' ), {
				// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
			})
			.then( editor => {
				window.editor = editor;
			} )
			.catch( err => {
				console.error( err.stack );
			} );
		}
	}
	
	var handleshowPass = function(){
		jQuery('.show-pass').on('click',function(){
			jQuery(this).toggleClass('active');
			if(jQuery('#dz-password').attr('type') == 'password'){
				jQuery('#dz-password').attr('type','text');
			}else if(jQuery('#dz-password').attr('type') == 'text'){
				jQuery('#dz-password').attr('type','password');
			}
		});
	}
	
	var handleMenuPosition = function(){
		if(screenWidth > 1024){
			$(".metismenu  li").unbind().each(function (e) {
				if ($('ul', this).length > 0) {
					var elm = $('ul:first', this).css('display','block');
					
					var off = elm.offset();
					var l = off.left;
					var w = elm.width();
					var elm = $('ul:first', this).removeAttr('style');
					var docH = $("body").height();
					var docW = $("body").width();
					
					if(jQuery('html').hasClass('rtl')){
						var isEntirelyVisible = (l + w <= docW);	
					}else{
						var isEntirelyVisible = (l > 0)?true:false;	
					}
						
					if (!isEntirelyVisible) {
						$(this).find('ul:first').addClass('left');
					} else {
						$(this).find('ul:first').removeClass('left');
					}
				}
			});
		}
	}
	
	var handleThemeMode = function() {
		if(jQuery(".dz-theme-mode").length>0) {
			jQuery('.dz-theme-mode').on('click',function(){
				jQuery(this).toggleClass('active');
				if(jQuery(this).hasClass('active')){
					jQuery('body').attr('data-theme-version','dark');
					setCookie('version', 'dark');
					jQuery('#theme_version').val('dark');
				}else{
					jQuery('body').attr('data-theme-version','light');
					setCookie('version', 'light');
					jQuery('#theme_version').val('light');					
				}
				$('.default-select').selectpicker('refresh');
			});
			var version = getCookie('version');
			
			jQuery('body').attr('data-theme-version', version);
			jQuery('.dz-theme-mode').removeClass('active');
			setTimeout(function(){
				if(jQuery('body').attr('data-theme-version') === "dark")
				{
					jQuery('.dz-theme-mode').addClass('active');
				}
			},1500)
		}
	}
	
	/* Handle Page On Scroll ============ */
	var handlePageOnScroll = function(event){
	   'use strict';
	   var headerHeight = parseInt($('.header').css('height'), 10);
	   
		$('.navbar-nav .scroll').on('click', function(event){
		   event.preventDefault();

			jQuery('.navbar-nav .scroll').parent().removeClass('active');
			jQuery(this).parent().addClass('active');
		   
			if (this.hash !== "") {
			   var hash = this.hash;	
			   var seactionPosition = parseInt($(hash).offset().top, 10);
			   var headerHeight =   parseInt($('.header').css('height'), 10);
			   
			   var scrollTopPosition = seactionPosition - headerHeight;
			   $('html, body').animate({
				   scrollTop: scrollTopPosition
			   }, 800, function(){
				   
			   });
		   }   
		});
		
		pageOnScroll();
	}
	
	/* Page On Scroll ============ */
	var pageOnScroll = function(event){
		   
		if(jQuery('.navbar-nav').length > 0){
		   
		   var headerHeight = parseInt(jQuery('.header').height(), 10);
		   
			jQuery(document).on("scroll", function(){
			   
				var scrollPos = jQuery(this).scrollTop();
				jQuery('.navbar-nav .scroll').each(function () {
				   var elementLink = jQuery(this);
				   
				   var refElement = jQuery(elementLink.attr("href"));
				   
					if(jQuery(this.hash).offset() != undefined){
						var seactionPosition = parseInt(jQuery(this.hash).offset().top, 10);
					}else{
						var seactionPosition = 0;
					}
					var scrollTopPosition = (seactionPosition - headerHeight);

					if (scrollTopPosition <= scrollPos){
					   elementLink.parent().addClass("active");
					   elementLink.parent().siblings().removeClass("active");
					}
				});
		   });
		}
	}
	
	/* Header Fixed ============ */
	var headerFix = function(){
		/* Main navigation fixed on top  when scroll down function custom */		
		jQuery(window).on('scroll', function () {
			if(jQuery('.sticky-header').length > 0){
				var menu = jQuery('.sticky-header');
				if ($(window).scrollTop() > menu.offset().top) {
					menu.addClass('is-fixed');
				} else {
					menu.removeClass('is-fixed');
				}
			}
		});
		/* Main navigation fixed on top  when scroll down function custom end*/
	}
   
	/* Function ============ */
		return {
			init:function(){
				handleAllChecked();
				handleToggleMenu();
				handlePageActive();
				dzSidebarStyle();
				contentBodyHeight();
				cardCollapse();
				cardLoader();
				handleBodyLayout();
				//dzScrollBar();
				handleLightgallery();
				metisMenuSidebar();
				dzAjex();
				btnNumber();
				dzFullScreen();
				handleDraggableCard();
				domoPanel();
				heartBlast();
				handleSmartWizard();
				handleMenuPosition();
				handleCkEditor();
				handleshowPass();
				handleImageSelect();
				handleThemeMode();
				handlePageOnScroll();
				headerFix();
			},
			
			load:function(){
				handleImageSelect();
			},
			
			resize:function(){
				
			}
		}
	
	}();

	jQuery(document).ready(function(){
		$("#menu").metisMenu();
		
		//const qs = new PerfectScrollbar('.deznav-scroll');
		
		eres.init();
		var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
		var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
			return new bootstrap.Popover(popoverTriggerEl)
		})
		
	});
	
	jQuery(window).on('load',function(){
		
		$('#preloader').fadeOut(500);
		$('#main-wrapper').addClass('show');
	
		$('select').selectpicker();
		
		eres.load();
	});

	jQuery(window).on('resize',function(){
		eres.resize();
		
	});     

})(jQuery);