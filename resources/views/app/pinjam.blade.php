 @extends('templates.index')

 @section('content')
 <main class="flex-shrink-0">
     <div class="container">
         <br>
     </div>
     <div class="container pt-0 pb-5">
         <div class="py-2">
             <div class="row mb-2">
                 <div class="col-md-6">
                     <div class="row g-0 border rounded overflow-hidden mb-4 shadow-sm position-relative">
                         <div class="col p-4  position-static">
                             <strong class="mb-2 text-primary-emphasis">Kategori Buku</strong>
                             <h3 class="mb-0">{{ $book->title }}</h3>
                             <div class="mb-1 text-body-secondary">{{ $book->author }}, {{ $book->publisher }}</div><br>
                             <span class="my-1 badge text-bg-success">tersedia</span><br><br>
                         </div>

                         <div class="col-auto d-none d-lg-block">
                             <img src="https://via.placeholder.com/800x1000?text=Contoh Buku" class="img-fluid"
                                 style="height: 250px">
                         </div>
                     </div>
    
                 </div>
             </div>
         </div>
 </main>
 @endsection()