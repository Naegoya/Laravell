@extends('mahasiswas.layout')
@section('content')
    <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
    <div class="card-header">
    Detail Mahasiswa
    </div>
    <div class="card-body">
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Nim: </b>{{$Mahasiswas->Nim}}</li>
    <li class="list-group-item"><b>Nama: </b>{{$Mahasiswas->Nama}}</li>
    <li class="list-group-item"><b>Kelas: </b>{{$Mahasiswas->Kelas}}</li>
    <li class="list-group-item"><b>Jurusan: </b>{{$Mahasiswas->Jurusan}}</li>
    <li class="list-group-item"><b>No_Handphone: </b>{{$Mahasiswas->No_Handphone}}</li>
    <li class="list-group-item"><b>E-mail: </b>{{$Mahasiswas->Email}}</li>
    <li class="list-group-item"><b>Tanggal_Lahir: </b>{{$Mahasiswas->Tanggal_Lahir}}</li>

    </ul>
    </div>
    <a class="btn btn-success mt3" href="{{ route('mahasiswas.index') }}">Kembali</a>
    </div>
    </div>
    </div>
@endsection