function getUrlVars() {
  var vars = {};
  var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
      vars[key] = value;
  });
  return vars;
}
var number = getUrlVars()["id"];

var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

  $http.get("../api/index.php/categorias")
  .then(function(response) {
    $scope.categorias = response.data;
  });
  $http.get("../api/index.php/empresa")
  .then(function(response) {


    $scope.empresa = response.data[number];
    console.log(number)

  });
});