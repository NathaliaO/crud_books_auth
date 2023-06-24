@extends('main')

@section('content')

<div class="card">
	<div class="card-header">Create Book</div>
	<div class="card-body">
		<form method="POST" action="{{ route('save_book') }}">
            
        @include('form')
            
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a type="button" href="{{ route('dashboard') }}">Voltar</a>
            </div>
        </form>
	</div>
</div>


@endsection('content')
