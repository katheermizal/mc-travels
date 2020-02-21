 var $ = jQuery.noConflict();  
 $(document).ready(function () {
	 $('header .header__humberg').click(function () {
        var _this = $(this);
        $('body').toggleClass('menu-active');
        _this.toggleClass('active');
    });
});