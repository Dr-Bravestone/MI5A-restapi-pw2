@extends('layout.main')
@section('judul_halaman', 'Halaman Prodi')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Prodi</h4>
          @if(Session::get('success'))
            <div class = "alert alert-success">
              {{Session::get('success')}}
            </div>
          @endif
          <div class="text-right">
            <a href = "{{ route('prodi.create')}}" type="button" class="btn btn-info btn-rounded btn-fw">Tambah</a>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Program Studi</th>
                        <th>Nama Fakultas</th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach ($prodi as $item)
                        <tr>
                            <td>{{ $item['nama_prodi'] }}</td>
                            <td>{{ $item['fakultas']-> nama_fakultas }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection