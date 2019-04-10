<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//lib untk query builder
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
	
	//menangkap data dr route dengan key nama, maka lgsg saja dipanggil dengan variabel $nama
	/*function index($nama)
	{
		return $nama;
	}

	public function formulir()
	{
		return view('formulir');
	}*/

	//tangkap kiriman parameter dengan key request dari form nama cast Request
	public function proses(Request $request)
	{
		//tangkap nilai
		$nama = $request->input('nama');
		$alamat = $request->input('alamat');
		return "Nama : ".$nama.", Alamat : ".$alamat;
	}

	//crud dengan query builder
	//read
	public function index()
	{
		//mengambil semua data dari tabel pegawai
		//fungsi get() mengambil data dari table yg dipilih
		//dan data disimpan ke dalam variabel $pegawai
		//$pegawai = DB::table('pegawai')->get();

		//membuat pagination
		//mengambil data dari tabel pegawai
		//tampilkan data per row 10
		$pegawai = DB::table('pegawai')->paginate(10);

		//mengirim data pegawai ke view index
		//error tutup kurung [] tidak sampai akhir
		return view('index',['pegawai' => $pegawai]);
	}

	public function cari(Request $request)
	{
		//menagkat data pencarian
		$cari = $request->cari;
		//mengambil data dari tabel pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
			->where('pegawai_nama', 'like', "%".$cari."%")
			->paginate(10);
		//mengirim data pegawai ke view index
		return view('index', ['pegawai' => $pegawai]);
	}

// 	jika error (2/2) QueryException
// SQLSTATE[HY000] [1045] Access denied for user 'homestead'@'localhost' (using password: YES) (SQL: select * from `pegawai`)
	// maka restart serve dengan ctrl + c , php artisan serve
	//create
	public function tambah()
	{
		//memanggil view tambah
		return view('tambah');
	}

	//tangkap nilai dari form
	public function store(Request $request)
	{
		//insert data ke tabel pegawai
		DB::table('pegawai')->insert([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);

		//alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

	//edit data
	public function edit($id)
	{
		//mengambil data dengan query builder pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
		//passing data ke view edit.blade.php
		return view('edit', ['pegawai' => $pegawai]);
	}

	//update data pegawai
	public function update(Request $request)
	{
		//update data pegawai
		DB::table('pegawai')->where('pegawai_id', $request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);

		//alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

	//menghapus
	public function hapus($id)
	{
		//menghapus data pegawai berdasarkan id pegawai
		DB::table('pegawai')->where('pegawai_id', $id)->delete();

		//alihkan halaman ke pegawai
		return redirect('/pegawai');
	}
}
 ?>