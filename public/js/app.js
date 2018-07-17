var app = angular.module('myApp', ['ngRoute']);


app.controller('FormController', ['$scope','$http', function($scope, $http){
	$scope.getFormData = function(){
		var xsrf = $.param(
			{
				name : $scope.name,
				email : $scope.email,
				phone : $scope.phone,
				message : $scope.message,
				f_ref : $scope.f_ref,
				submit : 'submit'
			}
		);
		$http({
        url: 'mail.php',
        method: "POST",
        data: xsrf,
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    });
		$scope.submit_feedback = true;
		console.log(xsrf);
	}
}]);
