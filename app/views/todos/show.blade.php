@extends('layouts.main')
@section('content')
	<div class="small-12 columns">
		<h1>{{{ $list->name }}}</h1>
		@foreach ($items as $item)
			<h4>{{{ $item->content }}}</h4>
		@endforeach
		<h4> {{ link_to_route('todos.index', 'Back') }} </h4>
	</div>
@stop