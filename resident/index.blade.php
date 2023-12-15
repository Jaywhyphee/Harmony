@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-center">
                            Resident Information
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
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Ic Number</th>
                                    <th>House No</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($residents as $resident)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $resident->Res_Email }}</td>
                                        <td>{{ $resident->Res_Name }}</td>
                                        <td>{{ $resident->Res_Mobile }}</td>
                                        <td>{{ $resident->Res_Ic }}</td>
                                        <td>{{ $resident->Res_HouseNo }}</td>
                                        <td>{{ $resident->Res_Address }}</td>
                                        <td>
                                            <a href="{{ route('residents.show', $resident->id) }}"
                                                class="btn btn-sm btn-primary">Show</a>
                                            <a href="{{ route('residents.edit', $resident->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>

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