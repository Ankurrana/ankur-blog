@extends('layout.default')

@section('content')
		{{ Form::open() }}
		{{ Form::label('name','Name') }} <br>
		{{ Form::text('name') }} <br>
		{{ Form::label('data','Data') }} <br>
		{{ Form::textarea('data') }} <br>
		{{ Form::submit('Publish') }}
		{{ Form::close() }}


@stop