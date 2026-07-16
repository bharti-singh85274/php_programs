<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1> 	Add Data </h1>

	<div>
		@if(session('msg'))
        <p style="color: green;">{{session('msg')}}</p>
		@endif
	</div>

<form method="post" action="add" enctype="multipart/form-data">
	@csrf

	<input type="text" name="name" placeholder="name">
    <span style="color: red;">
    	@error('name')
        {{$message}}
    	@enderror
    </span>
	<br><br>

	<input type="text" name="email" placeholder="email"> 
	<span style="color: red;">
    	@error('email')
        {{$message}}
    	@enderror
    </span><br><br>
	<input type="text" name="mobile" placeholder="mobile">
	<span style="color: red;">
    	@error('mobile')
        {{$message}}
    	@enderror
    </span><br><br>
    <input type="file" name="images"><br><br>

	<button type="submit">submit</button>
</form>


<br>
<table>
	<thead>
		<tr>
			<td> sno </td>
			<td> name</td>
			<td> email</td>
			<td> mobile</td>
			<td> images </td>
			<td> edit</td>
			<td> delete </td>

		</tr>

		<tr>
			@foreach($data as $val)
            <td>{{$val->id}}</td>
             <td>{{$val->name}}</td>
	    	 <td>{{$val->email}}</td>
		    <td>{{$val->mobile}}</td>
		    <td> <img src="{{asset('uploads/'.$val->images)}}" height="100px" width="100px"> </td>
		    <td><a href="{{url('edit/'.$val->id)}}">edit </a></td>
		    <td><a href="{{url('delete/'.$val->id)}}">delete </a></td>
		</tr>
			@endforeach
	</thead>
</table>


</body>
</html>