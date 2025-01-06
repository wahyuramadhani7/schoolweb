<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kontak - MTS Muhammadiyah 3 Kunduran</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

       .btn-primary {
           background-color: var(--secondary-color);
           border: none;
       }

       .btn-primary:hover {
           background-color: #283593;
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

   <div class="container py-5">
       <h1 class="mb-4">Kontak Kami</h1>

       <div class="row">
           <div class="col-md-6">
               <h4>Informasi Kontak</h4>
               <p>
                   MTS Muhammadiyah 3 Kunduran<br>
                   Jl. Pesantren No. 3, Kunduran, Jawa Tengah<br>
                   Telepon: 123-456-7890<br>
                   Email: info@mtsmuhammadiyah3kunduran.sch.id
               </p>
           </div>
           <div class="col-md-6">
               <h4>Kirim Pesan</h4>
               <form>
                   <div class="mb-3">
                       <label for="nama" class="form-label">Nama</label>
                       <input type="text" class="form-control" id="nama" required>
                   </div>
                   <div class="mb-3">
                       <label for="email" class="form-label">Email</label>
                       <input type="email" class="form-control" id="email" required>
                   </div>
                   <div class="mb-3">
                       <label for="pesan" class="form-label">Pesan</label>
                       <textarea class="form-control" id="pesan" rows="5" required></textarea>
                   </div>
                   <button type="submit" class="btn btn-primary">Kirim</button>
               </form>
           </div>
       </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>