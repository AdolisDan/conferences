@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('messages.system_users') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ __('messages.id') }}</th>
                                <th>{{ __('messages.name') }}</th>
                                <th>{{ __('messages.email') }}</th>
                                <th>{{ __('messages.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop through users here -->
                            <tr>
                                <td>1</td>
                                <td>{{ __('messages.example_user_name') }}</td>
                                <td>email@example.com</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', 1) }}" class="btn btn-primary btn-sm">{{ __('messages.edit') }}</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('admin.index') }}" class="btn btn-secondary">{{ __('messages.back') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
