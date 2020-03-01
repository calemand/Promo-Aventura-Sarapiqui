var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

  $http.get("../api/index.php/categorias")
  .then(function(response) {
    $scope.categorias = response.data;
  });
  $http.get("../api/index.php/empresa")
  .then(function(response) {

    $scope.empresas = response.data;

  });
});