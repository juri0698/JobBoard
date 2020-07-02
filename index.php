<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title set in pageTitle directive -->
    <title page-title></title>

    <!-- Font awesome -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap and Fonts -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <!-- jQuery Library -->
    <script src="js/jquery/jquery-3.2.1.min.js"></script>

    <link href="css/cremis.css" rel="stylesheet">

</head>

<body ng-app="loginApp" ng-controller="loginCtrl" class="loginBody">

<div class="wrapper">
    <div class="vcenter">
        <div class="col-sm-4 text-center margin-top-md parentDiv animated bounceIn">

            <div class="col-sm-12 centerItem">
                <br><br>
                <img src="./images/jobBoardPic.jpg" style="height: 200px">
                <br><br>
                <div class="row text-left">
                    <h3 style="text-align: left;">Username</h3>
                </div>

                <div class="row">
                    <input type = "text" placeholder="Enter your username here. . ." class="form-control" ng-model="cremuser" ng-keypress="enterKeyCode()" autofocus>
                </div>

                <div class="row text-left margin-top-md">
                    <h3 style="text-align: left;">Password</h3>
                </div>

                <div class="row">
                    <input type = "password" placeholder="Enter your password here. . ." class="form-control" ng-model="crempass" ng-keypress="enterKeyCode()">
                </div>
                
                <button class="btn col-sm-4 margin-top-lg" ng-click="loginBtn()" id="signup_Button">Sign In</button>
            </div>
        </div>
    </div>
</div>


<!-- jQuery and Bootstrap -->
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>

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
<script src="js/bootstrap/ui-bootstrap-tpls-1.1.2.min.js"></script>


<!-- Anglar App Script -->
<script src="js/login.js"></script>

</body>
</html>
