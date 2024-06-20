$(document).ready(function () {
  // Initialize by showing Menu 1 by default
  $("#menu1").show();
  $('[data-target="#menu1"]').addClass("active");

  // Function to handle clicking on parent menu items in mobile and iPad view
  $(".nav-link.dropdown-toggle").click(function (e) {
      if ($(window).width() < 1008) {
          e.preventDefault();
          const target = $(this).data("target");
          $(target).toggle();
      }
  });

  // Function to handle clicking on main menu items in mobile and iPad view
  $(".dropdown-item").click(function (e) {
      if ($(window).width() < 1008) {
          e.preventDefault();
          e.stopPropagation();
          const target = $(this).data("target");
          $(".submenu").hide();
          $(target).toggle();
          $(".dropdown-item").removeClass("active");
          $(this).addClass("active");
      }
  });

  // Function to handle hovering over main menu items in desktop view
  $(".dropdown-item").mouseenter(function () {
      if ($(window).width() >= 1008) {
          $(".submenu").hide();
          $(".dropdown-item").removeClass("active");
          const target = $(this).data("target");
          $(target).show();
          $(this).addClass("active");
      }
  });

  // Keep the submenu open when hovering over it or its sibling
  $(".dropdown-menu").on("mouseenter", ".submenu, .dropdown-item.active", function () {
      if ($(window).width() >= 1008) {
          const target = "#" + $(this).closest(".submenu").attr("id");
          $('[data-target="' + target + '"]').addClass("active");
          $(target).show();
      }
  });

  // Adjust submenu display on window resize
  $(window).on("resize", function () {
      if ($(window).width() >= 1008) {
          // For large screens (1008px and up)
          $(".submenu").hide();
          $("#menu1").show();
          $(".dropdown-item").removeClass("active");
          $('[data-target="#menu1"]').addClass("active");
      } else {
          // For small and medium screens (up to 1007px)
          $(".submenu").hide();
          $(".dropdown-item.active").removeClass("active");
      }
  });
});
