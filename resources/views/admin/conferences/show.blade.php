@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.conference_info') }}</div>

                <div class="card-body">
                    <h5>{{ __('messages.title') }}: {{ __('messages.example_conference') }}</h5>
                    <p>{{ __('messages.description') }}: ...</p>
                    <p>{{ __('messages.lecturers') }}: ...</p>
                    <p>{{ __('messages.date') }}: 2023-12-01</p>
                    <p>{{ __('messages.time') }}: 10:00</p>
                    <p>{{ __('messages.address') }}: ...</p>

                    <a href="{{ route('admin.conferences.index') }}" class="btn btn-secondary">{{ __('messages.back') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
