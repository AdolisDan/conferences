@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Studento informacija') }}</div>

                <div class="card-body">
                    <p><b>Vardas:</b> Adolis</p>
                    <p><b>Pavardė:</b> Daniūnas</p>
                    <p><b>Grupė:</b> PIT-23-NL</p>
                    <hr>
                    <h2>Vaidmenų posistemiai</h2>
                    <ul>
                        <li><a href="{{ route('client.index') }}">Kliento posistemis</a></li>
                        <li><a href="{{ route('employee.index') }}">Darbuotojo posistemis</a></li>
                        <li><a href="{{ route('admin.index') }}">Sistemos administratoriaus posistemis</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection