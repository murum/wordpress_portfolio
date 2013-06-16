$(function() { 
	var Slider = function() { this.initialize.apply(this, arguments) };

	Slider.prototype = {
		initialize: function(slider) {
			this.ul = slider.children[0]
			this.li = this.ul.children

			// make <ul> as large as all <li>’s
			this.ul.style.width = (this.li[0].clientWidth * this.li.length) + 'px'

			this.currentIndex = 0
		},

		goTo: function(index) {
			// filter invalid indices
			if (index < 0 || index > this.li.length - 1)
			return

			// move <ul> left
			this.ul.style.left = '-' + (100 * index) + '%'

			this.currentIndex = index
		},

		goToPrev: function() {
			this.goTo(this.currentIndex - 1)
		},

		goToNext: function() {
			this.goTo(this.currentIndex + 1)
		}
	}

	function setSliderHeight(slider, counter) {
		$('.main-slider li').each(function() {
			if(slider.currentIndex == counter) {
				console.log($(this).children().height());
				$('.main-slider').css('height', $(this).children().height());
			};
			counter++;
		});
		counter = 0;
	}

	$('.main-slider').css('width', $('.span10').width());
	var slider;
	var counter = 0;

	$('.main-slider').each(function() {
		slider = new Slider(this);
		$('.main-slider li').each(function() {
		});
		$('.main-slider-next').on('click', function() {
			slider.goToNext();
			setSliderHeight(slider,counter);
			counter = 0;
		});
		$('.main-slider-prev').on('click', function() {
			slider.goToPrev();
			setSliderHeight(slider,counter);
			counter = 0;
		});
	});
	setSliderHeight(slider,counter);
});