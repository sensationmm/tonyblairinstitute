'use strict';

var mobileCheck = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPod|iPad/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function() {
        return (mobileCheck.Android() || mobileCheck.BlackBerry() || mobileCheck.iOS() || mobileCheck.Opera() || mobileCheck.Windows());
    }
};

var isMobile = (mobileCheck.any()) ? true : false;

$(document).ready(function() {

	var $body = $('body');

	/***********************************************************************************************************/
	/* Mobile navigation
	/***********************************************************************************************************/
	var $mobileNav = $('.menu-icon');
	var $nav = $('div.header');

	$mobileNav.click(function() {
		if(!$nav.hasClass('active')) {
			$nav.animate({'left':'0px'}, 500, 'swing').addClass('active');
			$body.addClass('noscroll');
		} else {
			$nav.animate({'left':'-100%'}, 250, 'swing').removeClass('active');
			$body.removeClass('noscroll');
		}
	});


	/***********************************************************************************************************/
	/* Content Fade In
	/***********************************************************************************************************/
	var $targets = $('.animate');

	var bottomOfWindow = $(window).scrollTop() + $(window).height();

	$($targets).each(function (i) {

		var topOfObject = $(this).offset().top;

		if (bottomOfWindow > topOfObject) {
			var el = $(this);
			setTimeout(function() {
				el.animate({'opacity': '1', 'top': '0'}, 500);
			}, 100*i);
		}

		console.log(bottomOfWindow);

	});

	$(window).scroll(function () {

		var bottomOfWindow = $(window).scrollTop() + $(window).height();

		if(!isMobile) {
			bottomOfWindow = bottomOfWindow - 50;
		}

		$($targets).each(function (i) {
			var topOfObject = $(this).offset().top;

			if (bottomOfWindow > topOfObject) {
				$(this).animate({'opacity': '1', 'top': '0'}, 500);
			}
		});

	});


	/***********************************************************************************************************/
	/* News Load More
	/***********************************************************************************************************/
	var $loadMore = $('.load-more .read-more a');

	$loadMore.click(function() {
		var newsContainer = $('.news-list-more.more-next');

		var loadContent = $(this).attr('href');

		var div = $('<div>');
		div.load(loadContent+' .body', function() {
			var newsContent = div.find('.news-list > div');
			newsContainer.append(newsContent);
			newsContainer.animate({'opacity':'1',}, 500);

			$('.news-list-more.more-next').first().removeClass('more-next');
			$('.news-list-more').last().addClass('more-next');


			var nextLink = div.find('.load-more .read-more > a').attr('href');
			if(nextLink !== undefined) {
				$('.load-more .read-more a').attr('href', nextLink);
			} else {
				$('.load-more .read-more').html('No more articles to show');
			}
		});

		return false;
	});

});


/***********************************************************************************************************/
/* Newsletter validation
/***********************************************************************************************************/
function validateSubscription() {

	var $status = true,
		$subFirstName = $('#subscribe_name'),
		$subLastName = $('#subscribe_lastname'),
		$subEmail = $('#subscribe_email'),
		$subCheckGov = $('#subscribe_government'),
		$subCheckMidEast = $('#subscribe_middleeast'),
		$subCheckExtr = $('#subscribe_extremism'),
		$subCheckPol = $('#subscribe_policy'),
		$subCheckboxes = $('input[type="checkbox"]');

	if($subFirstName.val() === '') { 
		$subFirstName.addClass('error');
		$status = false;
	} else {
		$subFirstName.removeClass('error');
	}
	if($subLastName.val() === '') { 
		$subLastName.addClass('error');
		$status = false;
	} else {
		$subLastName.removeClass('error');
	}

	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if($subEmail.val() === '') {
		$subEmail.addClass('error');
		$status = false;
	} else if(!regex.test($subEmail.val())) {
		$subEmail.addClass('error');
		$status = false;
	} else {
		$subEmail.removeClass('error');
	}

	if(!$subCheckGov.prop('checked') && !$subCheckMidEast.prop('checked') && !$subCheckExtr.prop('checked') && !$subCheckPol.prop('checked')) { 
		$subCheckboxes.addClass('error'); 
		$status = false;
	} else {
		$subCheckboxes.removeClass('error');
	}

	if(!$status) {
		return false;
	} else {
		return true;
	}
}

$('#subscribe_form').on('submit', function(e) {

	var $status = true,
		$subFirstName = $('#subscribe_name'),
		$subLastName = $('#subscribe_lastname'),
		$subEmail = $('#subscribe_email'),
		$subCheckGov = $('#subscribe_government'),
		$subCheckMidEast = $('#subscribe_middleeast'),
		$subCheckExtr = $('#subscribe_extremism'),
		$subCheckPol = $('#subscribe_policy'),
		$subCheckboxes = $('input[type="checkbox"]');

	if($subFirstName.val() === '') { 
		$subFirstName.addClass('error');
		$status = false;
	} else {
		$subFirstName.removeClass('error');
	}
	if($subLastName.val() === '') { 
		$subLastName.addClass('error');
		$status = false;
	} else {
		$subLastName.removeClass('error');
	}

	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if($subEmail.val() === '') {
		$subEmail.addClass('error');
		$status = false;
	} else if(!regex.test($subEmail.val())) {
		$subEmail.addClass('error');
		$status = false;
	} else {
		$subEmail.removeClass('error');
	}

	if(!$subCheckGov.prop('checked') && !$subCheckMidEast.prop('checked') && !$subCheckExtr.prop('checked') && !$subCheckPol.prop('checked')) { 
		$subCheckboxes.addClass('error'); 
		$status = false;
	} else {
		$subCheckboxes.removeClass('error');
	}

	if($status) {
		e.preventDefault();

		var submitURL = $(this).attr('action');

		var data = {
			'subscribe_name' : $('#subscribe_name').val(),
			'subscribe_lastname' : $('#subscribe_lastname').val(),
			'subscribe_email' : $('#subscribe_email').val(),
			'subscribe_government' : $('#subscribe_government').prop('checked'),
			'subscribe_middleeast' : $('#subscribe_middleeast').prop('checked'),
			'subscribe_extremism' : $('#subscribe_extremism').prop('checked'),
			'subscribe_policy' : $('#subscribe_policy').prop('checked')
		};

		$.ajax({
			dataType: "json",
			url: submitURL,
			type: 'post',
			data: JSON.stringify(data),
			statusCode: {
				200: function() {
					// console.log('success');
					$('.newsletter-form form').css('display','none');
					$('.newsletter-success').fadeIn('slow');
				},
				404: function() {
					// console.log('fail');
				}
			}
		});
	} else {
		return false;
	}
});


/***********************************************************************************************************/
/* Animating Hamburger
/***********************************************************************************************************/
(function() {

  function toggleHandler(toggle) {
  	if(toggle.addEventListener) {
		toggle.addEventListener( "click", function(e) {
			e.preventDefault();
			if(this.classList.contains("is-active") === true) {
				this.classList.remove("is-active");
			} else {
				this.classList.add("is-active");
			}
		});
	} else {
		toggle.attachEvent( "click", function(e) {
			e.preventDefault();
			if(this.classList.contains("is-active") === true) {
				this.classList.remove("is-active");
			} else {
				this.classList.add("is-active");
			}
		});
	}
  }

  var toggles = document.querySelectorAll(".c-hamburger--htx");

  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  }

})();