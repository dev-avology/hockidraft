<script src="{{asset('javascript/jquery.js')}}"></script>
<script src="{{asset('javascript/bootstrap.min.js')}}"></script>
<script src="{{asset('javascript/custom.js')}}"></script>
<script src="{{asset('javascript/owl.carousel.min.js')}}"></script>     
<script src="{{asset('javascript/bootstrap.bundle.min.js')}}"></script>     

  <script>
    $('.slider_row').owlCarousel({
      rtl: false,
      loop: true,
      margin: 10,
      nav: true,
      navText: ["<i class='flaticon-left-chevron'></i>", "<i class='flaticon-right-chevron'></i>"],
      dots: false,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2,
          margin: 10,
        },
        992: {
          items: 3,
          margin: 10,
        }
      }
    });
  </script>
  <script> $(".profile").click(function () {
      $(this).find(".dropdown").slideToggle();
    });

  </script>
  <script>
    const cookieBox = document.querySelector(".wrapper"),
      buttons = document.querySelectorAll(".button");

    const executeCodes = () => {
      //if cookie contains codinglab it will be returned and below of this code will not run
      if (document.cookie.includes("codinglab")) return;
      cookieBox.classList.add("show");

      buttons.forEach((button) => {
        button.addEventListener("click", () => {
          cookieBox.classList.remove("show");

          //if button has acceptBtn id
          if (button.id == "acceptBtn") {
            //set cookies for 1 month. 60 = 1 min, 60 = 1 hours, 24 = 1 day, 30 = 30 days
            document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
          }
        });
      });
    };

    //executeCodes function will be called on webpage load
    window.addEventListener("load", executeCodes);
  </script>
  
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script src="https://www.google.com/recaptcha/api.js"
		async defer></script>
{{-- <script src="//cdn.datatables.net/2.1.4/js/dataTables.min.js"></script> --}}

<script>
	var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone; console.log('timezone'+timezone);
	var expires = new Date();
	var value = 1;
	expires.setTime(expires.getTime() + (value * 24 * 60 * 60 * 1000));
	document.cookie =  "timezone=" + timezone + ";" + "expires=" + expires.toUTCString() + ";path=/";
</script>
