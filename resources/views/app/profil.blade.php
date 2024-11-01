 @extends('templates.index')

 @section('content')
 <main class="flex-shrink-0">
     <div class="container">
         <div class="p-5 mb-4 rounded-3">
             <div class="container-fluid py-5">
                 <div class="row">
                     <div class="col-12 col-lg-4">
                         <div class="card" style="border-color: transparent;">
                             <div class="card-body bg-body-tertiary rounded-3">
                                 <div class="d-flex justify-content-center align-items-center flex-column">
                                     <div class="avatar avatar-2xl">
                                         <img style="height: 250px;width: auto; border-radius: 100%;"
                                             src="https://via.placeholder.com/250x250?text=D">
                                     </div>
                                     <h3 class="mt-3">{{ Auth()->user()->name }}</h3>
                                     <p class="text-small"></p>
                                     <button data-bs-toggle="modal" data-bs-target="#img"
                                         class="btn btn-outline-dark font-bold">Ubah Foto</button><br>
                                     <span class="m-1 badge bg-primary">{{ Auth()->user()->role }}</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-12 col-lg-8">
                         <div class="card" style="border-color: transparent;">
                             <div class="card-body bg-body-tertiary rounded-3">
                                 <form action="" method="post">
                                     <div class="form-group">
                                         <label for="name" class="form-label">Nama Lengkap</label>
                                         <input type="text" name="fullname" class="form-control"
                                             value="{{ Auth()->user()->name }}" required>
                                     </div>
                                     <div class="form-group">
                                         <label for="email" class="form-label">Email</label>
                                         <input type="text" name="email" class="form-control"
                                             value="{{ Auth()->user()->email }}" required>
                                     </div>
                                     <div class="form-group mt-4">
                                         <button type="submit" class="btn btn-primary">Simpan</button>
                                 </form>
                                 <button type="button" data-bs-toggle="modal" data-bs-target="#password"
                                     class="btn btn-warning">Ubah Password</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
 </main>
 @endsection()