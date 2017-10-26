var entradaApp = angular.module("entradaApp",[],function($interpolateProvider){
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});
entradaApp.controller('EntradaController',['$scope',function($scope){
}]);