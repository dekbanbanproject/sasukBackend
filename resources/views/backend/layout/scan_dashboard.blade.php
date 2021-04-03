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
    <script>
        
$(window).on("load", function(){

//Get the context of the Chart canvas element we want to select
var ctx = $("#comboscan");

// Chart Options
var chartOptions = {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
        xAxes: [{
            display: true,
            gridLines: {
                color: "#f3f3f3",
                drawTicks: false,
            },
            scaleLabel: {
                display: true,
                labelString: 'Month'
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
                labelString: 'Value'
            }
        }]
    },
    title: {
        display: false,
        text: 'Chart.js Combo Bar Line Chart'
    }
};

// Chart Data
var chartData = {
    labels: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
    datasets: [{
        type: 'line',
        label: "พศ.2521",
        data: [
            <?php echo $opd1; ?>,
            <?php echo $opd2; ?>,
            <?php echo $opd3; ?>,
            <?php echo $opd4; ?>,
            <?php echo $opd5; ?>,
            <?php echo $opd6; ?>,
            <?php echo $opd7; ?>,
            <?php echo $opd8; ?>,
            <?php echo $opd9; ?>,
            <?php echo $opd10; ?>,
            <?php echo $opd11; ?>,
            <?php echo $opd12; ?>,
        ],
        backgroundColor: "rgba(250,142,117,.5)",
        borderColor: "transparent",
        borderWidth: 2,
        pointBorderColor: "#FA8E75",
        pointBackgroundColor: "#FFF",
        pointBorderWidth: 2,
        pointHoverBorderWidth: 2,
        pointRadius: 4,
    },{
        type: 'line',
        label: "พศ.2522",
        data: [
            <?php echo $opd122; ?>,
            <?php echo $opd222; ?>,
            <?php echo $opd322; ?>,
            <?php echo $opd422; ?>,
            <?php echo $opd522; ?>,
            <?php echo $opd622; ?>,
            <?php echo $opd722; ?>,
            <?php echo $opd822; ?>,
            <?php echo $opd922; ?>,
            <?php echo $opd1022; ?>,
            <?php echo $opd1122; ?>,
            <?php echo $opd1222; ?>,
        ],
        backgroundColor: "rgb(144,167,252)",
        borderColor: "transparent",
        borderWidth: 2,
        pointBorderColor: "##99ffcc",
        pointBackgroundColor: "#FFF",
        pointBorderWidth: 2,
        pointHoverBorderWidth: 2,
        pointRadius: 4,
    },{
        type: 'bar',
        label: "พศ.2520",
        data: [
            <?php echo $opd11; ?>,
            <?php echo $opd21; ?>,
            <?php echo $opd31; ?>,
            <?php echo $opd41; ?>,
            <?php echo $opd51; ?>,
            <?php echo $opd61; ?>,
            <?php echo $opd71; ?>,
            <?php echo $opd81; ?>,
            <?php echo $opd91; ?>,
            <?php echo $opd101; ?>,
            <?php echo $opd111; ?>,
            <?php echo $opd121; ?>,
        ],
        backgroundColor: "#00A5A8",
        borderColor: "transparent",
        borderWidth: 2
    }, {
        type: 'bar',
        label: "พศ.2519",
        data: [
            <?php echo $opd12; ?>,
            <?php echo $opd22; ?>,
            <?php echo $opd32; ?>,
            <?php echo $opd42; ?>,
            <?php echo $opd52; ?>,
            <?php echo $opd62; ?>,
            <?php echo $opd72; ?>,
            <?php echo $opd82; ?>,
            <?php echo $opd92; ?>,
            <?php echo $opd102; ?>,
            <?php echo $opd112; ?>,
            <?php echo $opd122; ?>,
        ],
        backgroundColor: "#F25E75",
        borderColor: "transparent",
        borderWidth: 2
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

    {{-- <script src="{{ asset('function/scanchart.js') }}"></script> --}}
{{-- <script>
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
</script> --}}


</body>
</html>

