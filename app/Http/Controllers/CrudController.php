<?php

namespace App\Http\Controllers;

use App\Models\Crud;

use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

// data tables ingat untuk composer require
// composer require yajra/laravel-datatables-oracle:"~9.0"
use DataTables;
class CrudController extends Controller
{
    public function index(){
        return view('index');
    }
    public function get(){
        $data = Crud::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('foto',function($data){
                $url=asset('storage/foto/'.$data->foto);
                return $url;
            })
            ->addColumn('action', function($data) {
                $button = '<button type="button" name="edit" id="'.$data->id.'" value="'.$data->id.'" class="edit btn btn-warning btn-sm mr-1"><i class="fa fa-edit"></i> Edit </button>';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" value="'.$data->id.'" class="delete btn-danger btn btn-sm"><i class="fa fa-delete"></i> Delete </button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        return $data;
    }
    public function store(Request $request){
        // dd($reqeust->all());
        $validator = Validator::make($request->all(), [
            "nama" => "required",
            "jenis" => "required",
            "kota"=>'required',
            "file"=>'required|image|mimes:jpg,png,jpeg',
        ]);

        if($validator ->fails()){
            $messages = $validator->messages();
            return Redirect::back()->withErrors($messages);
        }
        if($request->hasFile('file')){{
            $file = $request->file;
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid().'-'.'.' . $extension;
            $file->move('storage/foto/',$filename);
        }}
        $crud = new Crud;
        $crud->nama = $request->nama;
        $crud->jenis_kelamin = $request->jenis;
        $crud->kota = $request->kota;
        $crud->foto = $filename;
        $crud->save();
        return Redirect::back()->with('success', 'Data Berhasil Ditambahkan');
    }
    public function edit($id){
        return Crud::find($id);
    }
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            "nama" => "required",
            "jenis" => "required",
            "kota"=>'required',
            "file"=>'image|mimes:jpg,png,jpeg',
        ]);
        
        if($validator ->fails()){
            $messages = $validator->messages();
            return Redirect::back()->withErrors($messages);
        }
        
        if($request->hasFile('file')){{
            $filename = $request->filename;
            $imagePath = 'storage/foto/'.$filename;
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }
            $file = $request->file;
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid().'.'.$extension;
            $file->move('storage/foto/',$filename);
        }}

        $id=$request->editID;
        $crud = Crud::where('id',$id);
        $nama = $request->nama;
        $jenis_kelamin = $request->jenis;
        $kota = $request->kota;
        $foto = $filename;
        $crud->update(['nama'=>$nama, 'jenis_kelamin'=>$jenis_kelamin,'kota'=>$kota,'foto'=>$foto]);
        return Redirect::back()->with('success', 'Data Berhasil Diupdate');
    }
    public function delete($id){
        Crud::find($id)->delete();
    }
}
