@extends('template.main')
@section('konten')
<div class="container-fluid">
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Tambah Data School</div>
            </div>
            <form action="{{route('school.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jd">Nama</label>
                                        <input type="text" value="{{ old('nama')}}" name="nama" class="form-control {{ $errors->first('nama') ? "is-invalid":""}}" id="jd" placeholder="Masukkan data school">

                                        @error('nama')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jd">Alamat</label>
                                        <input type="text" value="{{ old('alamat')}}" name="alamat" class="form-control {{ $errors->first('alamat') ? "is-invalid":""}}" id="jd" placeholder="Masukkan alamat">

                                        @error('alamat')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <center>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection