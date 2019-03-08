@extends('admin.template.main')
@section('title','Edit User '.$user->name)

@section('content')

{!!Form::open(['route'=>['users.update',$user],'method'=>'PUT'])!!}
  <table  border="1px solid black" width="30%" >
   <tr>
       <td>
       	 <div class="form-group">
	       {!! Form::label('name','Name') !!}
    	   {!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Full name','required']) !!}

          </div>
      </td>

   </tr>

   <tr>
       <td>

          <div class="form-group">
	       {!! Form::label('email','email') !!}
    	   {!! Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'example@gmail.com ','required']) !!}

          </div>
        </td>


   <tr>
       <td>

          <div class="form-group">
	       {!! Form::label('type','type') !!}
	       {!! Form::select('type',
	       [''=>'Select a level','member'=>'member','admin'=>'administrator'
	       ],
	       $user->type,
	       ['class'=>'form-control']
	       ) !!}

          </div>
        </td>

   </tr>

   <tr>
       <td>

          <div class="form-group">

    	   {!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}

          </div>
        </td>

   </tr>
</table>

<div class="text-center">
      {!! $users->render()!!}
</div>

    {!!Form::close()!!}
@endsection
