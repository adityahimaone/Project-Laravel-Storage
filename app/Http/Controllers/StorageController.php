<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storage;
use Validator;
class StorageController extends Controller
{

    public function index()
    {
        $storages = Storage::OrderBy('id')->paginate(5);
  
        return view('storage.v_storage',compact('storages'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('storage.v_create');
    }

    public function store(Request $request)
    {
   /*      $request->validate([
            'id'=> 'required',
            'NamaBarang'=> 'required',
            'Keterangan'=> 'required',
            'Jumlah'=> 'required',
        ]); */
        $rules = [
          'id' => 'required|max:5|unique:storages',  
          'NamaBarang' => 'required',  
          'Keterangan' => 'required',  
          'Jumlah' => 'required|numeric'
        ];

        $messages = [
            'id.required' => 'ID Wajib diisi.',
            'id.unique' => 'ID sudah terdaftar.',
            'NamaBarang.required' => 'Nama Wajib diisi.',
            'Keterangan.required' => 'Keterangan Wajib diisi.',
            'Jumlah.required' => 'Jumlah Wajib diisi.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        Storage::create($request->all());
        return redirect()->route('storage.index')
                        ->with('success','Data Add Success');
    }


    public function edit(Storage $storage)
    {
        return view('storage.v_edit',compact('storage'));
    }

    public function update(Request $request, Storage $storage)
    {
      /*   $request->validate([
            'id'=> 'required',
            'NamaBarang'=> 'required',
            'Keterangan'=> 'required',
            'Jumlah'=> 'required',
        ]); */
        $rules = [
            'id' => 'required|max:5',  
            'NamaBarang' => 'required',  
            'Keterangan' => 'required',  
            'Jumlah' => 'required|numeric'
          ];
  
          $messages = [
              'id.required' => 'ID Wajib diisi.',
              'NamaBarang.required' => 'Nama Wajib diisi.',
              'Keterangan.required' => 'Keterangan Wajib diisi.',
              'Jumlah.required' => 'Jumlah Wajib diisi.',
          ];
        
          $validator = Validator::make($request->all(), $rules, $messages);

          if($validator->fails()){
              return redirect()->back()->withErrors($validator)->withInput($request->all());
          }

        $storage->update($request->all());

        return redirect()->route('storage.index')
                        ->with('success','Data Update Success');
    }

    public function destroy(Storage $storage)
    {
        $storage->delete();
  
        return redirect()->route('storage.index',compact('storage'))
                        ->with('success','Data Deleted successfully');
    }
}

    
