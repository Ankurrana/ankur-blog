@extends('layout.default')

@section('content')
	<ul>
	@foreach ( $data as $d)
			

			<li>	{{ link_to_action('HomeController@show',$d->name,array($d->id)) }} <br>
			</li>

	@endforeach

@stop