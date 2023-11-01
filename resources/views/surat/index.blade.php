@extends('layouts.master')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Sistem Informasi Pengarsipan Dokumen</h3>
                <p class="text-subtitle text-muted">
                    Berikut ini adalah dokumen yang telah terbit dan diarsipkan. <br>
                    Klik "Lihat" pada kolom aksi untuk menampilkan surat.
                </p>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form action="{{ route('surat.search') }}" method="GET">
                            <div class="row">
                                <div class="col-2 d-flex justify-content-end align-middle">
                                    <span class="mt-2">Cari Surat:</span>
                                </div>
                                <div class="col-8">
                                    <div class="form-group position-relative has-icon-left">
                                        <input type="text" class="form-control" placeholder="search" name="keyword">
                                        <div class="form-control-icon">
                                            <i class="bi bi-search"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-primary" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th>Nomor dokumen</th>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Waktu Pengarsipan</th>
                                            <th style="width: 240px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                            <tr>
                                                <td>{{ $item->nomor_surat }}</td>
                                                <td class="text-capitalize">{{ $item->kategori }}</td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ date('Y-m-d h:i', strtotime($item->created_at)) }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete{{ $item->id }}">
                                                        Hapus
                                                    </button>
                                                    <a href="{{ $item->file_surat }}" class="btn btn-warning btn-sm">Unduh</a>
                                                    <a href="{{ route('surat.show', $item->id) }}" class="btn btn-info btn-sm">Lihat >></a>
                                                </td>
                                            </tr>
                                            <!-- start: CONFIRM DELETE MODAL -->
                                            <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="delete{{ $item->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <form
                                                        action="{{ route('surat.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    Alert
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>
                                                                    Apakah Anda yakin ingin menghapus arsip dokumen ini?
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Batal</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-primary ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Ya!</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- end: CONFIRM DELETE MODAL -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ route('surat.create') }}" class="btn btn-primary">Arsipkan
                                Dokumen..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
