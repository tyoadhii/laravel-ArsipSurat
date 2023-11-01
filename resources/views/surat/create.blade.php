@extends('layouts.master')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Sistem Informasi Pengarsipan Dokumen >> Unggah</h3>
                <p class="text-subtitle text-muted">
                    Unggah dokumen yang telah terbit pada form ini untuk diarsipkan. <br>
                    Catatan: <br>
                    <i class="bi bi-record align-middle ms-3" style="font-size: 12px"></i> Gunakan file berformat PDF
                </p>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('surat.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nomor Dokumen</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="Dokumen" class="form-control" name="nomor_surat"
                                                placeholder="Misal: 2022/PD3/TU/022">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kategori</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select" id="kategori" name="kategori">
                                                <option value="undangan">Undangan</option>
                                                <option value="pengumuman">Pengumuman</option>
                                                <option value="nota dinas">Nota Dinas</option>
                                                <option value="pemberitahuan">Pemberitahuan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Judul</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="judul" class="form-control" name="judul"
                                                placeholder="Judul">
                                        </div>
                                        <div class="col-md-4">
                                            <label>File Dokumen (PDF)</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input class="form-control" type="file" id="file_Dokumen" name="file_surat">
                                        </div>
                                        <div class="col-sm-12 mt-5">
                                            <a href="{{ route('surat.index') }}" class="btn btn-light-secondary me-1 mb-1"><< Kembali</a>
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
