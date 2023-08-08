<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="px-4">
    <section>

        <div class="form-box">
            <h1>
                <div class="text-center fw-bolder my-5">FORMULIR PENDAFTARAN ANGGOTA AP2HI</div>
            </h1>
            <div class="content">

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="alert alert-info">
                        <strong>Perusahaan</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">

                            <div class="form-group">
                                <label>Nama Perusahaan</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="Masukan Nama Lengkap">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Tahun Berdiri</label>
                                <input type="date" name="tahun_berdiri" class="form-control"
                                    placeholder="Masukan Nomor NIK">
                            </div>
                            @error('tahun_berdiri')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Alamat Perusahaan</label>
                                <textarea class="form-control" name="alamat_perusahaan" rows="2" id="alamat"></textarea>
                            </div>
                            @error('alamat_perusahaan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Telp. / Fax / Situs Website</label>
                                <input type="text" name="telp_perusahaan" class="form-control">
                            </div>
                            @error('telp_perusahaan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Bidang</label>
                                <textarea class="form-control" name="bidang" rows="2" id="alamat"></textarea>
                            </div>
                            @error('bidang')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <strong>Kantor</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Kantor Cabang & Alamat</label>
                                <textarea class="form-control" name="alamat_cabang" rows="2" id="alamat"></textarea>
                            </div>
                            @error('alamat_cabang')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Telp. / Fax</label>
                                <input type="text" name="telp_cabang" class="form-control">
                            </div>
                            @error('telp_cabang')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <strong>Nomor & Tanggal</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Nomor NPWP**</label>
                                <input type="text" name="npwp" class="form-control">
                            </div>
                            @error('npwp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Nomor IUP**</label>
                                <input type="text" name="iup" class="form-control">
                            </div>
                            @error('iup')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Tanggal IUP**</label>
                                <input type="date" name="tanggal_iup" class="form-control"
                                    placeholder="Masukan Nomor NIK">
                            </div>
                            @error('tanggal_iup')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Nomor SIUP**</label>
                                <input type="text" name="siup" class="form-control">
                            </div>
                            @error('siup')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Tanggal SIUP**</label>
                                <input type="date" name="tanggal_siup" class="form-control"
                                    placeholder="Masukan Nomor NIK">
                            </div>
                            @error('tanggal_siup')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <strong>Modal</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Status Kepemilikan Modal</label>
                                <input type="text" name="modal_status" class="form-control">
                            </div>
                            @error('modal_status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <label><b>Proporsi Modal(%)</b></label><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>PMDN</label>
                                <input type="text" name="pmdn" class="form-control">
                            </div>
                            @error('pmdn')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>PMA</label>
                                <input type="text" name="pma" class="form-control">
                            </div>
                            @error('pma')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Negara Asal PMA</label>
                                <input type="text" name="asal_pma" class="form-control">
                            </div>
                            @error('asal_pma')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <strong>Dokumen Sipil</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Kapal Tangkap</label>
                                <textarea class="form-control" name="kapal_tangkap" rows="2" id="alamat"></textarea>
                            </div>
                            @error('kapal_tangkap')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Kapal Angkut</label>
                                <textarea class="form-control" name="kapal_angkut" rows="2" id="alamat"></textarea>
                            </div>
                            @error('kapal_angkut')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Kapal Pendukung Operasi Pengangkapan Ikan</label>
                                <textarea class="form-control" name="kapal_pendukung" rows="2" id="alamat"></textarea>
                            </div>
                            @error('kapal_pendukung')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Wilayah Operasi Penangkapan</label>
                                <textarea class="form-control" name="wilayah_operasi" rows="2" id="alamat"></textarea>
                            </div>
                            @error('wilayah_operasi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <strong>Jumlah Mitra Nelayan / Supplier</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Nelayan</label>
                                <input type="number" name="nelayan" class="form-control">
                            </div>
                            @error('nelayan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Supplier</label>
                                <input type="number" name="supplier" class="form-control">
                            </div>
                            @error('supplier')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>


                    <div class="alert alert-info">
                        <strong>Jumlah Bagan & Rumpon</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Jumlah Bagan</label>
                                <input type="number" name="bagan" class="form-control">
                            </div>
                            @error('bagan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <label><b>Jumlah Rumpon</b></label>
                    <div class="row">

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Rumpon (Tidak Berizin)</label>
                                <input type="number" name="rumpon_tidak_berizin" class="form-control">
                            </div>
                            @error('rumpon_tidak_berizin')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Rumpon (Berizin)</label>
                                <input type="number" name="rumpon_berizin" class="form-control">
                            </div>
                            @error('rumpon_berizin')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <strong>Jumlah & Kapasitas Cold Sotrage</strong>
                    </div>
                    <div class="row">

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Jumlah Unit</label>
                                <input type="number" name="jumlah_cold_storage" class="form-control">
                            </div>
                            @error('jumlah_cold_storage')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Kapasitas Unit</label>
                                <input type="string" name="kapasitas_cold_storage" class="form-control">
                            </div>
                            @error('kapasitas_cold_storage')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="flex"></div>
                    <button type="submit" class="btn btn-info">Submit</button>
                    {{-- <a href="{{ route('logout') }}">Logout</a> --}}
                </form>
            </div>

        </div>
    </section>

</body>

</html>
