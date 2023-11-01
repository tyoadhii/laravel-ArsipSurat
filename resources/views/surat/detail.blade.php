@extends('layouts.master')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Sistem Informasi Pengarsipan Dokumen >> Lihat</h3>
            </div>
        </div>
    </div>

    <section class="section mt-3">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-3">Nomor</dt>
                                <dd class="col-sm-9">: {{ $data->nomor_surat }}</dd>

                                <dt class="col-sm-3">Kategori</dt>
                                <dd class="col-sm-9 text-capitalize">: {{ $data->kategori }}</dd>

                                <dt class="col-sm-3">Judul</dt>
                                <dd class="col-sm-9">: {{ $data->judul }}</dd>

                                <dt class="col-sm-3">Waktu Unggah</dt>
                                <dd class="col-sm-9">: {{ date('Y-m-d h:i', strtotime($data->created_at)) }}</dd>
                            </dl>
                            <embed src="{{ asset($data->file_surat) }}" width="100%" height="500" alt="pdf" />

                            <div class="mt-3">
                                <a href="{{ route('surat.index') }}" class="btn btn-light-secondary">
                                    << Kembali</a>
                                <a href="{{ asset($data->file_surat) }}"
                                    class="btn btn-warning mx-3">Unduh</a>
                                <!-- <a href="#"
                                    class="btn btn-primary">Edit/Ganti File</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
