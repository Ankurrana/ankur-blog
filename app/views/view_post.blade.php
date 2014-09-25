@extends('layout.default')

@section('content')
	<h3> {{ $name }} </h3>
	<div class="fluid-container">
		<div class="row">
		
			<div class="col-md-8">
				<p>{{ $data }}</p>
			</div>
		</div>
 	</div>
@stop