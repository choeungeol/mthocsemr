<!DOCTYPE html>
<html ng-app="Mth.Admin">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MediQCELL관리</title>

    <link href="vendor/assets/common/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="vendor/assets/common/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="vendor/assets/common/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="vendor/assets/common/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="vendor/assets/common/img/favicon.png" rel="icon" type="image/png">
    <link href="favicon.ico" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for < IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Vendors Styles -->
    <!-- v1.0.0 -->
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/jscrollpane/style/jquery.jscrollpane.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/cleanhtmlaudioplayer/src/player.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/cleanhtmlvideoplayer/src/player.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/bootstrap-sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/summernote/dist/summernote.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/ionrangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/datatables/media/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/c3/c3.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/chartist/dist/chartist.min.css">
    <!-- v.1.4.0 -->
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/nprogress/nprogress.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/vendors/jquery-steps/demo/css/jquery.steps.css">

    <!-- Clean UI Styles -->
    <link rel="stylesheet" type="text/css" href="vendor/assets/common/css/source/main.css">


    <!--
    <link rel="stylesheet" type="text/css" href="css/common.css">
    -->

    <!-- Other Styles -->
    <link rel="stylesheet" href="bower_components/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" href="bower_components/angular-toastr/dist/angular-toastr.min.css">

    <!-- Vendors Scripts -->
    <!-- v1.0.0 -->
    <script src="vendor/assets/vendors/jquery/jquery.min.js"></script>
    <script src="vendor/assets/vendors/tether/dist/js/tether.min.js"></script>
    <script src="vendor/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendor/assets/vendors/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="vendor/assets/vendors/jscrollpane/script/jquery.jscrollpane.min.js"></script>
    <script src="vendor/assets/vendors/spin.js/spin.js"></script>
    <script src="vendor/assets/vendors/ladda/dist/ladda.min.js"></script>
    <script src="vendor/assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="vendor/assets/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script src="vendor/assets/vendors/jquery-typeahead/dist/jquery.typeahead.min.js"></script>
    <script src="vendor/assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="vendor/assets/vendors/autosize/dist/autosize.min.js"></script>
    <script src="vendor/assets/vendors/bootstrap-show-password/bootstrap-show-password.min.js"></script>
    <script src="vendor/assets/vendors/moment/min/moment.min.js"></script>
    <script src="vendor/assets/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="vendor/assets/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="vendor/assets/vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js"></script>
    <script src="vendor/assets/vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js"></script>
    <script src="vendor/assets/vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
    <script src="vendor/assets/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="vendor/assets/vendors/summernote/dist/summernote.min.js"></script>
    <script src="vendor/assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="vendor/assets/vendors/ionrangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="vendor/assets/vendors/nestable/jquery.nestable.js"></script>
    <script src="vendor/assets/vendors/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="vendor/assets/vendors/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendor/assets/vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js"></script>
    <script src="vendor/assets/vendors/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="vendor/assets/vendors/editable-table/mindmup-editabletable.js"></script>
    <script src="vendor/assets/vendors/d3/d3.min.js"></script>
    <script src="vendor/assets/vendors/c3/c3.min.js"></script>
    <script src="vendor/assets/vendors/chartist/dist/chartist.min.js"></script>
    <script src="vendor/assets/vendors/peity/jquery.peity.min.js"></script>

    <!-- v1.0.1 -->
    <script src="vendor/assets/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- v1.1.1 -->
    <script src="vendor/assets/vendors/gsap/src/minified/TweenMax.min.js"></script>
    <script src="vendor/assets/vendors/hackertyper/hackertyper.js"></script>
    <script src="vendor/assets/vendors/jquery-countTo/jquery.countTo.js"></script>
    <!-- v1.4.0 -->
    <script src="vendor/assets/vendors/nprogress/nprogress.js"></script>
    <script src="vendor/assets/vendors/jquery-steps/build/jquery.steps.min.js"></script>

    <!-- Clean UI Scripts -->
    <script src="vendor/assets/common/js/common.js"></script>
    <script src="vendor/assets/common/js/demo.temp.js"></script>

    <!-- Scripts Other -->
</head>
<body class="theme-default" ng-controller="MainController as main">