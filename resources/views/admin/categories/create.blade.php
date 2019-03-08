@extends('admin.template.main')
@section('title','Add Categories')
@section('content')

  {!!Form::open(['route'=>'categories.store','method'=>'POST'])!!}
  <table  border="1px solid black" width="30%" >
   <tr>
       <td>
       	 <div class="form-group">
	       {!! Form::label('name','Name') !!}
    	   {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Categories name','required']) !!}

          </div>
      </td>

   </tr>


   <tr>
       <td>

          <div class="form-group">

    	   {!! Form::submit('Register',['class'=>'btn btn-primary']) !!}

          </div>
        </td>

   </tr>
 </table>



    {!!Form::close()!!}
@endsection
