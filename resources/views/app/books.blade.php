 @extends('templates.index')

 @section('content')
 <main class="flex-shrink-0">
     <div class="container">
         <div class="p-5 mb-4 text-white bg-body-tertiary rounded-3" style="background-color:#8E7AB5!important">
             <div class="container-fluid py-5">
                 <div class="row">
                     <div class="col-10">
                         <h1 class="display-5 fw-bold">Buku untuk Semua</h1>
                         <p class="col-md-8 fs-4">Akses di mana pun, kapan pun, Baca buku yuk!</p>
                         <div class="row">
                             <div class="col-8">
                                 <form action="/books" method="get">
                                     <div class="input-group shadow-sm mt-5">
                                         <input type="text" name="q" class="form-control py-3 border-0 px-1"
                                             placeholder="Cari buku disini" value="">
                                         <div class="bg-white my-auto" style="padding: 9px;">
                                             <button class="btn btn-primary" type="submit">Cari</button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="container pt-0 pb-5">
         <div class="py-2">
             <div
                 class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                 <h1 class="h2">Daftar Buku</h1>
                 <div class="btn-toolbar mb-2 mb-md-0">
                     <span><strong>Hasil Pencarian :</strong> <em class="dotted">{{ $keyword }}</em></span>
                 </div>
             </div>
             <div class="mt-4 row row-cols-2 row-cols-sm-4 row-cols-md-6 g-3">
                 @foreach($books as $book)
                 <div class="col">
                     <a href="/book/detail/{{ $book->id }}" class="nourl">
                         <div class="card shadow-sm books-link">
                             <img src="https://via.placeholder.com/800x1000?text={{ $book->title }}" class="img-fluid">
                             <div class="card-body">
                                 <p class="card-text">{{ $book->title }}</p>
                             </div>
                         </div>
                     </a>
                 </div>
                 @endforeach()
             </div>

             <div class="d-flex justify-content-around mt-4">
                 {{ $books->links() }}
             </div>
         </div>
     </div>
 </main>
 @endsection()