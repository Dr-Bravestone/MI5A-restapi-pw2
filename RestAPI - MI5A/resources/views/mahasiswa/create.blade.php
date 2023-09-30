

@extends('layout.main')
@section('judul_halaman', 'Halaman Fakultas')

@section('content')
     <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Mahasiswa</h4>
                  <p class="card-description">
                    Formulir tambah data prodi
                  </p>
                  <form action = "{{route('mahasiswa.store')}}" method = "POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="npm">NPM</label>
                      <input type="text" class="form-control" name="npm" placeholder="Nomor Pengenal Mahasiswa"
                      value = "{{old('npm')}}">
                      @error('npm')
                      <span class = "txt-danger">{{$message}} </span>
                      @enderror
                    </div>

                     <div class="form-group">
                      <label for="nama">Nama Mahasiswa</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa"
                      value = "{{old('nama')}}">
                      @error('nama')
                      <span class = "txt-danger">{{$message}} </span>
                      @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" 
                        value = "{{old('tanggal')}}">
                        @error('tanggal')
                        <span class = "txt-danger">{{$message}} </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                      <label for="foto">Upload Foto</label>
                      <input type="file" class="form-control" name="foto" />
                      @error('foto')
                        <span class = "txt-danger">{{$message}} </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                      <label for="prodi_id">Program Studi</label>
                      
                      <select name = "prodi_id" class="form-control" >
                        @foreach($prodi as $item)
                            <option value = "{{$item -> id }}"> {{$item -> nama_prodi}} </option>
                        @endforeach
                        
                      </select>
                      @error('prodi_id')
                      <span class = "txt-danger">{{$message}} </span>
                      @enderror
                    </div>

                    
                    
                   
                    <button type="submit" class="btn btn-info mr-2 btn-rounded">Submit</button>
                    <a href = "{{route('mahasiswa.index')}}" class="btn btn-light btn-rounded">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    
@endsection