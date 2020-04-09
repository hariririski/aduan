'user strict'
$(window).on('load', function () {
    /* line chart large for quarter*/
    var configlinechartlarge = {
        type: 'line',
        data: {
            labels: ['0', 'Q1', 'Q2', 'Q3', 'Q4'],
            datasets: [{
                label: 'My First dataset',
                borderWidth: '2',
                borderColor: '#5ED0FB',
                backgroundColor: 'rgba(94, 208, 251, 0.5)',
                data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                        ],
                    }]
        },
        options: {
            responsive: true,
            spanGaps: false,
            maintainAspectRatio: false,
            elements: {
                line: {
                    tension: 0.000001
                },
                point: {
                    radius: 0
                }
            },
            title: {
                display: false,
                text: 'Chart.js Line Chart - Stacked Area'
            },
            tooltips: {
                mode: 'index',
            },
            hover: {
                mode: 'index'
            },
            legend: {
                display: false,
            },
            scales: {
                xAxes: [{
                    display: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                        }],
                yAxes: [{
                    display: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                        }]
            }
        }
    };

    var ctxlinechartlarge = document.getElementById('linechartlarge').getContext('2d');
    window.myLineChartlarge = new Chart(ctxlinechartlarge, configlinechartlarge);

    setInterval(function () {
        configlinechartlarge.data.datasets.forEach(function (dataset) {
            dataset.data = dataset.data.map(function () {
                return randomScalingFactor();
            });

        });
        window.myLineChartlarge.update();
    }, 1100);


    var barChartData = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
        datasets: [{
            label: 'Dataset 1',
            backgroundColor: '#14379A',
            borderColor: '#14379A',
            barThickness: 4,
            borderWidth: 1,
            data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                }, {
            label: 'Dataset 2',
            backgroundColor: '#5ED0FB',
            borderColor: '#5ED0FB',
            barThickness: 4,
            borderWidth: 1,
            data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                }]

    };

    var mybarchart = document.getElementById('barcharts').getContext('2d');
    mybarchart.height = 100;
    window.myBar = new Chart(mybarchart, {
        type: 'bar',
        data: barChartData,
        options: {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false,
                position: 'top',
            },
            scales: {
                xAxes: [{
                    display: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                        }],
                yAxes: [{
                    display: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                        }]
            },
            title: {
                display: false,
                text: 'Chart.js Bar Chart'
            }
        }
    });

    setInterval(function () {
        var zero = Math.random() < 0.2 ? true : false;
        barChartData.datasets.forEach(function (dataset) {
            dataset.data = dataset.data.map(function () {
                return zero ? 1 : randomScalingFactor();
            });

        });
        window.myBar.update();
    }, 1100);

    /* swiper */
    var swiper = new Swiper('.swiper-categories', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        pagination: false,
    });
    var swiper = new Swiper('.swiper-news', {
        pagination: {
            el: '.swiper-pagination',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
        }
    });
})
