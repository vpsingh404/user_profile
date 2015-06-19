var app = angular.module('myApp', []);

app.controller('customersCtrl', function($scope, $http) {
  $http.get('php/list.php').
        success(function(data) {
            // here the data from the api is assigned to a variable named users
            $scope.users = data;
        });
});