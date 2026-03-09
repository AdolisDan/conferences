@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.admin_subsystem') }}</div>

                <div class="card-body">
                    <ul>
                        <li><a href="{{ route('admin.users.index') }}">{{ __('messages.user_management') }}</a></li>
                        <li><a href="{{ route('admin.conferences.index') }}">{{ __('messages.conference_management') }}</a></li>
                    </ul>
                    <a href="{{ url('/') }}" class="btn btn-secondary">{{ __('messages.back_to_main') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
