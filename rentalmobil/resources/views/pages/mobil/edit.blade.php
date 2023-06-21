@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Merk</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Data Merk</li>
            </ol>
            <a href="/merk" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/mobil/update/{{$mobilData->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Mobil</label>
                        <input type="text" value="{{$mobilData->nama_mobil}}"class="form-control" name="nama_mobil" required>
                    </div>

                    <div class="form-group">
                        <label for="">CC</label>
                        <input type="text" value="{{$mobilData->CC}}"class="form-control" name="cc" required>
                    </div>

                    <div class="form-group">
                        <label for="">Tahun Mobil</label>
                        <input type="text" value="{{$mobilData->tahun_mobil}}"class="form-control" name="tahun_mobil" required>
                    </div>

                    <div class="form-group">
                        <label for="">Nomor Polisi</label>
                        <input type="text" value="{{$mobilData->nomor_polisi}}"class="form-control" name="nomor_polisi" required>
                    </div>

                    <div class="form-group">
                        <label for="">Warna Mobil</label>
                        <input type="text" value="{{$mobilData->warna}}"class="form-control" name="warna" required>
                    </div>

                    <div class="form-group">
                        <label for="">Foto Mobil</label>
                        <input type="file" value="{{$mobilData->foto_mobil}}"class="form-control" name="foto_mobil" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection