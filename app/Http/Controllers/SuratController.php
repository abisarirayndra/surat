<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\SuratKtp;
use App\SuratTidakMampu;
use App\SuratUsaha;
use Alert;
use PDF;

class SuratController extends Controller
{
    public function suratWarga(){
        $user = Auth::user()->email;
        $surat_ktp = SuratKtp::where('warga_id', Auth::user()->id)->get();
        $surat_tidakmampu = SuratTidakMampu::where('warga_id', Auth::user()->id)->get();
        $surat_usaha = SuratUsaha::where('warga_id', Auth::user()->id)->get();
        return view('warga.surat', compact('user','surat_ktp','surat_tidakmampu','surat_usaha'));
    }

    public function pilihJenisSurat(){
        $user = Auth::user()->email;
        return view('warga.pilih', compact('user'));
    }

    public function dataSuratKTP(){
        $user = Auth::user()->email;
        return view('warga.surat.ktp', compact('user'));
    }

    public function upDataSuratKTP(Request $request){
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nik' => 'required|max:20',
            'kelamin' => 'required',
            'agama' => 'required',
            'status' =>'required',
            'pekerjaan' => 'required',
        ]);
        SuratKtp::create([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nik' => $request->nik,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'status' => $request->status,
            'pekerjaan' => $request->pekerjaan,
            'warga_id' => Auth::user()->id,
            'jenis_surat' => "Pengajuan KTP",
        ]);

        Alert::toast('Pengajuan Berhasil Dibuat','success');
        return redirect()->route('warga.pengajuan-surat');
    }
    public function dataSuratTidakMampu(){
        $user = Auth::user()->email;
        return view('warga.surat.tidakmampu', compact('user'));
    }

    public function upDataSuratTidakMampu(Request $request){
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nik' => 'required|max:20',
            'kelamin' => 'required',
            'agama' => 'required',
            'kewarganegaraan' =>'required',
            'pekerjaan' => 'required',
            'nama_a' => 'required',
            'tempat_lahir_a' => 'required',
            'tanggal_lahir_a' => 'required',
            'kelamin_a' => 'required',
            'sekolah_a' => 'required',
            'alasan' => 'required',
        ]);
        SuratTidakMampu::create([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nik' => $request->nik,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'kewarganegaraan' => $request->kewarganegaraan,
            'pekerjaan' => $request->pekerjaan,
            'warga_id' => Auth::user()->id,
            'jenis_surat' => "Keterangan Tidak Mampu",
            'nama_a' => $request->nama_a,
            'tempat_lahir_a' => $request->tempat_lahir_a,
            'tanggal_lahir_a' => $request->tanggal_lahir_a,
            'kelamin_a' => $request->kelamin_a,
            'sekolah_a' => $request->sekolah_a,
            'alasan' => $request->alasan,
        ]);

        Alert::toast('Pengajuan Berhasil Dibuat','success');
        return redirect()->route('warga.pengajuan-surat');
    }
    public function dataSuratUsaha(){
        $user = Auth::user()->email;
        return view('warga.surat.usaha', compact('user'));
    }
    public function upDataSuratUsaha(Request $request){
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nik' => 'required|max:20',
            'kelamin' => 'required',
            'agama' => 'required',
            'status' =>'required',
            'pekerjaan' => 'required',
            'usaha' => 'required',
        ]);
        SuratUsaha::create([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nik' => $request->nik,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'status' => $request->status,
            'pekerjaan' => $request->pekerjaan,
            'warga_id' => Auth::user()->id,
            'jenis_surat' => "Usaha",
            'usaha' => $request->usaha,
        ]);

        Alert::toast('Pengajuan Berhasil Dibuat','success');
        return redirect()->route('warga.pengajuan-surat');
    }

    public function operatorSurat(){
        $user = Auth::user()->email;
        $surat_ktp = SuratKtp::all();
        $surat_tidakmampu = SuratTidakMampu::all();
        $surat_usaha = SuratUsaha::all();
        return view('operator.surat', compact('user','surat_ktp','surat_tidakmampu','surat_usaha'));
    }

    public function operatorLihatKTP($id){
        $user = Auth::user()->email;
        $data = SuratKtp::find($id);

        return view('operator.surat.ktp', compact('user','data'));
    }

    public function operatorUpSuratKTP($id, Request $request){
        $request->validate([
            'file_surat' => 'required|mimes:pdf'
        ]);
        $file_name = 'KTP'.$id.'.'.$request->file('file_surat')->extension();
        $surat = $request->file('file_surat');
        $path = public_path('surat/ktp/');
        $surat->move($path, $file_name);
        $ktp = SuratKtp::find($id);
        $ktp->update([
            'file_surat' => $file_name,
        ]);
        Alert::toast('Upload Surat Berhasil','success');
        return redirect()->route('operator.pengajuan-surat');

    }
    public function operatorLihatTidakMampu($id){
        $user = Auth::user()->email;
        $data = SuratTidakMampu::find($id);

        return view('operator.surat.tidakmampu', compact('user','data'));
    }
    public function operatorUpSuratTidakMampu($id, Request $request){
        $request->validate([
            'file_surat' => 'required|mimes:pdf'
        ]);
        $file_name = 'TidakMampu'.$id.'.'.$request->file('file_surat')->extension();
        $surat = $request->file('file_surat');
        $path = public_path('surat/tidakmampu/');
        $surat->move($path, $file_name);
        $ktp = SuratTidakMampu::find($id);
        $ktp->update([
            'file_surat' => $file_name,
        ]);
        Alert::toast('Upload Surat Berhasil','success');
        return redirect()->route('operator.pengajuan-surat');

    }

    public function operatorLihatUsaha($id){
        $user = Auth::user()->email;
        $data = SuratUsaha::find($id);

        return view('operator.surat.usaha', compact('user','data'));
    }

    public function operatorUpSuratUsaha($id, Request $request){
        $request->validate([
            'file_surat' => 'required|mimes:pdf'
        ]);
        $file_name = 'Usaha'.$id.'.'.$request->file('file_surat')->extension();
        $surat = $request->file('file_surat');
        $path = public_path('surat/usaha/');
        $surat->move($path, $file_name);
        $ktp = SuratUsaha::find($id);
        $ktp->update([
            'file_surat' => $file_name,
        ]);
        Alert::toast('Upload Surat Berhasil','success');
        return redirect()->route('operator.pengajuan-surat');

    }

    public function hapusKTP($id){
        $ktp = SuratKtp::find($id);
        $ktp->delete();
        Alert::toast('Hapus Pengajuan KTP Berhasil','success');
        return redirect()->back();
    }

    public function hapusTidakMampu($id){
        $ktp = SuratTidakMampu::find($id);
        $ktp->delete();
        Alert::toast('Hapus Pengajuan Keterangan Tidak Mampu Berhasil','success');
        return redirect()->back();
    }

    public function hapusUsaha($id){
        $ktp = SuratUsaha::find($id);
        $ktp->delete();
        Alert::toast('Hapus Pengajuan Surat Usaha','success');
        return redirect()->back();
    }

    public function pdfKTP($id){
        $user = Auth::user()->email;
        $ktp = SuratKtp::find($id);
        return view('warga.surat.file-ktp', compact('ktp','user'));
    }

    public function pdfTidakMampu($id){
        $user = Auth::user()->email;
        $tidakmampu = SuratTidakMampu::find($id);
        return view('warga.surat.file-tidakmampu', compact('tidakmampu','user'));
    }

    public function pdfUsaha($id){
        $user = Auth::user()->email;
        $usaha = SuratUsaha::find($id);
        return view('warga.surat.file-usaha', compact('usaha','user'));
    }
}
