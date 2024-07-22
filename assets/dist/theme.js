"use strict";

jQuery(document).ready(function ($) {
  // Mobile navigation

  $(".menu-toggle").click(function () {
    $(".nesto").fadeToggle();
    $('body').toggleClass('menu-open');
  });
  // Sub Menu Trigger

  $("#primary-menu li.menu-item-has-children > a").after('<span class="sub-menu-trigger"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg></span>');
  $(".sub-menu-trigger").click(function () {
    $(this).parent().toggleClass('sub-menu-open');
    $(this).siblings(".sub-menu").slideToggle();
  });

  // Accordion

  $(".st_accordion-header").click(function () {
    $(this).siblings(".st_accordion-body").slideToggle();
    $(this).parent('.st_accordion-item ').toggleClass('open');
  });

  // Tabs

  $('.st_tabs_nav li:first-child').addClass('active');
  $('.st_tabs_nav a').click(function (e) {
    e.preventDefault();
    // Check for active
    var tabLabels = $(this.closest('.container')).find('.st_tabs_nav li');
    tabLabels.removeClass('active');
    $(this).parent().addClass('active');

    // Display active tab
    var currentTab = $(this).data('tab');
    var currentsTabContent = $(this.closest('.container')).find('.st_tab');
    currentsTabContent.hide();
    $.each(currentsTabContent, function (key, tab) {
      var tabContentIndex = $(tab).data('tab');
      if (tabContentIndex === currentTab) {
        $(tab).show();
      }
    });
    return false;
  });
  Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });
});