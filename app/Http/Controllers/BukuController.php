<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Buku;
use Symfony\Contracts\Service\Attribute\Required;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_buku = DB::table('buku')
            ->join('pengarang', 'pengarang.id', '=', 'buku.idpengarang')
            ->join('penerbit', 'penerbit.id', '=', 'buku.idpenerbit')
            ->join('kategori', 'kategori.id', '=', 'buku.idkategori')
            ->select('buku.*', 'pengarang.nama', 'penerbit.nama AS pen', 'kategori.nama AS kat')
            ->get();
            
        return view('buku.index', compact('ar_buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengarahkan ke halaman form input
        return view('buku.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //proses validasi data
        $validated = $request->validate(
            [
                'isbn'=>'required|numeric|unique:buku',
                'judul'=>'required',
                'tahun_cetak'=>'required|numeric',
                'stok'=>'required|numeric',
                'idpengarang'=>'required|numeric',
                'idpenerbit'=>'required|numeric',
                'idkategori'=>'required|numeric',
                'cover'=>'image|mimes:jpg,png,jpeg,gif|max:1024',
            ],

            [
                //Pesan Error
                'isbn.required'=>'ISBN Wajib di Isi',
                'isbn.numeric'=>'ISBN Harus Berupa Angka',
                'isbn.unique'=>'ISBN Tidak Boleh Sama',
                'judul.required'=>'Judul Wajib di Isi',
                'tahun_cetak.required'=>'Tahun Cetak Wajib di Isi',
                'tahun_cetak.numeric'=>'Tahun Cetak Harus Berupa Angka',
                'stok.required'=>'Stok Wajib di Isi',
                'stok.numeric'=>'Stok Harus Berupa Angka',
                'idpengarang.required'=>'Pengarang Wajib di Isi',
                'idpenerbit.required'=>'Penerbit Wajib di Isi',
                'idkategori.required'=>'Kategori Buku Wajib di Isi',
                'cover.image'=>'File ektensi harus jpg,jpeg,png,gif',
                'cover.max'=> 'Ukuran File Maksimal 1024 KB',
            ]);

        if (!empty($request->cover)) {
            $fileName = $request->isbn.'.'.$request->cover->extension();
            $request->cover->move(public_path('images'), $fileName);
        } else {
            $fileName = '';
        }

        //proses input data
        // 1. tangkap request form
        DB::table('buku')->insert(
            [
                'isbn' => $request->isbn,
                'judul' => $request->judul,
                'tahun_cetak' => $request->tahun_cetak,
                'stok' => $request->stok,
                'idpengarang' => $request->idpengarang,
                'idpenerbit' => $request->idpenerbit,
                'idkategori' => $request->idpenerbit,
                'cover' => $fileName,
            ]
        );

        //2. landing page
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail buku
        $ar_buku = DB::table('buku')
            ->join('pengarang', 'pengarang.id', '=', 'buku.idpengarang')
            ->join('penerbit', 'penerbit.id', '=', 'buku.idpenerbit')
            ->join('kategori', 'kategori.id', '=', 'buku.idkategori')
            ->select('buku.*', 'pengarang.nama', 'penerbit.nama AS pen', 'kategori.nama AS kat')
        ->where('buku.id', $id)->get();

        return view('buku.show', compact('ar_buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mengarahkan ke halaman form edit
        $data = DB::table('buku')->where('id', $id)->get();

        return view('buku.form_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //mengedit data
        // 1. proses ubah data
        DB::table('buku')->where('id',$id)->update(
            [
                'isbn' => $request->isbn,
                'judul' => $request->judul,
                'tahun_cetak' => $request->tahun_cetak,
                'stok' => $request->stok,
                'idpengarang' => $request->idpengarang,
                'idpenerbit' => $request->idpenerbit,
                'idkategori' => $request->idpenerbit,
                'cover' => $request->cover,
            ]
        );

        //2. landing page
        return redirect('/buku'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //menghapus data
        //1. hapus data
        DB::table('buku')->where('id', $id)->delete();

        //2. landing page
        return redirect('/buku');
    }
}