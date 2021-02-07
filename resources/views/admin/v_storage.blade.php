@extends('layout.v_template_admin')
@section('title','About')

@section('content')
    <div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-inverse">
            <thead class="thead-inverse">
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Keterangan</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                   @foreach ($storages as $data)
                    <tr>                    
                        <td class="text-center">{{ ++$i }}</td>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->NamaBarang }}</td>
                        <td>{{ $data->Keterangan }}</td>
                        <td>{{ $data->Jumlah }}</td>
                        <td class="text-center">
                            <form action="{{ route('storage.destroy',$data->id) }}" method="POST">
    
                                <a class="btn btn-primary btn-sm" href="{{ route('storage.edit',$data->id) }}">Edit</a>
    
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')">Delete</button>
    
                            </form>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
        </table>
    </div>
@endsection