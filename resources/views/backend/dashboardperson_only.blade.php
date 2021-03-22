<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

    @include('backend/headerB')

</head>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
  
  
    @include('backend/navbar')
   


    @include('backend/sidebar')
 


    @include('backend/dashboard/person_province_only')
 

    @include('backend/footerB')


    {{-- <script src="{{ asset('app-assets/js/scripts/charts/chartjs/bar/column.js') }}"></script> --}}

<script>
    $(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#person-chart");

    // Chart Options
    var chartOptions = {
        // Elements options apply to all of the options unless overridden in a dataset
        // In this case, we are setting the border of each bar to be 2px wide and green
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
            kind: 'top',
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
            label: "บุคคลากรทั้งหมด",
            data: [           
                [ <?php echo $chaingmaipgt; ?>],
            [ <?php echo $lamphoonpgt; ?>],
            [ <?php echo $lampangpgt; ?>],        
            [ <?php echo $praepgt; ?>],
            [ <?php echo $nanpgt; ?>],
            [ <?php echo $payouapgt; ?>],
            [ <?php echo $chaingraypgt; ?>],
            [ <?php echo $maehongsonpgt; ?>]
                ],
            backgroundColor: "#28D094",
            // hoverBackgroundColor: "rgba(246,82,45,.9)",
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