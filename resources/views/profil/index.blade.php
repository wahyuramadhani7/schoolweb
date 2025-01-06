<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profil - MTS Muhammadiyah 3 Kunduran</title>
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

       .btn-primary {
           background-color: var(--secondary-color);
           border: none;
           padding: 0.75rem 1.5rem;
           font-size: 1rem;
           font-weight: bold;
           border-radius: 50px;
           transition: all 0.3s ease;
       }

       .btn-primary:hover {
           background-color: #283593;
           transform: translateY(-2px);
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
                       <a class="nav-link" href="#">Kontak</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>

   <section class="py-5">
       <div class="container">
           <h1 class="mb-4">Profil MTS Muhammadiyah 3 Kunduran</h1>
           <div class="row">
               <div class="col-md-6">
                   <img src="img/school-image.jpg" alt="MTS Muhammadiyah 3 Kunduran" class="img-fluid mb-4">
               </div>
               <div class="col-md-6">
                   <h2>Sejarah Sekolah</h2>
                   <p>MTS Muhammadiyah 3 Kunduran didirikan pada tahun 1990 dengan tujuan memberikan pendidikan berkualitas berbasis nilai-nilai Islami. Sekolah ini telah menorehkan banyak prestasi dan menjadi salah satu sekolah terbaik di wilayah Kunduran.</p>
                   
                   <h2>Visi dan Misi</h2>
                   <p><strong>Visi:</strong> Menjadi sekolah unggul yang menghasilkan lulusan berkarakter Islami, berprestasi, dan berwawasan global.</p>
                   <p><strong>Misi:</strong></p>
                   <ul>
                       <li>Menyelenggarakan pendidikan berkualitas dengan nilai-nilai Islami</li>
                       <li>Mengembangkan potensi peserta didik secara optimal</li>
                       <li>Mempersiapkan peserta didik untuk menjadi pemimpin masa depan</li>
                       <li>Menciptakan lingkungan belajar yang kondusif dan inovatif</li>
                   </ul>

                   <h2>Fasilitas Sekolah</h2>
                   <ul>
                       <li>Ruang kelas modern dengan teknologi pembelajaran terkini</li>
                       <li>Laboratorium sains dan komputer</li>
                       <li>Perpustakaan dengan koleksi buku yang lengkap</li>
                       <li>Lapangan olahraga dan fasilitas kebugaran</li>
                       <li>Masjid untuk kegiatan ibadah dan keagamaan</li>
                   </ul>
               </div>
           </div>
       </div>
   </section>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>