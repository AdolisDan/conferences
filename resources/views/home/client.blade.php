@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.client_subsystem') }}</div>

                <div class="card-body">
                    <p>{{ __('messages.conference_list_placeholder') }}</p>
                    <a href="{{ url('/') }}" class="btn btn-secondary">{{ __('messages.back_to_main') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection