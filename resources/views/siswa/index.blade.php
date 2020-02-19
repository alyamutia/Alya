@extends('layout/main')

@section('title', 'Siswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
    <h1 class="mt-3">Daftar Siswa</h1>
     <a href="">Tambah Data</a>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($siswa as $mhs) 
    <tr>
       <th scope="row">{{ $loop->iteration}}</th>
       <th>{{$mhs->nama}}</th>
       <th>{{$mhs->kelas}}</th>
       <th>{{$mhs->alamat}}</th>
       <th>{{$mhs->foto}}</th>
       
       <td>
       <a href="/edit/{{$siswa}}" class="badge badge-success">Edit</a>
       <form action ="/delete/{{$siswa}}" method="POST">
      @csrf
      <button type ="submit" class="badge badge-danger" onclick="return(confirm('Apakah anda yakin menghapus data anda? :v'))">Delete</button>
      </form>
    </tr>
    @endforeach
    </tbody>
    </div>
  </div>
</div>

@endsection
