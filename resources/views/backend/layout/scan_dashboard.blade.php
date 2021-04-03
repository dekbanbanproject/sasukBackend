<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

    @include('backend/layout/scan_header')

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
  
    @include('backend/layout/scan_nav')  

    @include('backend/layout/scan_sidebar')

    @include('backend/dashboard/scan_content')
 
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('backend/layout/scan_footer')

    {{-- <script src="{{ asset('app-assets/js/progress.js') }}"></script> --}}

<script>
    $(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#person-chart");

    // Chart Options
    var chartOptions = {
        elements: {
            rectangle: {
                borderWidth: 2,
                borderColor: 'rgb(0, 255, 0)',
                borderSkipped: 'bottom'
            }
        },
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration:500,
        legend: {
            position: 'top',
        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                }
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                }
            }]
        },
        title: {
            display: true,
            text: 'ระบบฐานข้อมูลบุคลากร เขตสุขภาพที่ 1'
        }
    };

    // Chart Data
    var chartData = {
        labels: ["เชียงใหม่", "ลำพูน", "ลำปาง", "แพร่", "น่าน","พะเยา","เชียงราย","แม่ฮ่องสอน"],
        datasets: [{
            label: "บุคคลากร",
            data: [           
            // [ ],        
            // [ ]
                ],
            backgroundColor: "#28D094",
            hoverBackgroundColor: "rgba(255, 0, 102)",
            borderColor: "transparent"
      
        }]
    };

    var config = {
        type: 'bar',

        // Chart Options
        options : chartOptions,

        data : chartData
    };

    // Create the chart
    var lineChart = new Chart(ctx, config);
    });
</script>


</body>
</html>