@extends('layout/main')

@section('judul', 'Daftar Mahasiswa')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Daftar Mahasiswa</h2>
              <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NRP</th>
      <th scope="col">Nama</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>   
    @foreach( $students as $std )
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$std->nrp}}</td>
      <td>{{$std->nama}}</td>
      <td>
        <a href="/students/{{$std->id}}" class="badge badge-info">Show Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
            </div>
        </div>
    </div>
@endsection