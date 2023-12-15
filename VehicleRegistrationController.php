<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleRegistration;

class VehicleRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $vehicles = VehicleRegistration::get();
        return view('vehicle.index', compact('vehicles'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $storeVehicle = new VehicleRegistration();
            $storeVehicle->Veh_SiriNo = $request->Veh_SiriNo;
            $storeVehicle->Veh_Type = $request->Veh_Type;
            $storeVehicle->Veh_Brand = $request->Veh_Brand;
            $storeVehicle->Res_ID = $request->Res_ID;
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('vehicles.create')->with('error', 'Vehicle unable to save');
        }
        $storeVehicle->save();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($vehicle)
    {
        try {
            $editVehicle = VehicleRegistration::findOrFail($vehicle);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('vehicles.index')->with('error', 'Vehicle not found');
        }
        return view('vehicle.show', compact('editVehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($vehicle)
    {
        //
        try {
            $editVehicle= VehicleRegistration::findOrFail($vehicle);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('vehicles.index')->with('error', 'Vehicle not found');
        }
        return view('vehicle.edit', compact('editVehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vehicle)
    {
        //
        try {
            $storeVehicle = VehicleRegistration::findOrFail($vehicle);
            $storeVehicle->Veh_Type = $request->Veh_Type;
            $storeVehicle->Veh_Brand = $request->Veh_Brand;
            $storeVehicle->Veh_SiriNo = $request->Veh_SiriNo;
           
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('vehicles.edit', $vehicle)->with('error', 'Vehicle unable to update');
        }
        $storeVehicle->save();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($vehicle)
    {
        try {
            $deleteVehicle = VehicleRegistration::findOrFail($vehicle);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('vehicles.index')->with('error', 'Vehicle not found');
        }
        $deleteVehicle->delete();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully');
    }
}
