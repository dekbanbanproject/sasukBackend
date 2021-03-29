<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

    @include('backend/headerB')

</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap'); */

    * {
        box-sizing: border-box;
    }
        .progresst_per {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $percen ?>;
        }
        .progress-per {
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
        .progresst_assets {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $assetscen ?>;
        }
        .progress-assets {
            background: linear-gradient(to left, #f8cf84, #f72a0f);
            box-shadow: 0 3px 3px -5px #f8cf84, 0 2px 5px #d6adf1;
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
        .progresst_assetbuildings {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $assetbuildingscen ?>;
        }
        .progress-assetbuildings {
            background: linear-gradient(to left, #8ed2ff, #118adb);
            box-shadow: 0 3px 3px -5px #8ed2ff, 0 2px 5px #d6adf1;
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
        .progresst_hospital {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: "102";
        }
        .progress-hospital {
            background: linear-gradient(to left, #f17a7a, #df1313);
            box-shadow: 0 3px 3px -5px #f17a7a, 0 2px 5px #d6adf1;
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



        .progresst_perchaungmai {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perchaingmaicen ?>;
        }
        .progress-perchaungmai {
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
        .progresst_perlamphoon {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perlamphooncen ?>;
        }
        .progress-perlamphoon {
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
        .progresst_perlampang {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perlampangcen ?>;
        }
        .progress-perlampang {
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
        .progresst_perprae {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perpraecen ?>;
        }
        .progress-perprae {
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
        .progresst_pernan {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $pernancen ?>;
        }
        .progress-pernan {
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
        .progresst_perpayoua {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perpayouacen ?>;
        }
        .progress-perpayoua {
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
        .progresst_perchaingray {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $perchaingraycen ?>;
        }
        .progress-perchaingray {
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
        .progresst_permaehongson {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $permaehongsoncen ?>;
        }
        .progress-permaehongson {
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

        .progresst_chaingmai {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $As_chaingmaicen ?>;
        }
        .progress-chaingmai {
            background: linear-gradient(to left, #f8cf84, #f72a0f);
            box-shadow: 0 3px 3px -5px #f8cf84, 0 2px 5px #d6adf1;
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
        .progresst_lampoonas {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $As_lamphooncen ?>;
        }
        .progress-lampoonas {
            background: linear-gradient(to left, #f8cf84, #f72a0f);
            box-shadow: 0 3px 3px -5px #f8cf84, 0 2px 5px #d6adf1;
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
        .progresst_praeas {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $As_praecen ?>;
        }
        .progress-praeas {
            background: linear-gradient(to left, #f8cf84, #f72a0f);
            box-shadow: 0 3px 3px -5px #f8cf84, 0 2px 5px #d6adf1;
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
        .progresst_payouaas {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $As_payouacen ?>;
        }
        .progress-payouaas {
            background: linear-gradient(to left, #f8cf84, #f72a0f);
            box-shadow: 0 3px 3px -5px #f8cf84, 0 2px 5px #d6adf1;
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
        .progresst_maehongsonas {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $As_maehongsoncen ?>;
        }
        .progress-maehongsonas {
            background: linear-gradient(to left, #f8cf84, #f72a0f);
            box-shadow: 0 3px 3px -5px #f8cf84, 0 2px 5px #d6adf1;
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
        .progresst_lampangss {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $As_chaingmaicen ?>;
        }
        .progress-lampangss {
            background: linear-gradient(to left, #f8cf84, #f72a0f);
            box-shadow: 0 3px 3px -5px #f8cf84, 0 2px 5px #d6adf1;
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

        .progresst_nans {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $As_chaingraycen ?>;
        }
        .progress-nans {
            background: linear-gradient(to left, #f8cf84, #f72a0f);
            box-shadow: 0 3px 3px -5px #f8cf84, 0 2px 5px #d6adf1;
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
        
        .progresst_chaingrayss {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $As_chaingraycen ?>;
        }
        .progress-chaingrayss {
            background: linear-gradient(to left, #f8cf84, #f72a0f);
            box-shadow: 0 3px 3px -5px #f8cf84, 0 2px 5px #d6adf1;
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


        .progresslamphoon {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $buil_lamphoon ?>;
            /* width: 700px; */
        }
        .progress-lamphoon {
            background: linear-gradient(to left, #8ed2ff, #118adb);
            box-shadow: 0 3px 3px -5px #8ed2ff, 0 2px 5px #d6adf1;
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
        .progresst_bc {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $buil_chaingmaicen ?>; */
            /* width: 700px; */
        } 
        .progress-bc {
            background: linear-gradient(to left, #8ed2ff, #118adb);
            box-shadow: 0 3px 3px -5px #8ed2ff, 0 2px 5px #d6adf1;
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
        .progresst_lp {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $buil_lamphooncen ?>; */
            /* width: 700px; */
        } 
        .progress-lp {
            background: linear-gradient(to left, #8ed2ff, #118adb);
            box-shadow: 0 3px 3px -5px #8ed2ff, 0 2px 5px #d6adf1;
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
        .progresst_lap {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $buil_lampangcen ?>; */
            /* width: 700px; */
        } 
        .progress-lap {
            background: linear-gradient(to left, #8ed2ff, #118adb);
            box-shadow: 0 3px 3px -5px #8ed2ff, 0 2px 5px #d6adf1;
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
        .progresst_laprae {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $buil_praegcen ?>; */
            /* width: 700px; */
        } 
        .progress-laprae {
            background: linear-gradient(to left, #8ed2ff, #118adb);
            box-shadow: 0 3px 3px -5px #8ed2ff, 0 2px 5px #d6adf1;
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
         .progresst_nan {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $buil_nangcen ?>;
        }
        .progress-nan {
            background: linear-gradient(to left, #8ed2ff, #118adb);
            box-shadow: 0 3px 3px -5px #8ed2ff, 0 2px 5px #d6adf1;
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
        .progresst_payoa {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $buil_payouacen ?>;
        }
        .progress-payoa {
            background: linear-gradient(to left, #8ed2ff, #118adb);
            box-shadow: 0 3px 3px -5px #8ed2ff, 0 2px 5px #d6adf1;
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
        .progresst_chaingray {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $buil_chaingraycen ?>;
        }
        .progress-chaingray {
            background: linear-gradient(to left, #8ed2ff, #118adb);
            box-shadow: 0 3px 3px -5px #8ed2ff, 0 2px 5px #d6adf1;
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
        .progresst_maehongson {
            background-color: #d8d8d8;
            border-radius: 20px;
            position: relative;
            margin: 15px 5;
            height: 15px;
            width: <?= $buil_maehongsoncen ?>;
        }
        .progress-maehongson {
            background: linear-gradient(to left, #8ed2ff, #118adb);
            box-shadow: 0 3px 3px -5px #8ed2ff, 0 2px 5px #d6adf1;
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
  
  
    @include('backend/navbar')
   


    @include('backend/sidebar')
 


    @include('backend/dashboard/content')
 

    @include('backend/footerB')

    {{-- <script src="{{ asset('app-assets/js/scripts/charts/chartjs/bar/progress.js') }}"></script> --}}
    <script src="{{ asset('app-assets/js/progress.js') }}"></script>

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
            hoverBackgroundColor: "rgba(255, 0, 102)",
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
            hoverBackgroundColor: "rgba(0, 191, 202)",
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
            backgroundColor: "#118adb",
            hoverBackgroundColor: "rgba(246,82,45,.9)",
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