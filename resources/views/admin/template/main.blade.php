
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title','Default'| 'Welcome to main')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap-4.2.1/css/bootstrap.min.css') }}">
</head>

<body>
 @include('admin.partials.nav')

 <section class="section-admin">
     <div class="panel panel-default">
          <div class="panel-heading">
             <h3 class="panel-title"> @yield('title')</h3>
            </div>

           <div class="panel-body">
              @include('flash::message')
              @include('admin.partials.errors')
              @yield('content')
            </div>
        </div>
 </section>



<script src="{{ asset('plugins/jquery-3.3.1/jquery-3.3.1.min.js')}}" ></script>
<script src="{{ asset('plugins/bootstrap-4.2.1/js/bootstrap.min.js') }}" ></script>
</body>
</html>
