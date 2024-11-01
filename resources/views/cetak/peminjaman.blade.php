            @extends('admin.cetak')

            @section('content')
            <main class="">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Daftar Peminjaman</h1>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">No</th>
                            <th scope="col">Anggota</th>
                            <th scope="col">Buku</th>
                            <th scope="col">Tgl Pinjam</th>
                            <th scope="col">Tgl Habis Pinjam</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </thead>
                        @foreach ($peminjaman as $no => $hasil)
                        <tr>
                            <th>{{ $no+1 }}</th>
                            <td>{{ $hasil->name }}</td>
                            <td>{{ $hasil->title }}</td>
                            <td>{{ $hasil->tgl_pinjam }}</td>
                            <td>{{ $hasil->tgl_habis_pinjam}}</td>
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
                            <td>
                                @if(!$hasil->status)
                                <a href="/peminjaman/kembali/{{$hasil->peminjaman_id}}" type="submit"
                                    class="btn btn-success btn-sm">Kembalikan</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </main>
            @endsection()