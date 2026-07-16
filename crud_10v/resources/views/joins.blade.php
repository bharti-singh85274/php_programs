<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1> joins</h1>


<table>
	<thead>
		<tr>
			<td>SNO</td>
			<td>Company</td>
			<td> Employees</td>
			<td>Designation</td>
		</tr>

		@foreach($data as $k=>$val)

        <tr>
        	<td>{{$k+1}}</td>
        	<td>{{$val->company_name}}</td>
        	<td>{{$val->name}}</td>
        	<td>{{$val->designation}}</td>
        </tr>
		@endforeach

	</thead>
</table>


</body>
</html>