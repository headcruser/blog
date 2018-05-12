
var entradaApp = angular.module("entradaApp",[],
    function($interpolateProvider)
    {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    });
entradaApp.controller('EntradaController',['$scope','$http',
    function($scope,$http)
    {
        $scope.entradas=[];
        $http.get("http://192.168.86.129/blog/entrada/listar").then(function($request){
            $scope.entradas=$request.data;
        });

}]);