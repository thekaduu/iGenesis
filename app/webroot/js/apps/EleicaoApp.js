var app = angular.module('EleicaoApp',[]);
app.controller('CadastrarController',function($scope,$http){
	$scope.cargosAdicionado = [];
	$scope.Eleico = {id: '', ano: '', descricao: ''};
	$scope.EleicaoCargo = {cargo: '', vagas: ''};
	$http.post("/iEleitos/Cargos/ServiceListaCargos").success(function(data){     
		$scope.cargos = data;		
	})
	$scope.adicionar = function(){
		if($scope.EleicaoCargo.vagas == 0 || $scope.EleicaoCargo.cargo.descricao.length == 0 || $scope.EleicaoCargo.cargo.id.toString().length == 0){
			alert("Preencha os Campos");
			return;
		}
		dados = {
			descricao: $scope.EleicaoCargo.cargo.descricao,
			vagas: $scope.EleicaoCargo.vagas,
			cargos_id: $scope.EleicaoCargo.cargo.id
		};

		for(indice in $scope.cargosAdicionado){
			if(dados.cargos_id == $scope.cargosAdicionado[indice].cargos_id){
				return;
			}
		}
		$scope.cargosAdicionado.push(dados);
	}

	$scope.excluir = function(index){
		$scope.cargosAdicionado.splice(index,1);
	}

	$scope.validaCadastro = function(){		
		return $scope.Eleico.descricao.trim().length != 0 && $scope.Eleico.ano.toString().trim().length > 0 && $scope.cargosAdicionado.length > 0;					
	}
	$scope.salvar = function(){		
		$scope.Dados = {
			Eleico: $scope.Eleico,
			EleicoesCargo: $scope.cargosAdicionado
		};			
		
		if($scope.validaCadastro()){
			$http({
              method  : 'POST',
              url     : '/iEleitos/Eleicos/ServiceSalvaEleicao/',
              data    : $.param({
                data: [$scope.Dados],
              }),
              headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
          }).success(function(data){
          	if(parseInt(data) > 0){
          		alert("Eleição cadastrada com sucesso!");
          	}else{
          		alert('Ocorreu um erro e não foi possível salvar a eleição');
          	}
          });
		}else{
			alert("Preencha todos os dados da Eleição");
		}
	}
});