$.noConflict();
(function($) {
  $(document).ready(function() {
    $("#cssmenu").prepend('<div id="menu-button">Menu</div>');
    $("#cssmenu #menu-button").on("click", function() {
      var menu = $(this).next("ul");
      if (menu.hasClass("open")) {
        menu.removeClass("open");
      } else {
        menu.addClass("open");
      }
    });
  });
})(jQuery);

// $(".counter-count").each(function() {
//   $(this)
//     .prop("Counter", 0)
//     .animate(
//       {
//         Counter: $(this).text()
//       },
//       {
//         duration: 5000,
//         easing: "swing",
//         step: function(now) {
//           $(this).text(Math.ceil(now));
//         }
//       }
//     );
// });

var a = 0;
$(window).scroll(function() {
  var oTop = $("#counter").offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $(".counter-count").each(function() {
      var $this = $(this),
        countTo = $this.attr("data-count");
      $({
        countNum: $this.text()
      }).animate(
        {
          countNum: countTo
        },

        {
          duration: 2000,
          easing: "swing",
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }
        }
      );
    });
    a = 1;
  }
});
