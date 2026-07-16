<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1> CRUD 2</h1>

	@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


	@if(session('delete'))
    <span style="color: red"> {{ session('delete')}}</span>
    @endsession
	

	<form method="post" action="add_two" enctype="multipart/form-data">
		@csrf

		<input type="text" name="name" placeholder="name"><br><br>

		<input type="email" name="email" placeholder="email"><br><br>

		<input type="mobile" name="mobile" placeholder="mobile"><br><br>

		<input type="file" name="image"> <br><br>

       <button type="submit">submit</button>

	</form>

<br><br>


	<table>
		<tr>
			<td> SNO </td>
			<td> Name</td>
			<td> Email</td>
			<td> Mobile</td>
			<td> Images</td>
			<td> Edit</td>
			<td> Delete</td>
		</tr>

		
			@foreach($data as $k=>$val)
            <tr>
            <td> {{$k+1}}</td>
            <td> {{$val->name}}</td>
            <td> {{$val->email}}</td>
            <td>{{$val->mobile}}</td>
            <td> <img src="{{asset('uploads/'.$val->images)}}" height="50px;" width="50px">  </td>
            <td> <a href="{{url('edit_two/'.$val->id)}}"> Edit </a> </td>
            <td> <a href="{{'delete_two/'.$val->id}}"> Delete</a> </td>
            </tr>
			@endforeach
		
	</table>

</body>
</html>