
<!DOCTYPE html>
<html ng-app="inspinia">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Icon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- Page title set in pageTitle directive -->
    <title page-title></title>

    <!-- Font awesome -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap and Fonts -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Inspinia CSS files -->
    <link href="css/animate.css" rel="stylesheet">
    <link id="loadBefore" href="css/style.css" rel="stylesheet">

    <!-- Cremis CSS -->
    <link rel="stylesheet" type="text/css" href="css/cremis.css">
    <link rel="stylesheet" type="text/css" href="css/angular-material.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

    <!-- AM Charts -->
    <script src="amcharts/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="amcharts/amcharts/serial.js" type="text/javascript"></script>


   

    <!-- JQuery Datepicker -->
    <!-- <link href="datepicker/css/jquery.datepick.css" rel="stylesheet"> -->
    <!-- <script type="text/javascript" src="datepicker/js/jquery.plugin.min.js"></script>
    <script type="text/javascript" src="datepicker/js/jquery.datepick.js"></script> -->

</head>

<!-- ControllerAs syntax -->
<!-- Main controller with serveral data used in Inspinia theme on diferent view -->
<body ng-controller="MainCtrl as main" >

<!-- Main view  -->
<div ui-view ng-cloak></div>

<!-- jQuery and Bootstrap -->
<script src="js/jquery/jquery-3.2.1.min.js"></script>
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- Paginathing --> 
<script type="text/javascript" src="js/paginathing.js"></script>

<!-- SWAL --> 
<script type="text/javascript" src="js/sweetalert/sweetalert.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://unpkg.com/promise-polyfill"></script>

<!-- MetsiMenu -->
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- SlimScroll -->
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Peace JS -->
<script src="js/plugins/pace/pace.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>

<!-- Main Angular scripts-->
<script src="js/angular/angular.min.js"></script>
<script src="js/angular/angular-animate.min.js"></script>
<script src="js/angular/angular-aria.min.js"></script>
<script src="js/angular/angular-messages.min.js"></script>
<script src="js/plugins/oclazyload/dist/ocLazyLoad.min.js"></script>
<script src="js/ui-router/angular-ui-router.min.js"></script>
<script src="js/bootstrap/ui-bootstrap-tpls-1.1.2.min.js"></script>

<script src="js/angular/angular-material.min.js"></script>


<!-- Anglar App Script -->
<script src="js/app.js"></script>
<script src="js/config.js"></script>
<script src="js/directives.js"></script>
<script src="js/controllers.js"></script>

</body>
</html>
