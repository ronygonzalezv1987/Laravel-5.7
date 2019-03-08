@extends('admin.template.main')
@section('title','Edit Category '.$category->name)

@section('content')

{!!Form::open(['route'=>['categories.update',$category],'method'=>'PUT'])!!}
  <table  border="1px solid black" width="30%" >
   <tr>
       <td>
       	 <div class="form-group">
	       {!! Form::label('name','Name') !!}
    	   {!! Form::text('name',$category->name,['class'=>'form-control','placeholder'=>'Category name','required']) !!}

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
      {!! $categories->render()!!}
</div>

    {!!Form::close()!!}
@endsection
