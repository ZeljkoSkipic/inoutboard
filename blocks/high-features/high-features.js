jQuery(document).ready(function ($) {

	// Highlighted features

	$('.st_hf_nav li:first-child').addClass('active');
	$('.st_hf_nav .st_hf_trigger').click(function (e) {
	$( '.st_hf_nav li.active .st_hf_nav_content' ).slideToggle();
	$( this ).siblings().slideToggle();
		e.preventDefault();
		// Check for active
		let tabLabels =  $(this.closest('.container')).find('.st_hf_nav li');
		tabLabels.removeClass('active');
		$(this).parent().addClass('active');

		// Display active tab
		let currentTab = $(this).data('tab');
		let currentsTabContent = $(this.closest('.container')).find('.st_feature').fadeToggle();
		currentsTabContent.hide();
		$.each(currentsTabContent, (key, tab) => {
			let tabContentIndex = $(tab).data('tab');
			if(tabContentIndex === currentTab ) {
				$(tab).show();
			}
		});

		return false;
	});
});
