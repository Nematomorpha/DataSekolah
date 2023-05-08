<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{
    public $school;
    public function __construct()
    {
       $this->school = new School;
      
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = School::all();

        return view('school.index' , compact('data'));
      
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('school.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required|min:3|max:40|unique:schools,nama',
            'alamat' => 'required'
          
    
        ];
    
        $messages = [
            'required' => ":attribute ga boleh kosong",
            'min' => ":attribute minimal 3",
            'max' => ":attribute maksimal 20",
            'unique' => ":attribute sudah tersedia, silahkan input lain"
           
    
        ];
        $this->validate($request, $rules, $messages);
        $this->school->nama = $request->nama;
        $this->school->alamat = $request->alamat;
        $this->school->save();
        return redirect()->route('school.index');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = School::findorFail($id);
        //
        return view('school.edit', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $update = School::findOrFail($id);
        $update->nama = $request->nama;
        $update->alamat = $request->alamat;

        // periksa apakah ada perubahan data
        if ($update->isDirty()) {

            $rules = [
                'nama' => 'required|min:3|max:20|unique:schools,nama',
                'alamat' => 'required'
            ];

            $messages = [
                'unique' => ":attribute sudah tersedia, silakan input lain",
                'required' => ":attribute gak boleh kosong",
                'min' => ":attribute kurang banyak",
                'max' => ":attribute kebanyakan / ukuran file terlalu besar",
            ];

            $this->validate($request, $rules, $messages);
            $update->save();
            return redirect()->route('school.index')->with('status', 'Data kategori berhasil diupdate');
            
        } else {
            return redirect()->route('school.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destroy = School::findOrFail($id); 
        // dd($show);
        $destroy->delete();
        return redirect()->route('school.index')->with('status', 'Data school berhasil dihapus'); 
    }
}
