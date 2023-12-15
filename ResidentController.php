<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $residents = Resident::get();
        return view('resident.index', compact('residents'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('resident.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            $storeResident = new Resident();
            $storeResident->Res_Email = $request->Res_Email;
            $storeResident->Res_Name = $request->Res_Name;
            $storeResident->Res_Mobile = $request->Res_Mobile;
            $storeResident->Res_Ic = $request->Res_Ic;
            $storeResident->Res_HouseNo = $request->Res_HouseNo;
            $storeResident->Res_Address = $request->Res_Address;
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('residents.create')->with('error', 'Resident unable to save');
        }
        $storeResident->save();
        return redirect()->route('residents.index')->with('success', 'Resident saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($resident)
    {
        try {
            $editResident = Resident::findOrFail($resident);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('residents.index')->with('error', 'Resident not found');
        }
        return view('resident.show', compact('editResident'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($resident)
    {
        //
        try {
            $editResident= Resident::findOrFail($resident);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('residents.index')->with('error', 'resident not found');
        }
        return view('resident.edit', compact('editResident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $resident)
    {
        //
        try {
            $storeResident = Resident::findOrFail($resident);
            $storeResident->Res_Name = $request->Res_Name; 
            $storeResident->Res_Email = $request->Res_Email;
            $storeResident->Res_Mobile = $request->Res_Mobile;
            $storeResident->Res_Ic = $request->Res_Ic;
            $storeResident->Res_HouseNo = $request->Res_HouseNo;
            $storeResident->Res_Address = $request->Res_Address;
           
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('residents.edit', $resident)->with('error', 'Resident unable to update');
        }
        $storeResident->save();
        return redirect()->route('residents.index')->with('success', 'Resident updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($resident)
    {
        try {
            $deleteVehicle = Resident::findOrFail($resident);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('residents.index')->with('error', 'Resident not found');
        }
        $deleteVehicle->delete();
        return redirect()->route('residents.index')->with('success', 'Resident deleted successfully');
    }
}
