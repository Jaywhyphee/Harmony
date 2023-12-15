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

                        <form method="POST" action="{{ route('residents.update', $editResident->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <div class="form-group">
                                    <label for="Res_Name">Name<span class="text-danger">*</span></label>
                                    <input type="text" required class="form-control" name="Res_Name" value="{{ $editResident->Res_Name }}">
                                    @error('Res_Name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="mb-2">
                                <div class="form-group">
                                    <label for="Res_Email">Email<span class="text-danger">*</span></label>
                                    <input type="email" required class="form-control" name="Res_Email" value="{{ $editResident->Res_Email }}">
                                    @error('Res_Email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>  
                            <div class="mb-2">
                                <div class="form-group">
                                    <label for="Res_Ic">Ic Number<span class="text-danger">*</span></label>
                                    <input type="number" required class="form-control" name="Res_Ic" value="{{ $editResident->Res_Ic }}">
                                    @error('Res_Ic')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-group">
                                    <label for="Res_Mobile">Phone Number <span class="text-danger">*</span></label>
                                    <input type="number" required class="form-control" name="Res_Mobile" value="{{ $editResident->Res_Mobile }}">
                                    @error('Res_Mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>                             
                            <div class="mb-2">
                                <div class="form-group">
                                    <label for="Res_HouseNo">House No<span class="text-danger">*</span></label>
                                    <input type="number" required class="form-control" name="Res_HouseNo" value="{{ $editResident->Res_HouseNo }}">
                                    @error('Res_HouseNo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-group">
                                    <label for="Res_Address">Address <span class="text-danger"></span></label>
                                    <textarea class="form-control" name="Res_Address">{{ $editResident->Res_Address }}</textarea>
                                    @error('Res_Address')
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