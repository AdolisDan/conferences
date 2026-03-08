@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Sistemos naudotojai') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Vardas</th>
                                <th>El. paštas</th>
                                <th>Veiksmai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop through users here -->
                            <tr>
                                <td>1</td>
                                <td>Vardenis Pavardenis</td>
                                <td>email@example.com</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', 1) }}" class="btn btn-primary btn-sm">Redaguoti</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('admin.index') }}" class="btn btn-secondary">Grįžti</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
