<html>
	<head>
		<link media="all" type="text/css" rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<br/>
		<br/>
		<div class="row">
			<div class="col-md-offset-1 col-md-5">
				<table class="table tasks">
					<tr>
						<th> Status </th>
						<th> Task </th>
						<th> Action </th>
					</tr>
					<tr class="empty">
						<td colspan="3"><i> <center> Nothing to show </center> </i> </td>
					</tr>
				</table>
			</div>
			<div class="col-md-5">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"> New Task </h3>
					</div>
					<div class="panel-body">
						<form class="form new-task">
							<div class="row">
								<div class="col-md-9">
									<input type="text" class="form-control">
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
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/lunch-jquery.js"></script>
	</body>
</html>