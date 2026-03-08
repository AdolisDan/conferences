@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sistemos administratoriaus posistemis') }}</div>

                <div class="card-body">
                    <ul>
                        <li><a href="{{ route('admin.users.index') }}">Sistemos naudotojų duomenų valdymas</a></li>
                        <li><a href="{{ route('admin.conferences.index') }}">Konferencijų valdymas</a></li>
                    </ul>
                    <a href="{{ url('/') }}" class="btn btn-secondary">Grįžti į pagrindinį</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
