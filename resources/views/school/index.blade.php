@extends('template.main')
@section('konten')
 
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <div class="card-header">
      <h5 class="page-title " style="float: left">Table School</h5>
      <a href="{{route('school.create')}}">
        <button class="btn btn-md btn-primary btn-round " style="float: right">
        <i class="fas fa-plus-circle"></i> Tambah
        </button>
      </a>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @php
            $no = 1;
            @endphp
            @foreach ($data as $item)
                
            <tr>
                <td>{{$no}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->alamat}}</td>
                
                  <td>
                    <a href="{{route('school.edit', $item->id)}}" style="text-decoration: none">
                         <button type="button" class="btn btn-icon btn-round btn-secondary">
                             <i class="fas fa-edit"></i>
                         </button> &nbsp;
                    </a>
                    <a href="{{route('school.destroy', $item->id)}}">
                         <button onclick="return confirm('yakin data ini dihapus?')" type="button" class="btn btn-icon btn-round btn-danger">
                             <i class="fa fa-trash"></i>
                         </button>
                     </a>
                  </td>
              </tr>
              @php
              $no++;
              @endphp
              @endforeach
          </tbody>

        </table>
      </div>
    </div>

</div>
@endsection