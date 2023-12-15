@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('residents.index') }}" class="btn btn-sm btn-danger">Back</a>
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

                        <div class="mb-2">
                            <div class="form-group">
                                <p>Name: {{ $editResident->Res_Name }}</p>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="form-group">
                                <p>Email: {{ $editResident->Res_Email }}</p>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="form-group">
                                <p>Mobile Number: {{ $editResident->Res_Mobile }}</p>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="form-group">
                                <p>Ic Number: {{ $editResident->Res_Ic }}</p>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="form-group">
                                <p>House No: {{ $editResident->Res_HouseNo }}</p>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="form-group">
                                <p>Address: {{ $editResident->Res_Address }}</p>
                            </div>
                        </div>
                        
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection