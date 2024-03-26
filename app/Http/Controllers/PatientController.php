<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index() {
        $patients = Patient::all();
        return view('patients.index', ['patients'=>$patients]);
    }
    public function create() {
        return view('patients.create');
    }
    public function store(Request $request) {
        $data =$request->validate([
            'name' => 'required',
            'id_card_number' => 'required|unique:App\Models\Patient,id_card_number',
            'address' => 'required',
            'phone' => 'nullable',
            'birth_date' => 'required',
            'id_card_type' => 'required',
            'bpjs_status' => 'required'
        ]);

        $newPatient = Patient::create($data);
        return redirect(route('patient.index'));
    }
    public function edit(Patient $patient) {
        return view('patients.edit',['patient'=>$patient]);
    }
    public function update(Patient $patient, Request $request) {
        $data =$request->validate([
            'name' => 'required',
            'id_card_number' => 'required',
            'address' => 'required',
            'phone' => 'nullable',
            'birth_date' => 'required',
            'id_card_type' => 'required',
            'bpjs_status' => 'required'
        ]);

        $patient ->update($data);
        return redirect(route('patient.index'))->with('success','Data successfully updated');
    }
    public function delete(Patient $patient) {
        $patient->delete();
        return redirect(route('patient.index'))->with('success','Data successfully deleted');
    }
}
