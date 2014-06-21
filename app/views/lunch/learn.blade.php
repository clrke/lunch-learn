<html ng-app="tasksApp">
	<head>
		{{ HTML::style('css/bootstrap.css')}}
	</head>
	<body ng-controller="TasksCtrl">
		<br/>
		<br/>
		<div class="row">
			<div class="col-md-offset-1 col-md-5">
				<table class="table">
					<tr>
						<th> Status </th>
						<th> Task </th>
						<th> Action </th>
					</tr>
					<tr ng-hide="tasks.length">
						<td colspan="3"><i> <center> Nothing to show </center> </i> </td>
					</tr>
					<tr ng-repeat="task in tasks">
						<td> </td>
						<td> <% task %>  </td>
						<td> <button ng-click="deleteTask(task)" class="btn btn-danger"> Delete </button> </td>
					</tr>
				</table>
			</div>
			<div class="col-md-5">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"> New Task </h3>
					</div>
					<div class="panel-body">
						<form class="form new-task" ng-submit="addTask()">
							<div class="row">
								<div class="col-md-9">
									<input type="text" class="form-control" ng-model="newTask">
									<% newTask %>
								</div>
								<div class="col-md-3">
									<button type="submit" class="btn btn-primary"> Add </button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		{{ HTML::script('js/underscore.min.js')}}
		{{ HTML::script('js/angular.min.js') }}
		{{ HTML::script('js/lunch-angular.js')}}

	</body>
</html>