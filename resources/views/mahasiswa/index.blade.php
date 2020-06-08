@extends('layout/main')
@section('title', 'Daftar Mahasiswa')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table">
            <thead class="thead-dark">
                <tr> 
                         <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <th scope="row">1</th>
                     <td>Zulkifli</td>
                     <td>16.11.0134</td>
                     <td>ak@gmal.com</td>
                     <td>Teknik Informatika</td>
                     <td>
                         <a href="" class="badge badge-success">edit</a>
                         <a href="" class="badge badge-danger">delete</a>
                     </td>
                 </tr>
             </tbody>

            </table>
        </div>
    </div>
 </div>

 @endsection
 