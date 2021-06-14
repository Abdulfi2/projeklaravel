<?php

namespace App\Http\Controllers;
use Illuminate\Http\request;
class MahasiswaController extends Controller {
    public function dataMahasiswa(){
        $mhs1 = 'Abdul'; $asal1 = 'Depok';
        $mhs2 = 'Faqih'; $asal2 = 'Bandung';
        return view('data_mahasiswa',
            compact('mhs1','mhs2','asal1','asal2')
        );
    }
}
?>