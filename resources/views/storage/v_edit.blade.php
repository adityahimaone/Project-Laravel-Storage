@extends('layout.v_template_admin')
@section('title','Edit')

@section('content')
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-lg mx-4 my-4">
                <div class="float-left">
                    <h2>Edit Data</h2>
                </div>
                <div class="float-right ms-4">
                    <a class="btn btn-secondary" href="{{ route('storage.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg mx-4">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
         </div>
        <form action="{{ route('storage.update',$storage->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mx-4">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>ID:</strong>
                        <input type="text" name="id" value="{{ $storage->id }}" class="form-control" placeholder="ID">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Barang:</strong>
                        <input type="text" name="NamaBarang" value="{{ $storage->NamaBarang }}" class="form-control" placeholder="Nama Barang">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="Keterangan" value="{{ $storage->Keterangan }}"class="form-control" placeholder="Keterangan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah:</strong>
                        <input type="text" name="Jumlah" value="{{ $storage->Jumlah }}" class="form-control" placeholder="Jumlah">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
     
      
        </form>
    </div>
@endsection