angular.module('loginApp', []);

angular
    .module('loginApp').controller('loginCtrl', ['$scope', '$http', function ($scope, $http) {

	$scope.loginBtn = function () {

			$http({
			        method: 'POST',
			        url: 'php/login.php',
			        data: {
			        	'username': $scope.cremuser,
			            'password': $scope.crempass
			        },
			        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
			    }).then(function(response){
			    	console.log(response);
			    	// if (response.data == '1'){
			    	// 	location.assign("mainpage.php");
			    	// } else 
			    	if (response.data == '0'){
			    		alert('Username and Password Doesn\'t Exist!');
			    	}
			    	else{
			    		sessionStorage.username = response.data;
			    		//sessionStorage.setItem("username", response.data);
			    		//alert(response.data);
			    		location.assign("mainpage.php");

			    	}
			    	
		    });
					
	}

	$scope.enterKeyCode = function () {
		if (event.which == 13) {
			$scope.loginBtn();
		}
	}

}]);