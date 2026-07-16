<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<h1> Inner Join</h1>

	<table>
		<tr>
			<td> Id</td>
			<td> Employee</td>
			<td> Company</td>
		</tr>


		@foreach($data as $k=>$val)
        <tr>
        	<td>{{$k+1}}</td>
        	<td>{{$val->name}}</td>
        	<td>{{$val->name}}</td>
        </tr>
		@endforeach

	</table>

</body>
</html>