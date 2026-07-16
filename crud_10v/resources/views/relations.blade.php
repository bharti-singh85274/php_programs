<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1> Relations</h1>


<table>
<h1> HasOne Relation</h1>
	<thead>
		<tr>
			<td> SNO</td>
			<td> Company</td>
			<td> Employees</td>
		</tr>

		@foreach($hasone as $val)
         <tr>
         	<td>{{$val->id}}</td>
         	<td>{{$val->get_company->name}}</td>
         	<td>{{$val->name}}</td>
         </tr>
		@endforeach
	</thead>
</table>


<table>
<h1> hasMany Relation</h1>
	<thead>
		<tr>
			<td> SNO</td>
			<td> Company</td>
			<td> Employees</td>
		</tr>

		@foreach($hasmany as $val)
         <tr>
         	<td>{{$val->id}}</td>
            <td>{{$val->name}}</td>
         	@foreach($val->getEmployee as $emp)
         	<td>{{$emp->name}}</td>
         	@endforeach
         	
         </tr>
		@endforeach
	</thead>
</table>

<table>
<h1> belongsto Relation</h1>
	<thead>
		<tr>
			<td> SNO</td>
			<td> Company</td>
			<td> Employees</td>
		</tr>

		@foreach($belongsto as $val)
         <tr>
         	<td>{{$val->id}}</td>
         	<td>{{$val->get_companies->name}}</td>
            <td>{{$val->name}}</td>
         	
         </tr>
		@endforeach
	</thead>
</table>

</body>
</html>