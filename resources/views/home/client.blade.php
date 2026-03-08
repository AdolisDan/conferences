@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kliento posistemis') }}</div>

                <div class="card-body">
                    <p>Čia bus atvaizduojamas konferencijų sąrašas.</p>
                    <a href="{{ url('/') }}" class="btn btn-secondary">Grįžti į pagrindinį</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection