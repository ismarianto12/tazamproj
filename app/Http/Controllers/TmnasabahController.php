<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tmnasabah;
use DataTables;

class TmnasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $request;
    protected $route;
    protected $view;
    function __construct(Request $request)
    {
        $this->request = $request;
        $this->view    = '.tmnasabah.';
        $this->route   = 'master.nasabah.';
    }


    public function index()
    {
        $title = 'Data nasabah';
        return view($this->view . 'index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Nasabah';
        return view($this->view . 'form_add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->request->validate([
            'no_ktp' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'propinsi' => 'required',
            'kecamatan' => 'required',
            'kodepos' => 'required|integer',
            'alamat_domisili' => 'required',
            'kelurahan_domisili' => 'required',
            'kecamatan_domisili' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'status_pernikahan' => 'required',
            'kewarganegaraan' => 'required',
            'nama_ibu_kandung' => 'required',
            'npwp' => 'required|integer',
            'tlp_rumah' => 'required|integer',
            'hp' => 'required|integer',
            'email' => 'required',
            'jenis_pekerjaan' => 'required'
        ]);
        try {
            $f = new Tmnasabah;
            $f->no_ktp = $this->request->no_ktp;
            $f->nama = $this->request->nama;
            $f->alamat = $this->request->alamat;
            $f->kelurahan = $this->request->kelurahan;
            $f->propinsi = $this->request->propinsi;
            $f->kecamatan = $this->request->kecamatan;
            $f->kodepos = $this->request->kodepos;
            $f->alamat_domisili = $this->request->alamat_domisili;
            $f->kelurahan_domisili = $this->request->kelurahan_domisili;
            $f->kecamatan_domisili = $this->request->kecamatan_domisili;
            $f->tempat_lahir = $this->request->tempat_lahir;
            $f->tgl_lahir = $this->request->tgl_lahir;
            $f->jk = $this->request->jk;
            $f->status_pernikahan = $this->request->status_pernikahan;
            $f->kewarganegaraan = $this->request->kewarganegaraan;
            $f->nama_ibu_kandung = $this->request->nama_ibu_kandung;
            $f->npwp = $this->request->npwp;
            $f->tlp_rumah = $this->request->tlp_rumah;
            $f->hp = $this->request->hp;
            $f->email = $this->request->email;
            $f->jenis_pekerjaan = $this->request->jenis_pekerjaan;
            $f->users_id = 1;
            $f->save();

            return response()->json([
                'status' => 1,
                'msg' => 'Data berhasil di simpan'
            ]);
        } catch (Tmnasabah $tmnasabah) {
            return response()->json([
                'status' => 2,
                'msg' => 'Data gagal di simpan'
            ]);
        }
    }
    public function api()
    {
        $data = Tmnasabah::with(['user:username,name'])->get();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('usercreate', function ($p) {
                return ($p->name) ? $p->name : 'kosong';
            }, true)
            ->editColumn('jeniskl', function ($p) {
                return ($p->jk == 'L') ? "Laki -laki" : 'Perempuan';
            }, true)

            ->editColumn('action', function ($p) {
                return  '<a href="" class="btn btn-primary btn-xs" id="edit" data-id="' . $p->id . '">Edit </a> <a href=""  class="btn btn-info btn-xs" id="delete"  data-id="' . $p->id . '">Detail </a>';
            }, true)

            ->addIndexColumn()
            ->rawColumns(['usercreate', 'action', 'id'])
            ->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f = Tmnasabah::find($id);
        $title = 'Edit data Nasabah';
        return view($this->view . 'form_edit', [
            'title' => $title,
            'id' => $id,
            'no_ktp' => $f->no_ktp,
            'nama' => $f->nama,
            'alamat' => $f->alamat,
            'kelurahan' => $f->kelurahan,
            'propinsi' => $f->propinsi,
            'kecamatan' => $f->kecamatan,
            'kodepos' => $f->kodepos,
            'alamat_domisili' => $f->alamat_domisili,
            'kelurahan_domisili' => $f->kelurahan_domisili,
            'kecamatan_domisili' => $f->kecamatan_domisili,
            'tempat_lahir' => $f->tempat_lahir,
            'tgl_lahir' => $f->tgl_lahir,
            'jk' => $f->jk,
            'status_pernikahan' => $f->status_pernikahan,
            'kewarganegaraan' => $f->kewarganegaraan,
            'nama_ibu_kandung' => $f->nama_ibu_kandung,
            'npwp' => $f->npwp,
            'tlp_rumah' => $f->tlp_rumah,
            'hp' => $f->hp,
            'email' => $f->email,
            'jenis_pekerjaan' => $f->jenis_pekerjaan,
            'users_id' => $f->users_id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $this->request->validate([
            'no_ktp' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'propinsi' => 'required',
            'kecamatan' => 'required',
            'kodepos' => 'required|integer',
            'alamat_domisili' => 'required',
            'kelurahan_domisili' => 'required',
            'kecamatan_domisili' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'status_pernikahan' => 'required',
            'kewarganegaraan' => 'required',
            'nama_ibu_kandung' => 'required',
            'npwp' => 'required|integer',
            'tlp_rumah' => 'required|integer',
            'hp' => 'required|integer',
            'email' => 'required',
            'jenis_pekerjaan' => 'required'
        ]);
        try {
            $f = new Tmnasabah;
            $f->no_ktp = $this->request->no_ktp;
            $f->nama = $this->request->nama;
            $f->alamat = $this->request->alamat;
            $f->kelurahan = $this->request->kelurahan;
            $f->propinsi = $this->request->propinsi;
            $f->kecamatan = $this->request->kecamatan;
            $f->kodepos = $this->request->kodepos;
            $f->alamat_domisili = $this->request->alamat_domisili;
            $f->kelurahan_domisili = $this->request->kelurahan_domisili;
            $f->kecamatan_domisili = $this->request->kecamatan_domisili;
            $f->tempat_lahir = $this->request->tempat_lahir;
            $f->tgl_lahir = $this->request->tgl_lahir;
            $f->jk = $this->request->jk;
            $f->status_pernikahan = $this->request->status_pernikahan;
            $f->kewarganegaraan = $this->request->kewarganegaraan;
            $f->nama_ibu_kandung = $this->request->nama_ibu_kandung;
            $f->npwp = $this->request->npwp;
            $f->tlp_rumah = $this->request->tlp_rumah;
            $f->hp = $this->request->hp;
            $f->email = $this->request->email;
            $f->jenis_pekerjaan = $this->request->jenis_pekerjaan;
            $f->users_id = $this->request->users_id;

            $f->find($id)->save();

            return response()->json([
                'status' => 1,
                'msg' => 'Data berhasil di simpan'
            ]);
        } catch (Tmnasabah $tmnasabah) {
            return response()->json([
                'status' => 2,
                'msg' => 'Data gagal di simpan'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            if (is_array($this->request->id))
                Tmnasabah::whereIn('id', $this->request->id)->delete();
            else
                Tmnasabah::whereid($this->request->id)->delete();
            return response()->json([
                'status' => 1,
                'msg' => 'Data berhasil di hapus'
            ]);
        } catch (Tmnasabah $tmnasabah) {
            return response()->json([
                'status' => 2,
                'msg' => 'Data gagal di hapus'
            ]);
        }
    }
}
