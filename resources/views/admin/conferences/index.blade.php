@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('messages.conferences') }}
                    <a href="{{ route('admin.conferences.create') }}" class="btn btn-primary btn-sm">{{ __('messages.create_new') }}</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ __('messages.title') }}</th>
                                <th>{{ __('messages.date') }}</th>
                                <th>{{ __('messages.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ __('messages.example_conference') }}</td>
                                <td>2023-12-01</td>
                                <td>
                                    <a href="{{ route('admin.conferences.show', 1) }}" class="btn btn-info btn-sm">{{ __('messages.view') }}</a>
                                    <a href="{{ route('admin.conferences.edit', 1) }}" class="btn btn-warning btn-sm">{{ __('messages.edit') }}</a>
                                    <form action="{{ route('admin.conferences.destroy', 1) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('{{ __('messages.are_you_sure') }}')">{{ __('messages.delete') }}</button>
                                    </form>
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
