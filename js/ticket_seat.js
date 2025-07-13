$(document).ready(function () {
  $('.seat').not('.disabled').on('click', function () {
    $(this).toggleClass('selected');
  });
});




