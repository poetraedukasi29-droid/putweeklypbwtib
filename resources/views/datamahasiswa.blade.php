@extends('layouts.backend')

@section('content')

    <div class="container text-center mt-4 mb-4">
        <h3>Data Mahasiswa</h3>
    </div>
    <button type="button" class="btn-outline theme-success">Tambah</button> 
    <div class="border rounded overflow-hidden">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                @foreach ($datas as $data )
                <tr>
                    <td>1</td>
                    <td>{{ $data->no }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->prodi }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->nohp }}</td>
                    <td>{{ $data->foto }}</td>
                    <td>
                        <button type="button" class="btn-outline theme-primary">Edit</button>
                        <button type="button" class="btn-outline theme-danger">Hapus</button>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection