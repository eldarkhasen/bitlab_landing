function toSendRequest() {
   let form = $(event.target).parent()[0];
   let name = $(form).find("*[name='name']")[0];
   let course = $(form).find("*[name='course']")[0];
   let phone = $(form).find("*[name='phone']")[0];
   let caution = $(form).find(".error-text")[0];
   // Время ожидания
   let timeout = 30000;

   $(name).removeClass("error");
   $(course).removeClass("error");
   $(phone).removeClass("error");
   $(caution).addClass("dn");
   $(caution).text("Заполните все поля формы!");

   let nameVal = $(name).val();
   let courseVal = $(course).val();
   let phoneVal = $(phone).val().replace("(", '')
      .replaceAll(")", '')
      .replaceAll("-", '')
      .replaceAll(" ", '')
      .replaceAll("+", '');

   if (nameVal !== "") {
      if (courseVal != null) {
         if (phoneVal !== "") {
            $("#loader").removeClass("dn");
            $.post("php/contact.php",
               {
                  "name": nameVal,
                  "course": courseVal,
                  "phone": phoneVal
               },
               function (data) {
                  $("#contact-result").html(data);
                  var myEle = document.getElementById("contact-success");
                  if (myEle) {
                     form.reset();
                     window.setTimeout(function () {
                        location.href = "thanks.html"
                     }, 500);
                  } else {
                     $("#loader").addClass("dn");
                     $(caution).text("Произошла ошибка! Повторите попытку!");
                     $(caution).removeClass("dn");
                  }
               });
            setTimeout(() => {
               $("#loader").addClass("dn");
               $(caution).text("Произошла ошибка! Повторите попытку!");
               $(caution).removeClass("dn");
            }, timeout);
         } else {
            $(phone).addClass("error");
            $(caution).removeClass("dn");
         }
      } else {
         $(course).addClass("error");
         $(caution).removeClass("dn");
      }
   } else {
      $(name).addClass("error");
      $(caution).removeClass("dn");
   }
}

$(document).ready(function () {
   $('.section-reviews__slider').slick({
      arrows: false,
      dots: true,
      infinite: false,
      slidesToShow: 3,
      responsive: [
         {
            breakpoint: 991.98,
            settings: {
               slidesToShow: 2
            }
         },
         {
            breakpoint: 550,
            settings: {
               slidesToShow: 1
            }
         }
      ],
   });

   let howtoBtns = $(".section-howto__btn"),
      howtoUnderline = $("#section-howto-underline"),
      howtoActive = $(".section-howto__btn.active"),
      howtoSlider = $("#section-howto-slider"),
      howtoSubtitles = $(".section-howto__subtitles").first(),
      howtoSubtitle = $("#section-howto__subtitle");
   if (howtoActive[0]) {
      howtoSubtitle.html(
         howtoSubtitles.find(
            "p[data-screen='" + howtoActive.data("screen") + "']"
         ).text()
      );
      howtoUnderline.css({
         "width": howtoActive.width(),
         "transform": "translateX(" + howtoActive.position().left + "px)"
      });
      $(howtoBtns).each(function () {
         $(this).on("click", function () {
            let howtoCurrentActiveBtn = $(".section-howto__btn.active");
            let howtoCurrentActiveScreen = $(".section-howto__screen[data-screen='" + howtoCurrentActiveBtn.data("screen") + "']");
            let howtoNextActiveBtn = $(this);
            let howtoNextActiveScreen = $(".section-howto__screen[data-screen='" + $(this).data("screen") + "']");
            let posUnderline = $(this).position().left + +window.getComputedStyle(this, null).marginLeft.replace("px", '');
            let posSlider = howtoNextActiveScreen.index() * -100;

            howtoCurrentActiveScreen.removeClass("active");
            howtoCurrentActiveBtn.removeClass("active");

            howtoNextActiveBtn.addClass("active");
            howtoNextActiveScreen.addClass("active");

            howtoSubtitle.html(
               howtoSubtitles.find(
                  "p[data-screen='" + howtoNextActiveBtn.data("screen") + "']"
               ).text()
            );

            howtoUnderline.css({
               "width": $(this).width(),
               "transform": "translateX(" + posUnderline + "px)"
            });
            howtoSlider.css({
               "transform": "translateX(" + posSlider + "%)"
            });
         });
      });
   }

   $("button[data-toggle='modal'").each(function () {
      let btn = $(this);
      btn.click(function () {
         let modal = $("#" + btn.data("modal"));

         if (btn.data("modalType") == "fullscreen-img") {
            let bgUrl = $(".section-howto__screen.active img").first().attr("src");
            modal.find(".section-howto-fullscreen__img")[0].src = bgUrl;
         }
         if (btn.data("modal") == "course-details") {
            let courseInfo = $(btn).parent().find(".section-course__program")[0];
            let program = $(courseInfo).text();
            let id = $(courseInfo).data("course");

            modal.find(".section-course-modal__content_description").text(program);
            modal.find("*[name='course']").val(id);
         }

         document.body.classList.add("lock");
         modal.addClass("show");
      });
   });

   $(".modal").each(function () {
      let modal = $(this);
      modal.click(function (event) {
         if (!(event.target).closest(".modal-content")) {
            document.body.classList.remove("lock");
            modal.removeClass("show");
            $(".error").each(function () {
               $(this).removeClass("error");
            });
            $(".error-text").each(function () {
               $(this).addClass("dn");
            });
         }
      });
   });

   $("input[type='tel']").each(function () {
      $(this).mask("+7(999) 999-99-99");
   });
});