<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

    @include('backend/headerB')

</head>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
  
  
    @include('backend/navbar')
   


    @include('backend/sidebar')
 


    @include('backend/dashboard/personprovince')
 

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
    var ctx = $("#personkind-chart");

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
        labels: ["เชียงใหม่", "ลำพูน", "ลำปาง", "แพร่", "น่าน","พะเยา","เชียงราย","แม่ฮ่องสอน","ว่าง"],
        datasets: [{
            label: "ข้าราชการ",
            data: [    
                [ <?php echo $chaingmaikind; ?>],
                [ <?php echo $lamphoonkind; ?>],
                [ <?php echo $lampangkind; ?>],        
                [ <?php echo $praekind; ?>],
                [ <?php echo $nankind; ?>],
                [ <?php echo $payouakind; ?>],
                [ <?php echo $chaingraykind; ?>],
                [ <?php echo $maehongsonkind; ?>]
                ],
            backgroundColor: "#5d8ff8",
            borderColor: "transparent"
        },
         {
            label: "พนักงานกระทรวงสาธารณสุข",
            data: [
                [ <?php echo $chaingmaikindsuang; ?>],
                [ <?php echo $lamphoonkindsuang; ?>],
                [ <?php echo $lampangkindsuang; ?>],        
                [ <?php echo $praekindsuang; ?>],
                [ <?php echo $nankindsuang; ?>],
                [ <?php echo $payouakindsuang; ?>],
                [ <?php echo $chaingraykindsuang; ?>],
                [ <?php echo $maehongsonkindsuang; ?>]
            ],
            backgroundColor: "#F98E76",
            borderColor: "transparent"
       }, 
       {
            label: "ลูกจ้างรายวัน",
            data: [
                [ <?php echo $chaingmaikindjang; ?>],
                [ <?php echo $lamphoonkindjang; ?>],
                [ <?php echo $lampangkindjang; ?>],        
                [ <?php echo $praekindjang; ?>],
                [ <?php echo $nankindjang; ?>],
                [ <?php echo $payouakindjang; ?>],
                [ <?php echo $chaingraykindjang; ?>],
                [ <?php echo $maehongsonkindjang; ?>]
            ],
            backgroundColor: "#f85d8f",
            borderColor: "transparent"
        }, 
        {
                label: "ลูกจ้างประจำ",
                data: [
                    [ <?php echo $chaingmaikindjangjom; ?>],
                    [ <?php echo $lamphoonkindjangjom; ?>],
                    [ <?php echo $lampangkindjangjom; ?>],        
                    [ <?php echo $praekindjangjom; ?>],
                    [ <?php echo $nankindjangjom; ?>],
                    [ <?php echo $payouakindjangjom; ?>],
                    [ <?php echo $chaingraykindjangjom; ?>],
                    [ <?php echo $maehongsonkindjangjom; ?>]
                ],
                backgroundColor: "#e6320a",
                borderColor: "transparent"
        },
        {
                label: "พนักงานราชการ",
            data: [    
                [ <?php echo $chaingmaikindkarn; ?>],
                [ <?php echo $lamphoonkindkarn; ?>],
                [ <?php echo $lampangkindkarn; ?>],        
                [ <?php echo $praekindkarn; ?>],
                [ <?php echo $nankindkarn; ?>],
                [ <?php echo $payouakindkarn; ?>],
                [ <?php echo $chaingraykindkarn; ?>],
                [ <?php echo $maehongsonkindkarn; ?>]
                ],
            backgroundColor: "#cbf540",
            borderColor: "transparent"
        },
        {
            label: "ข้อมูลว่าง",
            data: [    
                [ <?php echo $chaingmaikindnull; ?>],
                [ <?php echo $lamphoonkindnull; ?>],
                [ <?php echo $lampangkindnull; ?>],        
                [ <?php echo $praekindnull; ?>],
                [ <?php echo $nankindnull; ?>],
                [ <?php echo $payouakindnull; ?>],
                [ <?php echo $chaingraykindnull; ?>],
                [ <?php echo $maehongsonkindnull; ?>]
                ],
            backgroundColor: "#c4bf25",
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