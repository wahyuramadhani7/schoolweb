<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Galeri - MTS Muhammadiyah 3 Kunduran</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   <style>
       :root {
           --primary-color: #1A237E;
           --secondary-color: #3F51B5;
           --light-color: #E8EAF6;
           --dark-color: #000;
       }

       body {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
       }

       .navbar {
           background-color: var(--primary-color);
       }

       .nav-link {
           color: var(--light-color);
           font-weight: bold;
       }
   </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg">
       <div class="container">
           <a class="navbar-brand text-white" href="#">MTS Muhammadiyah 3 Kunduran</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('home') }}">Home</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('profil.index') }}">Profil</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('berita.index') }}">Berita</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('galeri.index') }}">Galeri</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('kontak.index') }}">Kontak</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>

   <section class="py-5">
       <div class="container">
           <h1 class="mb-4">Galeri</h1>
           <div class="row">
               <div class="col-md-4 mb-4">
                   <img src="/api/placeholder/400/320" alt="Gambar 1" class="img-fluid">
               </div>
               <div class="col-md-4 mb-4">
                   <img src="/api/placeholder/400/320" alt="Gambar 2" class="img-fluid">
               </div>
               <div class="col-md-4 mb-4">
                   <img src="/api/placeholder/400/320" alt="Gambar 3" class="img-fluid">
               </div>
               <div class="col-md-4 mb-4">
                   <img src="/api/placeholder/400/320" alt="Gambar 4" class="img-fluid">  
               </div>
               <div class="col-md-4 mb-4">
                   <img src="/api/placeholder/400/320" alt="Gambar 5" class="img-fluid">
               </div>
               <div class="col-md-4 mb-4">
                   <img src="/api/placeholder/400/320" alt="Gambar 6" class="img-fluid">
               </div>
           </div>
       </div>
   </section>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>