<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctorsdata;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function doktorget(){
        $doktorlist = Doctorsdata::paginate(50);
        $data = [
            'docktors' => $doktorlist
        ];
        return view('admin.admindashboard', $data);
    }

//    public function index()
//    {
//        $doctors = Doctorsdata::all();
//        return view('doctors.index', compact('doctors'));
//    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'adinfo' => 'required',
            'uzmanlik' => 'required',
            'ilinfo' => 'required',
            'klinik' => 'required',
            'address' => 'required',
        ]);

        $doctor = Doctorsdata::create($request->all());

        return redirect()->route('doctors.index', compact('doctor'))
            ->with('success', 'Doktor bilgisi başarıyla eklendi.');
    }

    public function show($id)
    {
        $doctor = Doctorsdata::find($id);
        return view('doctors.show', compact('doctor'));
    }

    public function edit($id)
    {
        $doctor = Doctorsdata::find($id);
        return view('admin.doctor.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'adinfo' => 'required',
            'uzmanlik' => 'required',
            'ilinfo' => 'required',
            'klinik' => 'required',
            'address' => 'required',
        ]);

        $doctor = Doctorsdata::find($id);
        $doctor->update($request->all());

        return back()->with('success', 'Doktor bilgisi başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $doctor = Doctorsdata::find($id);
        $doctor->delete();

        return back()->with('success', 'Doktor bilgisi başarıyla silindi.');
    }
}
