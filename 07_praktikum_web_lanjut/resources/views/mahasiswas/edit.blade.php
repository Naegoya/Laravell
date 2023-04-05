@extends('mahasiswas.layout')


    @section('content')

    <div class="container mt-5">

    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
    <div class="card-header">
    Edit Mahasiswa
    </div>
    <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your i
    nput.<br><br>
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
    <form method="post" action="{{ route('mahasiswas.update', $Mahasiswas->Nim) }}" id="myForm">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="Nim">Nim</label>
    <input type="text" name="Nim" class="formcontrol" id="Nim" value="{{ $Mahasiswas->Nim }}" ariadescribedby="Nim" >
    </div>
    <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" name="Nama" class="formcontrol" id="Nama" value="{{ $Mahasiswas->Nama }}" ariadescribedby="Nama" >
    </div>
    <div class="form-group">
    <label for="Kelas">Kelas</label>
    <input type="Kelas" name="Kelas" class="formcontrol" id="Kelas" value="{{ $Mahasiswas->Kelas }}" ariadescribedby="Kelas" >
    </div>
    <div class="form-group">
    <label for="Jurusan">Jurusan</label>
    <input type="Jurusan" name="Jurusan" class="formcontrol" id="Jurusan" value="{{ $Mahasiswas->Jurusan }}" ariadescribedby="Jurusan" >
    </div>
    <div class="form-group">
    <label for="No_Handphone">No_Handphone</label>
    <input type="No_Handphone" name="No_Handphone" class="formcontrol" id="No_Handphone" value="{{ $Mahasiswas->No_Handphone }}" ariadescribedby="No_Handphone" >
    </div>
    <div class="form-group">
    <label for="Email">E-mail</label><br>
    <input type="text" name="Email" class="formcontrol" id="Email" aria-describedby="Email" >
    </div>
    <div class="form-group">
    <label for="Tanggal_Lahir">Tanggal_Lahir</label><br>
    <input type="text" name="Tanggal_Lahir" class="formcontrol" id="Tanggal_Lahir" aria-describedby="Tanggal_Lahir" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    @endsection