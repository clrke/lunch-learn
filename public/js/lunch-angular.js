var tasksApp = angular.module('tasksApp', [], function($interpolateProvider)
{
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

tasksApp.controller('TasksCtrl', ['$scope', function ($scope) {
	$scope.tasks = [];
	$scope.newTask = '';

	$scope.addTask = function() {
		$scope.tasks.push($scope.newTask);
		$scope.newTask='';
	};

	$scope.deleteTask = function(taskToBeDeleted) {
		$scope.tasks = _.filter($scope.tasks, function(task) {
			return task != taskToBeDeleted;
		});
	}
}])