@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Konferencijos informacija') }}</div>

                <div class="card-body">
                    <h5>Pavadinimas: Pavyzdinė konferencija</h5>
                    <p>Aprašymas: ...</p>
                    <p>Lektoriai: ...</p>
                    <p>Data: 2023-12-01</p>
                    <p>Laikas: 10:00</p>
                    <p>Adresas: ...</p>

                    <a href="{{ route('admin.conferences.index') }}" class="btn btn-secondary">Grįžti</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
