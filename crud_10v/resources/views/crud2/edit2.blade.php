<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Edit two</h1>


    @session('updated')
    <span style="color: green"> {{ session('updated')}}</span>
    @endsession
	

	<form method="post" action="{{url('update_two/'.$data->id)}}" enctype="multipart/form-data">
		@csrf

		<input type="text" name="name" value="{{$data->name}}" placeholder="name"><br><br>

		<input type="email" name="email" value="{{$data->email}}" placeholder="email"><br><br>

		<input type="mobile" name="mobile" value="{{$data->mobile}}" placeholder="mobile"><br><br>

		<input type="file" name="image"> <br><br>

       <button type="submit">submit</button>

	</form>


</body>
</html>