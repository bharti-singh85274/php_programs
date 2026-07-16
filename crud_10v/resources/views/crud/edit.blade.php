<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1> Edit Data </h1>

<form method="post" action="{{url('update/'.$edit->id)}}" enctype="multipart/form-data">
	@csrf
 
	<input type="text" name="name" value="{{$edit->name}}" placeholder="name"><br><br>
	<input type="text" name="email" value="{{$edit->email}}" placeholder="email"> <br><br>
	<input type="text" name="mobile" value="{{$edit->mobile}}" placeholder="mobile"><br><br>
	<input type="file" name="image"> <br><br>

	<button type="submit">submit</button>
</form>




</body>
</html>