@extends('layout.v_template_admin')
@section('title','show')
@section('content')
    <div class="container">
        <div class="row mt-2 mb-2 bg-success rounded">
            <div class="col-lg mx-4 my-4">
                <div class="float-left">
                    <h3>Detail Gudang</h3>
                </div>
                <div class="float-right ms-4">
                    <a class="btn btn-secondary" href="{{ route('warehouse.index') }}"> Back</a>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-2">
                    ID
                </div>
                <div class="col-md-1">
                    :
                </div>
                <div class="col-md">
                    {{ $warehouse->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Nama Gudang
                </div>
                <div class="col-md-1">
                    :
                </div>
                <div class="col">
                    {{ $warehouse->nama }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Alamat
                </div>
                <div class="col-md-1">
                    :
                </div>
                <div class="col">
                    {{ $warehouse->alamat }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Kapasitas
                </div>
                <div class="col-md-1">
                    :
                </div>
                <div class="col">
                    {{ $warehouse->capacity }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Keterangan
                </div>
                <div class="col-md-1">
                    :
                </div>
                <div class="col">
                    {{ $warehouse->keterangan }}
                </div>
            </div>
    </div>
@endsection
