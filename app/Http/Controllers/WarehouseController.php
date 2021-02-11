<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use Validator;

class WarehouseController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $warehouses = Warehouse::latest()->paginate(5);
        return view('warehouse.v_index',compact('warehouses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('warehouse.v_create');
    }


    public function store(Request $request)
    {
        $rules = [
            'id' => 'required|max:6|unique:storages',  
            'nama' => 'required',  
            'alamat' => 'required',  
            'capacity' => 'required|numeric',
            'keterangan' => 'required'
          ];
  
          $messages = [
              'id.required' => 'ID Wajib diisi.',
              'id.max' => 'ID Tidak Lebih Besar dari 6.',
              'id.unique' => 'ID sudah terdaftar.',
              'nama.required' => 'Nama Wajib diisi.',
              'alamat.required' => 'Keterangan Wajib diisi.',
              'capacity.required' => 'Jumlah Wajib diisi.',
              'keterangan.required' => 'Keterangan Wajib diisi.',
          ];

          $validator = Validator::make($request->all(), $rules, $messages);

          if($validator->fails()){
              return redirect()->back()->withErrors($validator)->withInput($request->all());
          }
          Warehouse::create($request->all());
          return redirect()->route('warehouse.index')
                            ->with('success','Warehouse Create Success');

    }


    public function show(Warehouse $warehouse)
    {
        return view('warehouse.v_show',compact('warehouse'));
    }


    public function edit(Warehouse $warehouse)
    {
        return view('warehouse.v_edit',compact('warehouse'));
    }

 
    public function update(Request $request, Warehouse $warehouse)
    {
        $rules = [
            'id' => 'required|max:6',  
            'nama' => 'required',  
            'alamat' => 'required',  
            'capacity' => 'required|numeric',
            'keterangan' => 'required'
          ];
  
          $messages = [
              'id.required' => 'ID Wajib diisi.',
              'nama.required' => 'Nama Wajib diisi.',
              'alamat.required' => 'Keterangan Wajib diisi.',
              'capacity.required' => 'Jumlah Wajib diisi.',
              'keterangan.required' => 'Jumlah Wajib diisi.'
          ];

          $validator = Validator::make($request->all(), $rules, $messages);

          if($validator->fails()){
              return redirect()->back()->withErrors($validator)->withInput($request->all());
          }

          $warehouse->update($request->all());

          return redirect()->route('warehouse.index')
                            ->with('success','Data Berhasil di Update');
    }

    public function destroy(Warehouse $warehouse)
    {
        $warehouse->delete();

        return redirect()->route('warehouse.index',compact('warehouse'))
                            ->with('success','Data berhasil di Hapus');
    }
}
