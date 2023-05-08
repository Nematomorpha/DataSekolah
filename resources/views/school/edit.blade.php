@extends('template.main')
@section('konten')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Edit Data school </div>
            </div>
            <form action="{{ route('school.update',$edit['id']) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="jd">Nama school</label>
                                        <input type="text" value="{{ $edit['nama']}}" name="nama" class="form-control {{ $errors->first('nama') ? "is-invalid":""}}" id="jd" placeholder="{{ $edit['nama']}}">

                                        @error('nama')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="jd">Alamat school</label>
                                        <input type="text" value="{{ $edit['alamat']}}" name="alamat" class="form-control {{ $errors->first('alamat') ? "is-invalid":""}}" id="jd" placeholder="{{ $edit['alamat']}}">

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
                    <button type="submit" class="btn btn-secondary"> <i class="icon-refresh"></i> Update</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


