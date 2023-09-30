

@extends('layout.main')
@section('judul_halaman', 'Halaman Fakultas')

@section('content')
     <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Fakultas</h4>
                  <div class="text-right">
                    <a href = "{{ route('fakultas.create')}}" type="button" class="btn btn-info btn-rounded btn-fw">Tambah</a>
                  </div>
                 
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Fakultas</th>
                                <th>Dekan</th>
                                <th>Wakil Dekan</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            @foreach ($fakultas as $item)
                            <tr>
                                <td>{{ $item['nama_fakultas'] }}</td>
                                <td>{{ $item['nama_dekan'] }}</td>
                                <td>{{ $item['nama_wakil_dekan'] }}</td>
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