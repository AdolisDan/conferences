@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.student_info') }}</div>

                <div class="card-body">
                    <p><b>{{ __('messages.name') }}:</b> {{ __('messages.student_name') }}</p>
                    <p><b>{{ __('messages.surname') }}:</b> {{ __('messages.student_surname') }}</p>
                    <p><b>{{ __('messages.group') }}:</b> {{ __('messages.student_group') }}</p>
                    <hr>
                    <h2>{{ __('messages.role_subsystems') }}</h2>
                    <ul>
                        <li><a href="{{ route('client.index') }}">{{ __('messages.client_subsystem') }}</a></li>
                        <li><a href="{{ route('employee.index') }}">{{ __('messages.employee_subsystem') }}</a></li>
                        <li><a href="{{ route('admin.index') }}">{{ __('messages.admin_subsystem') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection