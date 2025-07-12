$(document).ready(function () {
  $('.seat').not('.disabled').on('click', function () {
    $(this).toggleClass('selected');
  });
});



 $.getJSON('./json/ticket_seat.json', function (data) {

  }); 


