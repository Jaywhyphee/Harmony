@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('vehicles.create') }}" class="btn btn-sm btn-primary">Create</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    
                                    <th>Vehicle Type</th>
                                    <th>Siri No</th>
                                    <th>Brand</th>
                                    <th>Res_Id</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($vehicles as $vehicle)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $vehicle->Veh_Type }}</td>
                                        <td>{{ $vehicle->Veh_SiriNo }}</td>
                                        <td>{{ $vehicle->Veh_Brand }}</td>
                                        <td>{{ $vehicle->Res_ID }}</td>

                                        <td>
                                            <a href="{{ route('vehicles.show', $vehicle->id) }}"
                                                class="btn btn-sm btn-primary">Show</a>
                                            <a href="{{ route('vehicles.edit', $vehicle->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection