 @extends('templates.index')

 @section('content')
 <main class="flex-shrink-0">
     <div class="container">
         <br>
     </div>
     <div class="container pt-0 pb-5">
         <div class="py-2">
             <div
                 class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                 <h1 class="h2">Riwayat peminjaman</h1>
                 <div class="btn-toolbar mb-2 mb-md-0">
                     <select class="form-control form-select">
                         <option>Jan</option>
                         <option>Feb</option>
                         <option>Mar</option>
                         <option>Apr</option>
                     </select>
                 </div>
             </div>
             <table class="table rwyt">
                 @foreach ($riwayat as $data)
                 <tr>
                     <td><strong>#{{ $data->peminjaman_id }}</strong></td>
                     <td>
                         <img src="https://via.placeholder.com/800x1000?text=Contoh Buku" class="img-fluid"
                             style="width: 75px;">
                         <span>{{ $data->title }}</span>
                     </td>
                     <td>{{ $data->tgl_pinjam }}</td>
                     <td>{{ $data->tgl_habis_pinjam }}</td>
                     <td>{{ $data->tgl_kembali ? $data->tgl_kembali : 'Belum dikembalikan' }}</td>
                     <td>{{ $data->status }}</td>
                 </tr>
                 @endforeach
             </table>

             <div class="mt-4">
                 {{ $riwayat->links() }}
             </div>
         </div>
     </div>
 </main>
 @endsection()