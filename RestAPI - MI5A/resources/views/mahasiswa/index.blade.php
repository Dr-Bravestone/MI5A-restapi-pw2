@extends('layout.main')
@section('judul_halaman', 'Halaman Mahasiswa')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Mahasiswa</h4>
          @if(Session::get('success'))
            <div class = "alert alert-success">
              {{Session::get('success')}}
            </div>
          @endif
          <div class="text-right">
            <a href = "{{ route('mahasiswa.create')}}" type="button" class="btn btn-info btn-rounded btn-fw">Tambah</a>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Tanggal</th>
                        <th>Foto</th>
                        <th>Program Studi</th>
                        <th>#</th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach ($mahasiswas as $item)
                        <tr>
                            <td>{{ $item['npm'] }}</td>
                            <td>{{ $item['nama'] }}</td>
                           <td> {{ $item['tanggal'] }}</td>
                          
                            <td><img src= img src="public/images/{{$item->foto}}" alt="foto"></td>
                            <td>{{ $item['prodi']-> nama_prodi }}</td>
                            <td>
                              <form action = "{{route('mahasiswa.destroy', $item->id)}}" method = "post">
                                @csrf
                                @method('DELETE')
                                <button type = "submit" class = "btn btn-danger btn-rounded show_confirm">Hapus</button>
                                <a href="{{route('mahasiswa.edit', $item->id)}}" class = "btn btn-warning btn-rounded">Ubah</a>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

{{-- script sweealert --}}
<script src = "//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>

@endsection