'use strict';

angular.module('myApp.view1.editUser', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/view1.editUser', {
    templateUrl: 'edit-user/edit-user.html',
    controller: 'EditUserCtrl'
  });
}])

.controller('EditUserCtrl', ['$http',function($http) {
    $http.get('http://localhost/phpstudy/dami/get-users.php')
        .then(function (resp) {
            console.log(resp);
        })
}]);