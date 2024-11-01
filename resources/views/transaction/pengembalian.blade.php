            @extends('admin.index')

            @section('content')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Daftar Pengembalian</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <a href="/pengembalian/cetak" type="button"
                                class="btn btn-sm btn-outline-secondary">Cetak</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">No</th>
                            <th scope="col">Anggota</th>
                            <th scope="col">Buku</th>
                            <th scope="col">Tgl Pinjam</th>
                            <th scope="col">Tgl Habis Pinjam</th>
                            <th scope="col">Lama Pinjam</th>
                            <th scope="col">Denda</th>
                            <th scope="col">Keterangan</th>
                        </thead>
                        @foreach ($peminjaman as $no => $hasil)
                        <tr>
                            <th>{{ $no+1 }}</th>
                            <td>{{ $hasil->name }}</td>
                            <td>{{ $hasil->title }}</td>
                            <td>{{ $hasil->tgl_pinjam }}</td>
                            <td>{{ $hasil->tgl_habis_pinjam}}</td>
                            <td>{{ $hasil->lama_pinjam}} hari</td>
                            <td>{{ $hasil->denda}}</td>
                            <td>
                                @if ($hasil->status)
                                Sudah Kembali
                                @if ($hasil->telat)
                                <br>
                                <span class="badge bg-danger">Terlambat {{ $hasil->telat }} hari</span>
                                @endif
                                @else
                                Belum Kembali
                                @endif
                            </td>

                        </tr>
                        @endforeach
                    </table>
                    {{ $peminjaman->links() }}
                </div>
            </main>
            @endsection()