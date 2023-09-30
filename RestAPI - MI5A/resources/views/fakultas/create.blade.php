

@extends('layout.main')
@section('judul_halaman', 'Halaman Fakultas')

@section('content')
     <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Fakultas</h4>
                  <p class="card-description">
                    Formulir tambah data fakultas
                  </p>
                  <form action = "{{route('fakultas.store')}}" method = "POST" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="nama_fakultas">Nama Fakultas</label>
                      <input type="text" class="form-control" name="nama_fakultas" placeholder="Nama Fakultas"
                      value = "{{old('nama_fakultas')}}">
                      @error('nama_fakultas')
                      <span class = "txt-danger">{{$message}} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama_dekan">Nama Dekan</label>
                      <input type="text" class="form-control" name="nama_dekan" placeholder="Nama Dekan">
                    </div>
                    <div class="form-group">
                      <label for="nama_wakil_dekan">Nama Wakil Dekan</label>
                      <input type="text" class="form-control" name="nama_wakil_dekan" placeholder="Nama Wakil Dekan">
                    </div>
                   
                    <button type="submit" class="btn btn-info mr-2 btn-rounded">Submit</button>
                    <a href = "{{route('fakultas.index')}}" class="btn btn-light btn-rounded">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    
@endsection