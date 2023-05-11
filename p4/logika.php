<html>
<head>
	<title>
	Operator Logika	
	</title>
	<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/css/bootstrap.min.css">
</head>
<body>
	<h1> Logika AND</h1>
	<table class = "table table-hover table-bordered">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</tfoot>

		<tbody>
			<tr>
				<td>TRUE</td>
				<td>TRUE</td>
				<td><?=TRUE && TRUE ?></td>
			</tr>

			<tr>
				<td>TRUE</td>
				<td>FALSE>
				<td><?=TRUE && FALSE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>TRUE</td>
				<td><?=FALSE && TRUE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>FALSE</td>
				<td><?=FALSE && FALSE ?></td>
			</tr>
			</tbody>
		 </table>

		 <h1> Logika OR</h1>
	<table class = "table table-hover table-bordered">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</tfoot>

		<tbody>
			<tr>
				<td>TRUE</td>
				<td>TRUE</td>
				<td><?=TRUE || TRUE ?></td>
			</tr>

			<tr>
				<td>TRUE</td>
				<td>FALSE</td>
				<td><?=TRUE || FALSE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>TRUE</td>
				<td><?=FALSE || TRUE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>FALSE</td>
				<td><?=FALSE || FALSE ?></td>
			</tr>
			</tbody>
		 </table>
		 <h1> Logika XOR</h1>
	<table class = "table table-hover table-bordered">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</tfoot>

		<tbody>
			<tr>
				<td>TRUE</td>
				<td>TRUE</td>
				<td><?=TRUE XOR TRUE ?></td>
			</tr>

			<tr>
				<td>TRUE</td>
				<td>FALSE</td>
				<td><?=TRUE XOR FALSE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>TRUE</td>
				<td><?=FALSE XOR TRUE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>FALSE</td>
				<td><?=FALSE XOR FALSE ?></td>
			</tr>
			</tbody>
		 </table>

</body>
</html>

