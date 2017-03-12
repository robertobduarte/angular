<!DOCTYPE html>
<html lang="pt-br" ng-app="MinhaLista">
<head>
	<meta charset="UTF-8">
	<title>Angulas JS</title>
	
	<link rel="stylesheet" href="css/style.css">

	<script src="js/angular.js"></script>
	<script src="js/controller.js"></script>
</head>
<body>

<div ng-controller="TarefasController">
	
	<input type="text" ng-model="busca">
	<ul>
		<li ng-repeat="(key, tarefa) in tarefas | filter: busca | orderBy: 'nome': false | limitTo:20"> 
			=> {{tarefa.nome}} - {{tarefa.prioridade}}
			<a href="" ng-click="delete(key)">Excluir</a>
		</li>		
	</ul>


	Nome: <input type="text" ng-model="nome"><br>
	Prioridade: <input type="text" ng-model="prioridade"><br>
	<button ng-click="add()">Incluir</button>

</div>
<div ng-controller="ContagemController">
	
	<button ng-click="somar()"> + </button>
	<button ng-click="diminuir()"> - </button>
	<span>Número de cliques: {{total}}</span>

</div>




</body>
</html>