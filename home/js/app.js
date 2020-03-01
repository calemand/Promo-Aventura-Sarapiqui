var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

  $http.get("../api/index.php/categorias")
  .then(function(response) {
    $scope.categorias = response.data;
  });
  $http.get("../api/index.php/empresa")
  .then(function(response) {
    $scope.empresa_act = response.data[0];
    $scope.empresas = response.data;
    $scope.empresas.shift();
  });
});