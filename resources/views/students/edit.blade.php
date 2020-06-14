@extends('layout/main')
@section('title', 'Form Ubah Data Mahasiswa')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

<form method="post" action="/students/{{$student->id}}">
    @method('patch')
    @csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control"
     id="nama"
    placeholder="Masukan Nama" name="nama" value="{{$student->nama}}">

  </div> 

  <div class="form-group">
    <label for="nrp">NRP</label>
    <input type="text" class="form-control" id="nrp"
   placeholder="Masukan nrp" name="nrp" value="{{$student->nrp}}">
  </div> 

   <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email"
   placeholder="Masukan email" name="email" value="{{$student->email}}">
  </div>

   <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <input type="text" class="form-control" id="jurusan"
   placeholder="Masukan jurusan" name="jurusan" value="{{$student->jurusan}}">
  </div> 

  <button type="submit" class="btn btn-primary">Ubah Data</button>

</form>

     
        </div>
    </div>
 </div>

 @endsection
 