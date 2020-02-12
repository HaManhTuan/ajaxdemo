<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/datatables.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable();
		} );
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 align="center">DATA TABLE</h1>
			<div class="col-md-12">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
				        <thead>
				            <tr>
				            	<th>STT</th>
				                <th>Name</th>
				                <th>Position</th>
				                <th>Office</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>1</td>
				                <td>Tiger Nixon</td>
				                <td>System Architect</td>
				                <td>Edinburgh</td>
				            </tr>
				            <tr>
				                <td>2</td>
				                <td>Garrett Winters</td>
				                <td>Accountant</td>
				                <td>Tokyo</td>
				            </tr>
				        </tbody>
	   		 	</table>
			</div>
		</div>
	</div>
</body>
</html>