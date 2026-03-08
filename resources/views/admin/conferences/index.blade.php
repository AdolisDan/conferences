@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('Konferencijos') }}
                    <a href="{{ route('admin.conferences.create') }}" class="btn btn-primary btn-sm">Kurti naują</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Pavadinimas</th>
                                <th>Data</th>
                                <th>Veiksmai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop through conferences here -->
                            <tr>
                                <td>Pavyzdinė konferencija</td>
                                <td>2023-12-01</td>
                                <td>
                                    <a href="{{ route('admin.conferences.show', 1) }}" class="btn btn-info btn-sm">Peržiūrėti</a>
                                    <a href="{{ route('admin.conferences.edit', 1) }}" class="btn btn-warning btn-sm">Redaguoti</a>
                                    <form action="{{ route('admin.conferences.destroy', 1) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Ar tikrai norite ištrinti?')">Trinti</button>
                                    </form>
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
