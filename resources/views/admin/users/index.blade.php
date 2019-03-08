@extends('admin.template.main')
@section('title','Users list')

@section('content')

<a href="{{ route('users.create') }} " class="btn btn-info">Register new user</a>
<table class="table table-striped table-bordered  ">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Mail</th>
        <th>Type</th>
        <th>Action</th>
    </thead>
    <tbody>
         <tr>
             @foreach ($users as $user )
             <td>{{$user->id}}</td>
             <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
             <td>
                 @if ($user->type=="admin")
                     <span class="label label-danger">{{$user->type}}</span>
                 @else
                   <span class="label label-primary">{{$user->type}}</span>
                 @endif
             </td>
             <td>
               <a  class="btn btn-warning" href="{{route('users.edit',$user->id)}}" >
                   <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                </a>
               <a  class="btn btn-danger" href="{{route('users.destroy',$user->id)}}" onclick="return confirm('Are you sure you want delete the user?')">
                    <span class="glyphicon glyphicon-remove-circle"  aria-hidden="true"></span>
                </a>
             </td>

           </tr>

         @endforeach
    </tbody>
</table>
{!! $users->render()!!}

@endsection
