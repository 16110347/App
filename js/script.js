$('.nav-item').on('click', function (e) {
   var link = $(this).attr('href');

   var target = $(link);
   // cek jarak
   // console.log(target.offset().top);

   // $('body').scrollTop(target.offset().top);
   $('body').animate({
      scrollTop: target.offset().top
   });
   // console.log($('body').scrollTop());
   //matikan event
   // e.preventDefault();
});