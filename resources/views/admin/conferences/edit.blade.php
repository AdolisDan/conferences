@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.edit_conference') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.conferences.update', 1) }}">
                        @csrf
                        @method('PUT')
                        @include('admin.conferences.form')
                        <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                        <a href="{{ route('admin.conferences.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
