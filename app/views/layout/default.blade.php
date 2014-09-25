<!DOCTYPE html>
<html>
<head>
	<title>MY BLOG</title>
</head>
	
	
	{{ HTML::style('bootstrap/css/bootstrap.min.css')}}
	{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
	{{ HTML::style('css/mainstyle.css'); }}
	

<body>
	<div class="content">
		<h3>WELCOME TO MY BLOG </h3>


		<ul class="nav nav-tabs" role="tablist">
				<li>{{ link_to_route('home','Home') }}</li>
				<li>{{ link_to_route('createpost','NewPost') }}  </li>

		</ul>
		
		@yield('content')
	</div>
</body>
</html>