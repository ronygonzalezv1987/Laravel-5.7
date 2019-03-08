<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
</head>
<body>
{{ $variable->title }}
@foreach($variable->tags as $tag)
 {{$tag->name}}
@endforeach
</body>
</html>
