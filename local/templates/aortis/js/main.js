/* Slick slider */
	$(window).on('load resize', carousel);

	function carousel(){
		if($(window).width() <= 576) {
			$('.main__recomend .products__items, .new .products__items, .main__discount .products__items, .main__interesting .news__items').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
			});
		}

		else {
			$('.main__recomend .products__items, .new .products__items, .main__discount .products__items, .main__interesting .news__items').slick('unslick');
		}
	}

	$('.banner__slider').slick({
		dots: true,
	});

	$('.recomend__slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		appendArrows: $('.recomend .slick-arrows'),

		responsive: [
			{
				breakpoint: 1231,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 961,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 577,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.interesting__slider').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		appendArrows: $('.interesting .slick-arrows'),

		responsive: [
			{
				breakpoint: 1231,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 961,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 577,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.product__gallery-img').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.product__gallery-thumb',
	});

	$('.product__gallery-thumb').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.product__gallery-img',
		dots: false,
		centerMode: true,
		centerPadding: 0,
		focusOnSelect: true,

		responsive: [
			{
				breakpoint: 1231,
				settings: {
					slidesToShow: 5,
				}
			},
			{
				breakpoint: 961,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 481,
				settings: {
					slidesToShow: 1,
				}
			},
		]
	});

	$('.singl-news__items').slick({
		slidesToShow: 4,
		slidesToScroll: 1,

		responsive: [
			{
				breakpoint: 1231,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 961,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 577,
				settings: {
					slidesToShow: 1,
				}
			},
		]
	});

/* Slick slider end */

/* Menu */
	$('.header__menu-icon').on('click', function(){
		$(this).toggleClass('active');
		$(this).parent().parent().parent().toggleClass('active__menu');
		$('body').toggleClass('hidden')
	});

	$('.header__catalog').on('click', function(){
		$(this).toggleClass('active');

		$('.header__menu-list').toggleClass('sticky__menu');
	});
/* Menu end */

/* Header */
	$(window).scroll(function() {
		if($(this).scrollTop() > 2 && $(this).width() > 760) {
			$('.header').addClass('sticky');
		}
		else{
			$('.header').removeClass('sticky');
		}
	});
/* Header end */

/* Auto height */
	$(window).on('load resize', function() {
		if($(window).width() >= 576) {
			let maxHeight = 0;
			$(".products__item-title, .recomend .products__item-title").each(function(){
				if ($(this).height() > maxHeight) {
					maxHeight = $(this).height();
				}
			});
			$(".products__item-title, .recomend .products__item-title").height(maxHeight);
		}
	});
/* Auto height end */

/* Filter */
	$('.filter-button').on('click', function(){
		$(this).toggleClass('active');
		$('.catalog__filter').toggleClass('active');
	});
/* Filter end */

/* Tabs */
	$('.main__tab a').on('click', function(e){
		e.preventDefault();
		$('.main__tab').removeClass('active');
		$('.main__tab-block').removeClass('active');
		$(this).parent().addClass('active');
		let href = $(this).attr('href');

		$(href).addClass('active');
	});
/* Tabs end */

/* Magnific popup */
	$(document).ready(function(){
		$('.call').magnificPopup({
			items: [
				{
					src: '.popup__call',
					type: 'inline'
				}
			],
		});

		$('.thank_open').magnificPopup({
			items: [
				{
					src: '.popup__thank',
					type: 'inline'
				}
			],
		});

		let gallery = $('.singl-news__gallery .singl-news__item a')
		let gallery_product = $('.product__gallery-img .gallery-img__item a')

		gallery.magnificPopup({
			type : 'image',
			gallery : {
				enabled : true
			},
		});

		gallery_product.magnificPopup({
			type : 'image',
			gallery : {
				enabled : true
			},
		});
	});
/* Magnific popup end */

/* Basket */
	$('.basket__total .next').on('click', function(){
		$(this).parent().parent().parent().parent()
				.removeClass('active')
				.next().addClass('active');
	});
	$('.basket__total .back').on('click', function(){
		$(this).parent().parent().parent().parent()
				.removeClass('active')
				.prev().addClass('active');
	});
/* Basket end */

/* Masked input */
	jQuery(function($){
		$.mask.definitions['9'] = '';
		$.mask.definitions['n'] = '[0-9]'; 
		$("input[name='phone']").mask("+7 (nnn) nnn-nnnn");
	});
/* Masked input end */
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJtYWluLmpzIl0sInNvdXJjZXNDb250ZW50IjpbIi8qIFNsaWNrIHNsaWRlciAqL1xyXG5cdCQod2luZG93KS5vbignbG9hZCByZXNpemUnLCBjYXJvdXNlbCk7XHJcblxyXG5cdGZ1bmN0aW9uIGNhcm91c2VsKCl7XHJcblx0XHRpZigkKHdpbmRvdykud2lkdGgoKSA8PSA1NzYpIHtcclxuXHRcdFx0JCgnLm1haW5fX3JlY29tZW5kIC5wcm9kdWN0c19faXRlbXMsIC5uZXcgLnByb2R1Y3RzX19pdGVtcywgLm1haW5fX2Rpc2NvdW50IC5wcm9kdWN0c19faXRlbXMsIC5tYWluX19pbnRlcmVzdGluZyAubmV3c19faXRlbXMnKS5zbGljayh7XHJcblx0XHRcdFx0c2xpZGVzVG9TaG93OiAxLFxyXG5cdFx0XHRcdHNsaWRlc1RvU2Nyb2xsOiAxLFxyXG5cdFx0XHR9KTtcclxuXHRcdH1cclxuXHJcblx0XHRlbHNlIHtcclxuXHRcdFx0JCgnLm1haW5fX3JlY29tZW5kIC5wcm9kdWN0c19faXRlbXMsIC5uZXcgLnByb2R1Y3RzX19pdGVtcywgLm1haW5fX2Rpc2NvdW50IC5wcm9kdWN0c19faXRlbXMsIC5tYWluX19pbnRlcmVzdGluZyAubmV3c19faXRlbXMnKS5zbGljaygndW5zbGljaycpO1xyXG5cdFx0fVxyXG5cdH1cclxuXHJcblx0JCgnLmJhbm5lcl9fc2xpZGVyJykuc2xpY2soe1xyXG5cdFx0ZG90czogdHJ1ZSxcclxuXHR9KTtcclxuXHJcblx0JCgnLnJlY29tZW5kX19zbGlkZXInKS5zbGljayh7XHJcblx0XHRzbGlkZXNUb1Nob3c6IDQsXHJcblx0XHRzbGlkZXNUb1Njcm9sbDogMSxcclxuXHRcdGFwcGVuZEFycm93czogJCgnLnJlY29tZW5kIC5zbGljay1hcnJvd3MnKSxcclxuXHJcblx0XHRyZXNwb25zaXZlOiBbXHJcblx0XHRcdHtcclxuXHRcdFx0XHRicmVha3BvaW50OiAxMjMxLFxyXG5cdFx0XHRcdHNldHRpbmdzOiB7XHJcblx0XHRcdFx0XHRzbGlkZXNUb1Nob3c6IDMsXHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9LFxyXG5cdFx0XHR7XHJcblx0XHRcdFx0YnJlYWtwb2ludDogOTYxLFxyXG5cdFx0XHRcdHNldHRpbmdzOiB7XHJcblx0XHRcdFx0XHRzbGlkZXNUb1Nob3c6IDIsXHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9LFxyXG5cdFx0XHR7XHJcblx0XHRcdFx0YnJlYWtwb2ludDogNTc3LFxyXG5cdFx0XHRcdHNldHRpbmdzOiB7XHJcblx0XHRcdFx0XHRzbGlkZXNUb1Nob3c6IDEsXHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9XHJcblx0XHRdXHJcblx0fSk7XHJcblxyXG5cdCQoJy5pbnRlcmVzdGluZ19fc2xpZGVyJykuc2xpY2soe1xyXG5cdFx0c2xpZGVzVG9TaG93OiAyLFxyXG5cdFx0c2xpZGVzVG9TY3JvbGw6IDEsXHJcblx0XHRhcHBlbmRBcnJvd3M6ICQoJy5pbnRlcmVzdGluZyAuc2xpY2stYXJyb3dzJyksXHJcblxyXG5cdFx0cmVzcG9uc2l2ZTogW1xyXG5cdFx0XHR7XHJcblx0XHRcdFx0YnJlYWtwb2ludDogMTIzMSxcclxuXHRcdFx0XHRzZXR0aW5nczoge1xyXG5cdFx0XHRcdFx0c2xpZGVzVG9TaG93OiAzLFxyXG5cdFx0XHRcdH1cclxuXHRcdFx0fSxcclxuXHRcdFx0e1xyXG5cdFx0XHRcdGJyZWFrcG9pbnQ6IDk2MSxcclxuXHRcdFx0XHRzZXR0aW5nczoge1xyXG5cdFx0XHRcdFx0c2xpZGVzVG9TaG93OiAyLFxyXG5cdFx0XHRcdH1cclxuXHRcdFx0fSxcclxuXHRcdFx0e1xyXG5cdFx0XHRcdGJyZWFrcG9pbnQ6IDU3NyxcclxuXHRcdFx0XHRzZXR0aW5nczoge1xyXG5cdFx0XHRcdFx0c2xpZGVzVG9TaG93OiAxLFxyXG5cdFx0XHRcdH1cclxuXHRcdFx0fVxyXG5cdFx0XVxyXG5cdH0pO1xyXG5cclxuXHQkKCcucHJvZHVjdF9fZ2FsbGVyeS1pbWcnKS5zbGljayh7XHJcblx0XHRzbGlkZXNUb1Nob3c6IDEsXHJcblx0XHRzbGlkZXNUb1Njcm9sbDogMSxcclxuXHRcdGFycm93czogZmFsc2UsXHJcblx0XHRmYWRlOiB0cnVlLFxyXG5cdFx0YXNOYXZGb3I6ICcucHJvZHVjdF9fZ2FsbGVyeS10aHVtYicsXHJcblx0fSk7XHJcblxyXG5cdCQoJy5wcm9kdWN0X19nYWxsZXJ5LXRodW1iJykuc2xpY2soe1xyXG5cdFx0c2xpZGVzVG9TaG93OiAzLFxyXG5cdFx0c2xpZGVzVG9TY3JvbGw6IDEsXHJcblx0XHRhc05hdkZvcjogJy5wcm9kdWN0X19nYWxsZXJ5LWltZycsXHJcblx0XHRkb3RzOiBmYWxzZSxcclxuXHRcdGNlbnRlck1vZGU6IHRydWUsXHJcblx0XHRjZW50ZXJQYWRkaW5nOiAwLFxyXG5cdFx0Zm9jdXNPblNlbGVjdDogdHJ1ZSxcclxuXHJcblx0XHRyZXNwb25zaXZlOiBbXHJcblx0XHRcdHtcclxuXHRcdFx0XHRicmVha3BvaW50OiAxMjMxLFxyXG5cdFx0XHRcdHNldHRpbmdzOiB7XHJcblx0XHRcdFx0XHRzbGlkZXNUb1Nob3c6IDUsXHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9LFxyXG5cdFx0XHR7XHJcblx0XHRcdFx0YnJlYWtwb2ludDogOTYxLFxyXG5cdFx0XHRcdHNldHRpbmdzOiB7XHJcblx0XHRcdFx0XHRzbGlkZXNUb1Nob3c6IDMsXHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9LFxyXG5cdFx0XHR7XHJcblx0XHRcdFx0YnJlYWtwb2ludDogNDgxLFxyXG5cdFx0XHRcdHNldHRpbmdzOiB7XHJcblx0XHRcdFx0XHRzbGlkZXNUb1Nob3c6IDEsXHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9LFxyXG5cdFx0XVxyXG5cdH0pO1xyXG5cclxuXHQkKCcuc2luZ2wtbmV3c19faXRlbXMnKS5zbGljayh7XHJcblx0XHRzbGlkZXNUb1Nob3c6IDQsXHJcblx0XHRzbGlkZXNUb1Njcm9sbDogMSxcclxuXHJcblx0XHRyZXNwb25zaXZlOiBbXHJcblx0XHRcdHtcclxuXHRcdFx0XHRicmVha3BvaW50OiAxMjMxLFxyXG5cdFx0XHRcdHNldHRpbmdzOiB7XHJcblx0XHRcdFx0XHRzbGlkZXNUb1Nob3c6IDMsXHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9LFxyXG5cdFx0XHR7XHJcblx0XHRcdFx0YnJlYWtwb2ludDogOTYxLFxyXG5cdFx0XHRcdHNldHRpbmdzOiB7XHJcblx0XHRcdFx0XHRzbGlkZXNUb1Nob3c6IDIsXHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9LFxyXG5cdFx0XHR7XHJcblx0XHRcdFx0YnJlYWtwb2ludDogNTc3LFxyXG5cdFx0XHRcdHNldHRpbmdzOiB7XHJcblx0XHRcdFx0XHRzbGlkZXNUb1Nob3c6IDEsXHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9LFxyXG5cdFx0XVxyXG5cdH0pO1xyXG5cclxuLyogU2xpY2sgc2xpZGVyIGVuZCAqL1xyXG5cclxuLyogTWVudSAqL1xyXG5cdCQoJy5oZWFkZXJfX21lbnUtaWNvbicpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XHJcblx0XHQkKHRoaXMpLnRvZ2dsZUNsYXNzKCdhY3RpdmUnKTtcclxuXHRcdCQodGhpcykucGFyZW50KCkucGFyZW50KCkucGFyZW50KCkudG9nZ2xlQ2xhc3MoJ2FjdGl2ZV9fbWVudScpO1xyXG5cdFx0JCgnYm9keScpLnRvZ2dsZUNsYXNzKCdoaWRkZW4nKVxyXG5cdH0pO1xyXG5cclxuXHQkKCcuaGVhZGVyX19jYXRhbG9nJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKXtcclxuXHRcdCQodGhpcykudG9nZ2xlQ2xhc3MoJ2FjdGl2ZScpO1xyXG5cclxuXHRcdCQoJy5oZWFkZXJfX21lbnUtbGlzdCcpLnRvZ2dsZUNsYXNzKCdzdGlja3lfX21lbnUnKTtcclxuXHR9KTtcclxuLyogTWVudSBlbmQgKi9cclxuXHJcbi8qIEhlYWRlciAqL1xyXG5cdCQod2luZG93KS5zY3JvbGwoZnVuY3Rpb24oKSB7XHJcblx0XHRpZigkKHRoaXMpLnNjcm9sbFRvcCgpID4gMiAmJiAkKHRoaXMpLndpZHRoKCkgPiA3NjApIHtcclxuXHRcdFx0JCgnLmhlYWRlcicpLmFkZENsYXNzKCdzdGlja3knKTtcclxuXHRcdH1cclxuXHRcdGVsc2V7XHJcblx0XHRcdCQoJy5oZWFkZXInKS5yZW1vdmVDbGFzcygnc3RpY2t5Jyk7XHJcblx0XHR9XHJcblx0fSk7XHJcbi8qIEhlYWRlciBlbmQgKi9cclxuXHJcbi8qIEF1dG8gaGVpZ2h0ICovXHJcblx0JCh3aW5kb3cpLm9uKCdsb2FkIHJlc2l6ZScsIGZ1bmN0aW9uKCkge1xyXG5cdFx0aWYoJCh3aW5kb3cpLndpZHRoKCkgPj0gNTc2KSB7XHJcblx0XHRcdGxldCBtYXhIZWlnaHQgPSAwO1xyXG5cdFx0XHQkKFwiLnByb2R1Y3RzX19pdGVtLXRpdGxlLCAucmVjb21lbmQgLnByb2R1Y3RzX19pdGVtLXRpdGxlXCIpLmVhY2goZnVuY3Rpb24oKXtcclxuXHRcdFx0XHRpZiAoJCh0aGlzKS5oZWlnaHQoKSA+IG1heEhlaWdodCkge1xyXG5cdFx0XHRcdFx0bWF4SGVpZ2h0ID0gJCh0aGlzKS5oZWlnaHQoKTtcclxuXHRcdFx0XHR9XHJcblx0XHRcdH0pO1xyXG5cdFx0XHQkKFwiLnByb2R1Y3RzX19pdGVtLXRpdGxlLCAucmVjb21lbmQgLnByb2R1Y3RzX19pdGVtLXRpdGxlXCIpLmhlaWdodChtYXhIZWlnaHQpO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG4vKiBBdXRvIGhlaWdodCBlbmQgKi9cclxuXHJcbi8qIEZpbHRlciAqL1xyXG5cdCQoJy5maWx0ZXItYnV0dG9uJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKXtcclxuXHRcdCQodGhpcykudG9nZ2xlQ2xhc3MoJ2FjdGl2ZScpO1xyXG5cdFx0JCgnLmNhdGFsb2dfX2ZpbHRlcicpLnRvZ2dsZUNsYXNzKCdhY3RpdmUnKTtcclxuXHR9KTtcclxuLyogRmlsdGVyIGVuZCAqL1xyXG5cclxuLyogVGFicyAqL1xyXG5cdCQoJy5tYWluX190YWIgYScpLm9uKCdjbGljaycsIGZ1bmN0aW9uKGUpe1xyXG5cdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cdFx0JCgnLm1haW5fX3RhYicpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKTtcclxuXHRcdCQoJy5tYWluX190YWItYmxvY2snKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XHJcblx0XHQkKHRoaXMpLnBhcmVudCgpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuXHRcdGxldCBocmVmID0gJCh0aGlzKS5hdHRyKCdocmVmJyk7XHJcblxyXG5cdFx0JChocmVmKS5hZGRDbGFzcygnYWN0aXZlJyk7XHJcblx0fSk7XHJcbi8qIFRhYnMgZW5kICovXHJcblxyXG4vKiBNYWduaWZpYyBwb3B1cCAqL1xyXG5cdCQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCl7XHJcblx0XHQkKCcuY2FsbCcpLm1hZ25pZmljUG9wdXAoe1xyXG5cdFx0XHRpdGVtczogW1xyXG5cdFx0XHRcdHtcclxuXHRcdFx0XHRcdHNyYzogJy5wb3B1cF9fY2FsbCcsXHJcblx0XHRcdFx0XHR0eXBlOiAnaW5saW5lJ1xyXG5cdFx0XHRcdH1cclxuXHRcdFx0XSxcclxuXHRcdH0pO1xyXG5cclxuXHRcdCQoJy50aGFua19vcGVuJykubWFnbmlmaWNQb3B1cCh7XHJcblx0XHRcdGl0ZW1zOiBbXHJcblx0XHRcdFx0e1xyXG5cdFx0XHRcdFx0c3JjOiAnLnBvcHVwX190aGFuaycsXHJcblx0XHRcdFx0XHR0eXBlOiAnaW5saW5lJ1xyXG5cdFx0XHRcdH1cclxuXHRcdFx0XSxcclxuXHRcdH0pO1xyXG5cclxuXHRcdGxldCBnYWxsZXJ5ID0gJCgnLnNpbmdsLW5ld3NfX2dhbGxlcnkgLnNpbmdsLW5ld3NfX2l0ZW0gYScpXHJcblx0XHRsZXQgZ2FsbGVyeV9wcm9kdWN0ID0gJCgnLnByb2R1Y3RfX2dhbGxlcnktaW1nIC5nYWxsZXJ5LWltZ19faXRlbSBhJylcclxuXHJcblx0XHRnYWxsZXJ5Lm1hZ25pZmljUG9wdXAoe1xyXG5cdFx0XHR0eXBlIDogJ2ltYWdlJyxcclxuXHRcdFx0Z2FsbGVyeSA6IHtcclxuXHRcdFx0XHRlbmFibGVkIDogdHJ1ZVxyXG5cdFx0XHR9LFxyXG5cdFx0fSk7XHJcblxyXG5cdFx0Z2FsbGVyeV9wcm9kdWN0Lm1hZ25pZmljUG9wdXAoe1xyXG5cdFx0XHR0eXBlIDogJ2ltYWdlJyxcclxuXHRcdFx0Z2FsbGVyeSA6IHtcclxuXHRcdFx0XHRlbmFibGVkIDogdHJ1ZVxyXG5cdFx0XHR9LFxyXG5cdFx0fSk7XHJcblx0fSk7XHJcbi8qIE1hZ25pZmljIHBvcHVwIGVuZCAqL1xyXG5cclxuLyogQmFza2V0ICovXHJcblx0JCgnLmJhc2tldF9fdG90YWwgLm5leHQnKS5vbignY2xpY2snLCBmdW5jdGlvbigpe1xyXG5cdFx0JCh0aGlzKS5wYXJlbnQoKS5wYXJlbnQoKS5wYXJlbnQoKS5wYXJlbnQoKVxyXG5cdFx0XHRcdC5yZW1vdmVDbGFzcygnYWN0aXZlJylcclxuXHRcdFx0XHQubmV4dCgpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuXHR9KTtcclxuXHQkKCcuYmFza2V0X190b3RhbCAuYmFjaycpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XHJcblx0XHQkKHRoaXMpLnBhcmVudCgpLnBhcmVudCgpLnBhcmVudCgpLnBhcmVudCgpXHJcblx0XHRcdFx0LnJlbW92ZUNsYXNzKCdhY3RpdmUnKVxyXG5cdFx0XHRcdC5wcmV2KCkuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xyXG5cdH0pO1xyXG4vKiBCYXNrZXQgZW5kICovXHJcblxyXG4vKiBNYXNrZWQgaW5wdXQgKi9cclxuXHRqUXVlcnkoZnVuY3Rpb24oJCl7XHJcblx0XHQkLm1hc2suZGVmaW5pdGlvbnNbJzknXSA9ICcnO1xyXG5cdFx0JC5tYXNrLmRlZmluaXRpb25zWyduJ10gPSAnWzAtOV0nOyBcclxuXHRcdCQoXCJpbnB1dFtuYW1lPSdwaG9uZSddXCIpLm1hc2soXCIrNyAobm5uKSBubm4tbm5ublwiKTtcclxuXHR9KTtcclxuLyogTWFza2VkIGlucHV0IGVuZCAqLyJdLCJmaWxlIjoibWFpbi5qcyJ9
