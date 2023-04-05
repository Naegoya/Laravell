@extends('mahasiswas.layout')

    @section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
        </div>
    </div>
</div>
<form class="row mb-3 mt-5" action="{{ route('cari') }}" method="POST">
    @csrf
    <div class="col-md-6">
        <div class="d-flex flex-row">
            <input type="text" value="{{ (request()->cariMahasiswa)? request()->cariMahasiswa : '' }}" name="cariMahasiswa" class="form-control" placeholder="cariMahasiswa">
            <button type="submit" class="btn btn-primary ml-3">Cari</button>
        </div>
    </div>
    <div class="col-md-6 d-flex flex-row justify-content-end">
        <a class="btn btn-success" href="{{ route('mahasiswas.create') }}">Input Mahasiswa</a>
    </div>
</form>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
    <tr>
    <th>Nim</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Jurusan</th>
    <th>No_Handphone</th>
    <th>E-mail</th>
    <th>Tanggal_Lahir</th>

    <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswas as $Mahasiswas)
    <tr>

    <td>{{ $Mahasiswas->Nim }}</td>
    <td>{{ $Mahasiswas->Nama }}</td>
    <td>{{ $Mahasiswas->Kelas }}</td>
    <td>{{ $Mahasiswas->Jurusan }}</td>
    <td>{{ $Mahasiswas->No_Handphone }}</td>
    <td>{{ $Mahasiswas->Email }}</td>
    <td>{{ $Mahasiswas->Tanggal_Lahir }}</td>

    <td>
    <form action="{{ route('mahasiswas.destroy',$Mahasiswas->Nim) }}" method="POST">

    <a class="btn btninfo" href="{{ route('mahasiswas.show',$Mahasiswas->Nim) }}">Show</a>
    <a class="btn btnprimary" href="{{ route('mahasiswas.edit',$Mahasiswas->Nim) }}">Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
    </tr>
    @endforeach
    </table> 
    @endsection
