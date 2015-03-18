(function() {
  
  
  var settings = {
    currentSlide: 2,
    itemsPerContainer: 4,
    totalItems: 6,
    totalSlides: function() {
      return Math.ceil(this.totalItems / this.itemsPerContainer)
    }, 
    changeSlide: function(direction) {
      if (direction == "next") {
        if (this.currentSlide > 1) {
          this.currentSlide -= 1;
          this.itemsToDisplay();
        } else { 
        	this.currentSlide = 1 
            this.itemsToDisplay() 
        };
      } else if(direction == 'prev') {
		var total = this.totalSlides();
		console.log(this.currentSlide);
        if(this.currentSlide >= total) {
          this.currentSlide = total;
          this.itemsToDisplay();
        } else {
          this.currentSlide += 1;
          this.itemsToDisplay();
        }
      }
    },
    currentSlides: function() {
      if (this.currentSlide == 1) {
        return 1;
      } else {
        return (((this.currentSlide - 1) * this.itemsPerContainer) + 1);
      }
    },
    itemsToDisplay: function() {
      var item;
      var currentSlide = this.currentSlides();
      for (var i = currentSlide; i < (currentSlide + 4); i++) {
        item = ".placeholder" + i;
        $(item).css({"display": "inline-block"});
      }
    },
    removeAllItems: function() {
      var item;
      for (var i = 0; i < this.totalItems + 1; i++) {
        item = ".placeholder" + i;
        $(item).css({"display": "none"});
      }
  	}
  }
  
	settings.itemsToDisplay();
  
 	$(document).on('click', 'button.next', function() {
    settings.removeAllItems();
    settings.changeSlide('next');
  });
  
   	$(document).on('click', 'button.prev', function() {
    settings.removeAllItems();
    settings.changeSlide('prev');
  });
})();