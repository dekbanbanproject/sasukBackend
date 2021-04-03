<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

    @include('backend/layout/headerC')

</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap'); */

    * {
        box-sizing: border-box;
    }
        
        .progresst_perchaungmait {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perchaingmaicen ?>;
        }
        .progress-perchaungmait {
            background: linear-gradient(to left, #79f3b8, #48d493);
            box-shadow: 0 3px 3px -5px #79f3b8, 0 2px 5px #d6adf1;
            border-radius: 20px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 0;
            opacity: 0;
            transition: 1s ease 0.3s;
        }
        .progresst_perlamphoont {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perlamphooncen ?>;
        }
        .progress-perlamphoont {
            background: linear-gradient(to left, #79f3b8, #48d493);
            box-shadow: 0 3px 3px -5px #79f3b8, 0 2px 5px #d6adf1;
            border-radius: 20px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 0;
            opacity: 0;
            transition: 1s ease 0.3s;
        }
        .progresst_perlampangt {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perlampangcen ?>;
        }
        .progress-perlampangt {
            background: linear-gradient(to left, #79f3b8, #48d493);
            box-shadow: 0 3px 3px -5px #79f3b8, 0 2px 5px #d6adf1;
            border-radius: 20px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 0;
            opacity: 0;
            transition: 1s ease 0.3s;
        }
        .progresst_perpraet {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perpraecen ?>;
        }
        .progress-perpraet {
            background: linear-gradient(to left, #79f3b8, #48d493);
            box-shadow: 0 3px 3px -5px #79f3b8, 0 2px 5px #d6adf1;
            border-radius: 20px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 0;
            opacity: 0;
            transition: 1s ease 0.3s;
        }
        .progresst_pernant {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $pernancen ?>;
        }
        .progress-pernant {
            background: linear-gradient(to left, #79f3b8, #48d493);
            box-shadow: 0 3px 3px -5px #79f3b8, 0 2px 5px #d6adf1;
            border-radius: 20px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 0;
            opacity: 0;
            transition: 1s ease 0.3s;
        }
        .progresst_perpayouat {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perpayouacen ?>;
        }
        .progress-perpayouat {
            background: linear-gradient(to left, #79f3b8, #48d493);
            box-shadow: 0 3px 3px -5px #79f3b8, 0 2px 5px #d6adf1;
            border-radius: 20px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 0;
            opacity: 0;
            transition: 1s ease 0.3s;
        }
        .progresst_perchaingrayt {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perchaingraycen ?>;
        }
        .progress-perchaingrayt {
            background: linear-gradient(to left, #79f3b8, #48d493);
            box-shadow: 0 3px 3px -5px #79f3b8, 0 2px 5px #d6adf1;
            border-radius: 20px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 0;
            opacity: 0;
            transition: 1s ease 0.3s;
        }
        .progresst_permaehongsont {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $permaehongsoncen ?>;
        }
        .progress-permaehongsont {
            background: linear-gradient(to left, #79f3b8, #48d493);
            box-shadow: 0 3px 3px -5px #79f3b8, 0 2px 5px #d6adf1;
            border-radius: 20px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 0;
            opacity: 0;
            transition: 1s ease 0.3s;
        }

       
</style>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
  
  
    @include('backend/layout/navbar')
   

    @include('backend/layout/sidebar')
 

    @include('backend/dashboard/contentperson_province')
 

    @include('backend/layout/footerC')

<script>
    $(window).on("load", function(){
    var ctx = $("#persontype-chart");

    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration:500,
    };

                                // Chart Data
        var chartData = {
            labels: ["ข้าราชการ", "พนักงานราชการ", "ลูกจ้างประจำ", "พนักงานกระทรวงสาธารณสุข", "ลูกจ้างชั่วคราว", "ลูกจ้างรายวัน", "อื่น ฯ","ว่าง"],
            datasets: [{
            label: "My First dataset",
            data: [ 
                <?php echo $pertype_A; ?>,
                <?php echo $pertype_B; ?>,
                <?php echo $pertype_C; ?>,
                <?php echo $pertype_D; ?>, 
                <?php echo $pertype_E; ?>,
                <?php echo $pertype_F; ?>,
                <?php echo $pertype_G; ?>,
                <?php echo $pertype_H; ?>,
                ],
            backgroundColor: ['#00A5A8', '#626E82', '#FF7D4D','#a64dff', '#28D094', '#ffca4d','#FF3758','#ffe74d'],
            }]
        };

        var config = {
            type: 'doughnut',

            // Chart Options
            options : chartOptions,

            data : chartData
        };

        // Create the chart
        // var doughnutChart = new Chart(ctx, config);
        // Create the chart
        var pieSimpleChart = new Chart(ctx, config);

        });

</script>
<script>
       $(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#personposition-chart");

    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration:500,
    };

    // Chart Data
    var chartData = {
        labels: ["นายแพทย์", "ทันตแพทย์", "พยาบาลวิชาชีพ", "นักวิชาการคอมพิวเตอร์", "นักวิชาการสาธารณสุข", "นักจัดการงานทั่วไป", "เภสัชกร","นักวิเคราะห์นโยบายและแผน","นักเทคนิคการแพทย์","แพทย์แผนไทย","นักโภชนาการ"],
        datasets: [{
            label: "My First dataset",
            data: [ 
                <?php echo $perposition_A; ?>,
                <?php echo $perposition_B; ?>,
                <?php echo $perposition_C; ?>,
                <?php echo $perposition_D; ?>, 
                <?php echo $perposition_E; ?>,
                <?php echo $perposition_F; ?>,
                <?php echo $perposition_G; ?>,
                <?php echo $perposition_6; ?>,
                <?php echo $perposition_22; ?>,
                <?php echo $perposition_25; ?>,
                <?php echo $perposition_27; ?>,
                ],
            backgroundColor: ['#00A5A8', '#626E82', '#FF7D4D','#a64dff', '#28D094', '#ffca4d','#FF3758','#ff4df3','#4d88ff','#4dc4ff','#b5ff4d'],
            }]
        };

    var config = {
        type: 'doughnut',

        // Chart Options
        options : chartOptions,

        data : chartData
    };

    // Create the chart
    var pieSimpleChart = new Chart(ctx, config);
    });
</script>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable( {
            responsive: true
        } );
        });
</script>
<script type="text/javascript">
    $(function () {
        
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url: "{{ url('backend/dashboardperson_only/{provincecode}') }}",
            data: function (d) {
                    d.email = $('.searchName').val(),
                    d.search = $('input[type="search"]').val()
                }
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'HOSPCODE', name: 'HOSPCODE'},
                {data: 'HOS_NAME', name: 'HOS_NAME'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        
        $(".searchName").keyup(function(){
            table.draw();
        });
    
    });
</script>

<script>
    $(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#person");

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