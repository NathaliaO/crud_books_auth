@extends('main')

@section('content')

<div class="card">
	<div class="card-header">Dashboard</div>
	<div class="card-body">
		
		You are Login in Book Store.

		<a href="{{ route('register_book') }}">New Book</a>

		@include('list')
	</div>
</div>

@endsection('content')