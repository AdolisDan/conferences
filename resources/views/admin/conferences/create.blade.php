@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kurti naują konferenciją') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.conferences.store') }}">
                        @csrf
                        @include('admin.conferences.form')
                        <button type="submit" class="btn btn-primary">Sukurti</button>
                        <a href="{{ route('admin.conferences.index') }}" class="btn btn-secondary">Atšaukti</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
