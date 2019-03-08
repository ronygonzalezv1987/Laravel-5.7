@extends('admin.template.main')
@section('title','Category list')

@section('content')

<a href="{{ route('categories.create') }} " class="btn btn-info">Register new category</a>
<table class="table table-striped table-bordered  ">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
     </thead>
    <tbody>
         <tr>
             @foreach ($categories as $category )
             <td>{{$category->id}}</td>
             <td>{{$category->name}}</td>


             <td>
               <a  class="btn btn-warning" href="{{route('categories.edit',$category->id)}}" >
                   <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                </a>
               <a  class="btn btn-danger" href="{{route('categories.destroy',$category->id)}}" onclick="return confirm('Are you sure you want delete the categories?')">
                    <span class="glyphicon glyphicon-remove-circle"  aria-hidden="true"></span>
                </a>
             </td>

           </tr>

         @endforeach
    </tbody>
</table>
{!! $categories->render()!!}

@endsection
