@extends('admin.template.main')
@section('title','Users')

@section('content')

{!!Form::open(['route'=>'users.store','method'=>'POST'])!!}
  <table  border="1px solid black" width="30%" >
   <tr>
       <td>
       	 <div class="form-group">
	       {!! Form::label('name','Name') !!}
    	   {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Full name','required']) !!}

          </div>
      </td>

   </tr>

   <tr>
       <td>

          <div class="form-group">
	       {!! Form::label('email','email') !!}
    	   {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com ','required']) !!}

          </div>
        </td>

   </tr>
      <tr>
       <td>

          <div class="form-group">
	       {!! Form::label('password','password') !!}
    	   {!! Form::text('password',null,['class'=>'form-control','placeholder'=>'******* ','required']) !!}

          </div>
        </td>

   </tr>
   <tr>
       <td>

          <div class="form-group">
	       {!! Form::label('type','type') !!}
	       {!! Form::select('type',
	       [''=>'Select a level','member'=>'member','admin'=>'administrator'
	       ],
	       null,
	       ['class'=>'form-control']
	       ) !!}

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
