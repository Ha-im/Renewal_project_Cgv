const ctx1 = document.getElementById('myChart');
const ctx2 = document.getElementById('line_myChart');
new Chart(ctx1, {
    type: 'pie',
    data: {
        labels: ['남성', '여성'],
        datasets: [{
            data: [75, 25],
            backgroundColor: [
                '#41556C',
                '#D13867'
            ],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false, // 비율 고정 끄기
        plugins: {
            legend: {
                labels: {
                    color: 'white'
                }
            }
        }
    }
});

const dataValues = [12, 19, 3, 5];
const maxValue = Math.max(...dataValues); // 최댓값 구하기
const backgroundColors = dataValues.map(value =>
    value === maxValue ? '#ED3124' : '#D9D9D9'  // 최댓값은 빨간색, 나머지는 파란색
);
new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['10대', '20대', '30대', '40대'],
        datasets: [{
            label: '연령 별 예매',
            data: dataValues,
            backgroundColor: backgroundColors
        }]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    color: 'white'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: 'white'
                }
            },
            y: {
                ticks: {
                    color: 'white'
                }
            }
        }
    }

});


    const $slideContainer = $('.slide_container');
    const slideWidth = $('.slide_item').outerWidth();

    // 다음 슬라이드
    $('.next_btn').on('click', function () {
      $slideContainer.animate({ left: -slideWidth }, 400, function () {
        $slideContainer.append($slideContainer.find('.slide_item').first());
        $slideContainer.css('left', 0);
      });
    });

    // 이전 슬라이드
    $('.prev_btn').on('click', function () {
      $slideContainer.prepend($slideContainer.find('.slide_item').last());
      $slideContainer.css('left', -slideWidth);
      $slideContainer.animate({ left: 0 }, 400);
    });

