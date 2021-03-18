<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

    @include('backend/headerB')

</head>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
  
  
    @include('backend/navbar')
   


    @include('backend/sidebar')
 


    @include('backend/dashboard/content')
 

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
            [ <?php echo $chaingmai; ?>],
            [ <?php echo $lamphoon; ?>],
            [ <?php echo $lampang; ?>],        
            [ <?php echo $prae; ?>],
            [ <?php echo $nan; ?>],
            [ <?php echo $payoua; ?>],
            [ <?php echo $chaingray; ?>],
            [ <?php echo $maehongson; ?>]
                ],
            backgroundColor: "#28D094",
            // hoverBackgroundColor: "rgba(246,82,45,.9)",
            borderColor: "transparent"
        // },
        //  {
        //     label: "พนักงานราชการ",
        //     data: [
        //         [ <?php echo $chaingmai; ?>],
        //       [ <?php echo $data; ?>],
        //       [ <?php echo $per; ?>],
        //       [ <?php echo $assets; ?>]
        //     ],
        //     backgroundColor: "#F98E76",
        //     hoverBackgroundColor: "rgba(249,142,248,.9)",
        //     borderColor: "transparent"
        // }, {
        //     label: "พนักงานราชการ",
        //     data: [
        //         [ <?php echo $chaingmai; ?>],
        //       [ <?php echo $data; ?>],
        //       [ <?php echo $per; ?>],
        //       [ <?php echo $assets; ?>]
        //     ],
        //     backgroundColor: "#cb76f9",
        //     hoverBackgroundColor: "rgba(249,142,118,.9)",
        //     borderColor: "transparent"
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

<script>
    $(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#assets-chart");

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
            text: 'ระบบฐานข้อมูลครุภัณฑ์ เขตสุขภาพที่ 1'
        }
    };

    // Chart Data
    var chartData = {
        labels: ["เชียงใหม่", "ลำพูน", "ลำปาง", "แพร่", "น่าน","พะเยา","เชียงราย","แม่ฮ่องสอน"],
        datasets: [{
            label: "ครุภัณฑ์",
            data: [           
            [ <?php echo $As_chaingmai; ?>],
            [ <?php echo $As_lamphoon; ?>],
            [ <?php echo $As_lampang; ?>],        
            [ <?php echo $As_prae; ?>],
            [ <?php echo $As_nan; ?>],
            [ <?php echo $As_payoua; ?>],
            [ <?php echo $As_chaingray; ?>],
            [ <?php echo $As_maehongson; ?>]
                ],
            backgroundColor: "#f55015",
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

<script>
    $(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#building-chart");

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
            text: 'ระบบฐานข้อมูลอาคาร เขตสุขภาพที่ 1'
        }
    };

    // Chart Data
    var chartData = {
        labels: ["เชียงใหม่", "ลำพูน", "ลำปาง", "แพร่", "น่าน","พะเยา","เชียงราย","แม่ฮ่องสอน"],
        datasets: [{
            label: "อาคาร",
            data: [           
            [ <?php echo $buil_chaingmai; ?>],
            [ <?php echo $buil_lamphoon; ?>],
            [ <?php echo $buil_lampang; ?>],        
            [ <?php echo $buil_prae; ?>],
            [ <?php echo $buil_nan; ?>],
            [ <?php echo $buil_payoua; ?>],
            [ <?php echo $buil_chaingray; ?>],
            [ <?php echo $buil_maehongson; ?>]
                ],
            backgroundColor: "#7696f9",
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