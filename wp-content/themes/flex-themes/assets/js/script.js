jQuery(document).ready(function($) {
    ({
		init: function () {
			var self = this;

			$(function() {
                self.mobileMenu();
            });
        },

        mobileMenu: function() {
            $('.main-nav-btn-mobile-open').click(function() {
                $("header .mobile-menu").animate({top:'0%'}, 400);
            });

            $('.main-nav-btn-mobile-close svg').click(function() {
                $("header .mobile-menu").animate({top:'-100%'}, 400);
            });
        }

    }.init());

});