 $('.seat').not('.disabled').on('click', function () {
   $(this).toggleClass('selected');
});



  $.getJSON('./json/ticket_seat.json', function (data) {
    const $ticketNum = $('.ticket_num');

    // 티켓 항목 동적으로 생성
    data.ticketTypes.forEach(ticket => {
      const ticketHtml = `
        <div class="ticket_controls" data-id="${ticket.id}" data-price="${ticket.price}">
          <span>${ticket.name}</span>
          <button class="counter_btn plusBtn">
            <span class="material-symbols-outlined">add</span>
          </button>
          <span class="count">0</span>
          <button class="counter_btn minusBtn">
            <span class="material-symbols-outlined">remove</span>
          </button>
        </div>
      `;
      $ticketNum.append(ticketHtml);
    });

    // 총액 업데이트 함수
    function updateTotal() {
      let totalPrice = 0;

      $('.ticket_controls').each(function () {
        const price = parseInt($(this).data('price'));
        const count = parseInt($(this).find('.count').text());
        totalPrice += price * count;
      });

      $('.total .price').text(totalPrice.toLocaleString());
    }

    // 수량 + 버튼
    $(document).on('click', '.plusBtn', function () {
      const $count = $(this).siblings('.count');
      let value = parseInt($count.text());
      $count.text(++value);
      updateTotal();
    });

    // 수량 - 버튼
    $(document).on('click', '.minusBtn', function () {
      const $count = $(this).siblings('.count');
      let value = parseInt($count.text());
      if (value > 0) {
        $count.text(--value);
        updateTotal();
      }
    });
  });




