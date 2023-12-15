@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('vehicles.index') }}" class="btn btn-sm btn-danger">Back</a>
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
                                <p>Vehicle Type: {{ $editVehicle->Veh_Type }}</p>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="form-group">
                                <p>Siri No: {{ $editVehicle->Veh_SiriNo }}</p>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="form-group">
                                <p>Vehicle Brand: {{ $editVehicle->Veh_Brand }}</p>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="form-group">
                                <p>Resident ID: {{ $editVehicle->Res_ID }}</p>
                            </div>
                        </div>
                        
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection