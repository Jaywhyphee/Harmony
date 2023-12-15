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

                        <form method="POST" action="{{ route('vehicles.update', $editVehicle->id) }}">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-2">
                                <div class="form-group">
                                    <label for="Res_ID">Resident ID</label>
                                    <input type="number" required class="form-control" name="Res_ID" value="{{ $editVehicle->Res_ID }}" readonly>
                                    @error('Res_ID')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-group">
                                    <label for="Veh_Type">Vehicle Type <span class="text-danger">*</span></label>
                                    <select id="Veh_Type" name="Veh_Type" class="form-control" required>
                                        <option value="Car" {{ $editVehicle->gender == 'Car' ? 'selected' : '' }}> Car </option>
                                        <option value="Motorcycle" {{ $editVehicle->gender == 'Motorcycle' ? 'selected' : '' }}> Motorcycle </option>
                                    </select>
                                    @error('Veh_Type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-group">
                                    <label for="Veh_SiriNo">Vehicle Siri No<span class="text-danger">*</span></label>
                                    <input type="text" required class="form-control" name="Veh_SiriNo" value="{{ $editVehicle->Veh_SiriNo }}">
                                    @error('Veh_SiriNo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>      
                            
                            <div class="mb-2">
                                <div class="form-group">
                                    <label for="Veh_Brand">Vehicle Brand<span class="text-danger">*</span></label>
                                    <input type="text" required class="form-control" name="Veh_Brand" value="{{ $editVehicle->Veh_Brand }}">
                                    @error('Veh_Brand')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> 




                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-block btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection