$(document).ready(function() {

	var inner = $('html, body');

	function popupOpen(block){
		inner.addClass('--block');
		$(block).addClass('--show');
	}
	$('.popup-open').on('click', function(event){
		event.preventDefault();
		popupOpen($(this).attr('href'));
	});

	$('.popup-close').on('click', function(event) {
		inner.removeClass('--block');
		$('.popup').removeClass('--show');
	});

	$('.steps').each(function(index, el) {
		var item         = $(this).find('.steps__item'),
				titleCount   = $(this).find('.status__title i'),
				status       = $(this).find('.status__wrap div'),
				stepsCount   = item.length,
				stepWidth    = 100 / stepsCount;

		titleCount.text(item.length);

		status.width(stepWidth + '%');
		status.attr('data-width', stepWidth);
		status.attr('data-count', stepsCount);

		item.first().addClass('--selected');
	});

	$('.steps__btn').on('click', function(event) {
		var item        = $(this).parents('.steps__item'),
				itemNext    = item.next(),
				status      = $(this).parents('.steps').find('.status__wrap div'),
				statusWidth = status.attr('data-width'),
				statusCount = status.attr('data-count'),
				titleCount  = $(this).parents('.steps').find('.status__title u'),
				inputsReq   = item.find('.steps__input.--required');
		if ($(this).hasClass('--next')) {
			var errorsCount = 0;
			inputsReq.each(function(index, el) {
				var input = $(this).find('input');
				if (input.val() == '') {
					errorsCount++;
					$(this).addClass('--error');
				} else {
					$(this).removeClass('--error');
				}
			});	
			if (errorsCount == 0) {
				item.removeClass('--selected');
				itemNext.addClass('--selected');
				status.css({
					left: (statusWidth * (item.index() + 1)) + '%'
				})
				titleCount.text(item.index() + 2);
			}
			
		}
		if ($(this).hasClass('--submit')) {
			$('.popup').removeClass('--show');
			popupOpen('#popup-thanks');
		}
	});


	$('.input .input__area').on('focusin', function(event) {
		$(this).parents('.input').removeClass('--error');
	});

	$('.input.--phone .input__area').mask('+7 (000) 000-00-00')


	var radio = {
		class: {
			block: 'radio',
			input: 'input'
		},
		block: null,
		input: null,
		value: null,
		name: null,
		status: null,
		radios: null,
		Vars: function(block){
			this.block = block;
			this.input = this.block.find('input');
			this.name = this.input.attr('name');
			this.status = this.input.attr('checked');
			this.value = this.input.val();
		},
		Filled: function(block){
			this.Vars(block);
			if (this.status == 'checked'){
				this.block.addClass('--checked')
			}
		},
		Click: function (block) {
			this.Vars(block);
			if(this.status == undefined || this.status == ''){
				this.radios = this.block.parents('body').find('input[name = ' + this.name + ']');
				this.radios.each(function () {
					var input = $(this).parents('.' + radio.class.block);
					$(this).removeAttr('checked');
					input.removeClass('--checked');
				});
				this.input.attr('checked', 'checked');
				this.block.addClass('--checked');
			}
		},
		Init: function () {
			this.input = '.' + radio.class.block + '__' + radio.class.input;
			$(window).on('load', function () {
				$('body').find('.' + radio.class.block).each(function () {
					radio.Filled($(this));
				})
			});
			$('.' + radio.class.block).on('click', function () {
				radio.Click($(this));
			});
		}
	};

	
	radio.Init();
	function valueElementForm(nameElement, nameBlock) {
		var newNameElement = '.' + nameElement;
			element = $(newNameElement);
		element.each(function(index, el) {
			var elementInput = $(this).find($(nameBlock)),
				elementLabel = $(this).find($('label')),
				elementValue = index + 1;
			elementInput.attr('id', nameElement + '-' + elementValue);
			elementLabel.attr('for', nameElement + '-' + elementValue);
		});

	}
	valueElementForm('radio', 'input');



	var hum      = $('.hum'),
			humClass = '--toggle',
			nav      = $('.nav'),
			navClass = '--toggle';

	hum.on('click', function(){
		hum.toggleClass(humClass);
		nav.toggleClass(navClass);
	})
});
