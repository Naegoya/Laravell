@extends('mahasiswas.layout')

    @section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
    </div>
<form class="form-left my-2" method="get" action="{{ route('search') }}">
            <div class="form-group w-80 mb-3">
                        <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Nama">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
                        <a class="btn btn-success right" href="{{ route('mahasiswas.index') }}" style="margin-left:165px"> Show All Mahasiswa</a>
            </div>
    
    

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
    {{ $mahasiswas->links()}}
    @endsection
