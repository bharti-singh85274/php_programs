<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
<div class="row">
<div class="col-md-12"><br><br>
	<h4> Webfymedia Technology</h4>

	<a href="" class="btn btn-primary" data-toggle="modal" data-target="#addstudentModal"> Add new image</a>


	 <table class="table table-bordered">
	 	<thead>
	 		<tr>
	 			<th>Id</th>
	 			<th>Name</th>
	 			<th>Email</th>
	 			<th>Phone</th>
	 			<th>Image</th>
	 			<th>Edit</th>
	 			<th>Delete</th> 			
	 		</tr>
	 	</thead>

	 	<tbody>
	 		
	 	</tbody>
	 </table>
	</div>
	</div>	
	</div>





<!-- Modal INSERT -->
<div class="modal fade" id="addstudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <ul class="alert alert-warning" id="saveform_errlist"></ul>
      <form id="AddEmployeeForm" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      Name:<input type="text" name="name" class="form-control"><br>

      Email:<input type="text" name="email" class="form-control"><br>

      Phone:<input type="text" name="mobile" class="form-control"><br>

      Image:<input type="file" name="image" class="form-control"><br>

 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary add_student">Save</button>
      </div>
      </form>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal INSERT END-->


<!-- Modal EDIT -->
<div class="modal fade" id="Editemployeemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

     
      <ul class="alert alert-warning" id="update_errlist"></ul>

      <form id="UpdateEmployeeForm" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}

       <input type="text" name="emp_id" id="emp_id">

      Name:<input type="text" name="name" id="edit_name" class="form-control"><br>

      Email:<input type="text" name="email" id="edit_email" class="form-control"><br>

      Phone:<input type="text" name="mobile" id="edit_mobile" class="form-control"><br>

      Image:<input type="file" name="image" class="form-control"><br>

     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary add_student">UPDATE</button>
      </div>
      </form>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal EDIT END-->



<!-- Modal DELETE -->
<div class="modal fade" id="DeletestudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <ul class="alert alert-warning" id="saveform_errlist"></ul>
      <form id="AddEmployeeForm" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      
      <h4>Are you sure ? you want to delete this data?</h4>
      <input type="text" id="delete_emp_id">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="delete_modal_btn btn btn-primary del_student">Yes Delete</button>
      </div>
     </form>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal DELETE END-->



<script type="text/javascript">


	$.ajaxSetup({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
              });

$(document).ready(function(){
 
 fetch_data();
 function fetch_data(){
   
     $.ajax({

     	type: 'GET',
     	url : 'fetch_three',
        
       success: function(response){

     		 if(response.status == 200){
     		 	 $('tbody').html("");
     		 	 $.each(response.msg, function(key, val){
                 $('tbody').append('<tr>\
                 <td>'+val.id+'</td>\
                 <td>'+val.name+'</td>\
                 <td>'+val.email+'</td>\
                  <td>'+val.mobile+'</td>\
                 <td><img src="uploads/'+val.images+'" height="50px" width="50px"></td>\
                 <td><button type="button" value="'+val.id+'" class="edit"> edit</button></td>\
                 <td><button type="button" value="'+val.id+'" class="delete"> delete</button></td>\
                 </tr>');

     		 	 });
     		 }
     	}
     })

   }
});


$(document).on('click','.delete',function(e){
e.preventDefault();

var id = $(this).val();

$('#DeletestudentModal').modal('show');

var emp_id = $('#delete_emp_id').val(id);

});

$(document).on('click','.del_student',function(e){
e.preventDefault();

//var id = $(this).val();
var emp_id = $('#delete_emp_id').val();

$.ajax({

type: 'DELETE',
url :'delete_three/'+emp_id,

success:function(response){
   
   if(response.status == 200){
   	  alert('data deleted');
   	  $('#DeletestudentModal').modal('hide');

   }else{
   	 $(response.msg);
   }

}

});




});



  $(document).on('submit','#UpdateEmployeeForm',function(e ){
  	e.preventDefault();
  
  var emp_id = $('#emp_id').val();

  var data = new FormData($('#UpdateEmployeeForm')[0]);

  $.ajax({
  
  type: "POST",
  url: "update_three/"+emp_id,
  data: data,
  contentType: false,
  processData: false,

  success:function(response){

  	 if(response.status == 200){
  	 	alert(response.msg);
  	 	$('#Editemployeemodal').modal('hide');

  	 }
  }
 
  });

  
  });


  $(document).on('click','.edit',function(e){
 
  var id = $(this).val();	
  $('#Editemployeemodal').modal('show');
 
  $.ajax({
  
  type: "GET",
  url: "edit_three/"+id,

  success:function(response){

  	 if(response.status == 200){
         
         $('#emp_id').val(response.edit.id);
  	 	 $('#edit_name').val(response.edit.name);
  	 	 $('#edit_email').val(response.edit.email);
  	 	 $('#edit_mobile').val(response.edit.mobile);
  	 }
  }

  });


  });


	
	$(document).on('submit','#AddEmployeeForm',function(e){
    e.preventDefault();

    var data = new FormData($('#AddEmployeeForm')[0]);
    
    $.ajax({

    type: 'POST',
    url: 'add_three',
    data: data,
    datatype: 'json',
    contentType: false,
    processData: false,

    success:function(response){
       
       if(response.status == 200){
       	   alert('data saved');
       	   $('#addstudentModal').modal('hide');
       }
    }

    });
    

	});

</script>



</body>
</html>