<?php
    namespace App\Http\Controllers;
    use App\Models\Mahasiswa;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;


    class MahasiswaController extends Controller
    {
        public function search(Request $request){
        $keyword = $request->search;
        $mahasiswas = Mahasiswa::where('Nama', 'like', "%" . $keyword . "%")->paginate(1);
        return view('mahasiswas.index', compact('mahasiswas'))->with('i', (request()->input('page', 1) - 1) * 5);
    
        }
    /**
     * Display a listing of the resource.
     *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    //fungsi eloquent menampilkan data menggunakan pagination
    // $mahasiswas = Mahasiswa::all(); // Mengambil semua isi tabel
    // $posts = Mahasiswa::orderBy('Nim', 'desc')->paginate(6);
    // return view('mahasiswas.index', compact('mahasiswas'));
    // with('i', (request()->input('page', 1) - 1) * 5);
    $mahasiswas = Mahasiswa::paginate(5);
    return view('mahasiswas.index', compact('mahasiswas')); 
    }
    public function create()
    {
    return view('mahasiswas.create');
    }
    public function store(Request $request)
    {
    //melakukan validasi data
    $request->validate([
    'Nim' => 'required',
    'Nama' => 'required',
    'Kelas' => 'required',
    'Jurusan' => 'required',
    'No_Handphone' => 'required',
    'Email' => 'required',
    'Tanggal_Lahir' => 'required',

    ]);
    //fungsi eloquent untuk menambah data
    Mahasiswa::create($request->all());
    //jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()->route('mahasiswas.index')
    ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }
    public function show($Nim)
    {
    //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
    $Mahasiswas = Mahasiswa::find($Nim);
    return view('mahasiswas.detail', compact('Mahasiswas'));
    }
    public function edit($Nim)
    {
    //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
    $Mahasiswas = Mahasiswa::find($Nim);
    return view('mahasiswas.edit', compact('Mahasiswas'));
    }
    public function update(Request $request, $Nim)
    {
    //melakukan validasi data
    $request->validate([
        'Nim' => 'required',
        'Nama' => 'required',
        'Kelas' => 'required',
        'Jurusan' => 'required',
        'No_Handphone' => 'required',
        'Email' => 'required',
        'Tanggal_Lahir' => 'required',

        ]);
    //fungsi eloquent untuk mengupdate data inputan kita
        Mahasiswa::find($Nim)->update($request->all());
    //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('mahasiswas.index')
        ->with('success', 'Mahasiswa Berhasil Diupdate');
        }
        public function destroy( $Nim)
        {
    //fungsi eloquent untuk menghapus data
        Mahasiswa::find($Nim)->delete();
        return redirect()->route('mahasiswas.index')
        -> with('success', 'Mahasiswa Berhasil Dihapus');
        }
    };