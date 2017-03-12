var MinhaLista =  angular.module('MinhaLista', []);

MinhaLista.controller('TarefasController', function($scope) {

	$scope.tarefas = [

		{
			'nome': 'Controler fluxo curso',
			'prioridade': 'baixa'
		},

		{
			'nome': 'Gerenciamento financeiro',
			'prioridade': 'baixa'
		},

		{
			'nome': 'Texto email - fluxo',
			'prioridade': 'alta'
		}

	];

	$scope.add = function()
	{
		
		var tarefa = {
			'nome': $scope.nome,
			'prioridade' : $scope.prioridade
		}
		

		$scope.tarefas.push(tarefa);
		
		$scope.nome = '';
		$scope.prioridade = '';
	}

	$scope.delete = function(i)
	{

		$scope.tarefas.splice( i, 1);
		
	}
});

var ContagemController =  angular.module('MinhaLista');

ContagemController.controller('ContagemController', function($scope) {

	$scope.total = 0;


	$scope.somar = function()
	{

		$scope.total++;

	}

	$scope.diminuir = function()
	{

		$scope.total--;

	}

});