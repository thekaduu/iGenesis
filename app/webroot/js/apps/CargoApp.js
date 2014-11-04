var app = angular.module('CargoApp',[]);
var debug;
app.controller('CadastrarController',function($scope,$http){
	$http.get('index').success(function(dados){
		$scope.cargos = dados;
	});

	/**
	*	Carrega os dados de um cargo para os inputs de Editar
	*	@author Carlos Eduardo Lima <carloseduardolbraz@gmail.com.br>
	*	@return void
	*/
	$scope.carrega = function(indice){		
		$scope.Cargo = $scope.cargos[indice].Cargo;		
	}
	
	
});