@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Início') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bem-vindo ao WebMoviesAPP!') }}
                </div>
                @foreach($filmesPopulares as $filmePopular)
                    <div>
                        <h1>{{ $filmePopular->title }}</h1>
                        <p>{{ $filmePopular->overview }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
