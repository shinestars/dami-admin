'use strict';

angular.module('myApp.view1', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/view1', {
    templateUrl: 'view1/view1.html',
    controller: 'View1Ctrl'
  });
}])

.controller('View1Ctrl', ['$http',function($http) {
    $http.get('http://localhost/phpstudy/dami/get-users.php')
        .then(function (resp) {
            console.log(resp);
        })
}]);