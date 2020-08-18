$(function(){
    "use strict";

    $('.sparkbar').sparkline('html', { type: 'bar' });

    $('.sparkline-pie').sparkline('html', {
        type: 'pie',
        offset: 90,
        width: '100px',
        height: '100px',
        sliceColors: ['#29bd73', '#182973', '#ffcd55']
    })    

    // notification popup
    toastr.options.closeButton = true;
    toastr.options.positionClass = 'toast-bottom-right';
    toastr.options.showDuration = 1000;
    toastr['info']('سلام، خوش آمدید به برگو، یک قالب مدیریت منحصر به فرد.');


    $('.knob').knob({
		draw: function () {
		}
    });    
    
});

$(function() {
	"use strict";
    initSparkline();
	
	var values2 = getRandomValues();
	var paramsBar = {
        type: 'bar',
        barWidth: 10,
        height: 80,
        barSpacing: 8,
        barColor: '#ffffff'
    };
    $('#minibar-chart1').sparkline(values2[0], paramsBar);
    $('#minibar-chart2').sparkline(values2[1], paramsBar);
    $('#minibar-chart3').sparkline(values2[2], paramsBar);
    $('#minibar-chart4').sparkline(values2[3], paramsBar);

	function getRandomValues() {
        // data setup
        var values = new Array(20);

        for (var i = 0; i < values.length; i++) {
            values[i] = [5 + randomVal(), 10 + randomVal(), 15 + randomVal(), 20 + randomVal(), 30 + randomVal(),
                35 + randomVal(), 40 + randomVal(), 45 + randomVal(), 50 + randomVal()
            ];
        }

        return values;
    }

    function randomVal() {
        return Math.floor(Math.random() * 80);
	}
});

// C3 Chart js
$(function(){
    "use strict";
    // Members
    var chart = c3.generate({
        bindto: '#chart-bar-stacked', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 11, 8, 15, 18, 19, 17],
                ['data2', 7, 7, 5, 7, 9, 12]
            ],
            type: 'bar', // default type of chart
            groups: [
                [ 'data1', 'data2']
            ],
            colors: {
                'data1': '#467fcf', // blue
                'data2': '#f66d9b', // pink
            },
            names: {
                // name of each serie
                'data1': 'User',
                'data2': 'VIP'
            }
        },
        axis: {
            x: {
                type: 'category',
                // name of each category
                categories: ['ژان', 'فور', 'مارس', 'آور', 'مه', 'ژوئن']
            },
        },
        bar: {
            width: 10
        },
        legend: {
            show: false, //hide legend
        },
        padding: {
            bottom: -20,
            top: 0,
            left: -6,
        },
    });
    // Marketing
    var chart = c3.generate({
        bindto: '#chart-area-Marketing', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 11, 8, 15, 18, 19, 17],
                ['data2', 7, 7, 5, 7, 9, 12]
            ],
            type: 'area-spline', // default type of chart
            groups: [
                [ 'data1', 'data2']
            ],
            colors: {
                'data1': '#467fcf', // blue
                'data2': '#f66d9b', // pink
            },
            names: {
                // name of each serie
                'data1': 'ماه گذشته',
                'data2': 'این ماه'
            }
        },
        axis: {
            x: {
                type: 'category',
                // name of each category
                categories: ['ژان', 'فور', 'مارس', 'آور', 'مه', 'ژوئن']
            },
        },
        legend: {
            show: false, //hide legend
        },
        padding: {
            bottom: -20,
            top: 0,
            left: -7,
        },
    });
    c3.generate({
        bindto: '#chart-pie', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 63],
                ['data2', 44],
                ['data3', 12],
                ['data4', 14]
            ],
            type: 'pie', // default type of chart
            colors: {
                'data1': '#1c3353', // blue darker
                'data2': '#467fcf', // blue
                'data3': '#c8d9f1', // blue lighter
                'data4': '#7ea5dd', // blue light            
            },
            names: {
                // name of each serie
                'data1': 'اپل',
                'data2': 'نوکیا',
                'data3': 'شیائومی',
                'data4': 'ویوو',
            }
        },
        axis: {
        },
        legend: {
            show: true, //hide legend
        },
        padding: {
            bottom: 20,
            top: 0
        },
    });
});

$(function(){
    "use strict";
    var dataStackedBar = {
        labels: ['س1', 'س2', 'س3', 'س4', 'س5', 'س6'],
        series: [
            [8000, 12000, 3600, 1300, 12000, 12000],
            [2000, 4000, 5000, 3000, 7000, 4000],
            [1000, 2000, 4000, 6000, 3000, 2000]
        ]
    };
    new Chartist.Bar('#stackedbar-chart', dataStackedBar, {
        height: "228px",
        stackBars: true,
        axisX: {
            showGrid: false
        },
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value / 1000) + 'k';
            }
        },
        plugins: [
            Chartist.plugins.tooltip({
                appendToBody: true
            }),
            Chartist.plugins.legend({
                legendNames: ['درآمد', 'درآمد', 'هزینه']
            })
        ]
    }).on('draw', function(data) {
        if (data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 25px'
            });
        }
    });
});