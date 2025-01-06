<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MTS Muhammadiyah 3 Kunduran</title>
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

       .hero-section {
           background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('img/background.jpg') center/cover no-repeat;
           min-height: 500px;
           display: flex;
           align-items: center;
           justify-content: center;
           text-align: center;
           color: var(--light-color);
       }

       .hero-content {
           max-width: 800px;
           padding: 0 1rem;
       }

       .hero-content h1 {
           font-size: 3rem;
           font-weight: bold;
           margin-bottom: 1rem;
       }

       .hero-content p {
           font-size: 1.25rem;
           margin-bottom: 2rem;
       }

       .features-section {
           padding: 4rem 0;
           background-color: var(--light-color);
       }

       .feature-card {
           height: 100%;
           background: white;
           border-radius: 10px;
           box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
           padding: 2rem;
           text-align: center;
           transition: all 0.3s ease;
       }

       .feature-card:hover {
           transform: translateY(-5px);
           box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
       }

       .feature-icon {
           font-size: 3rem;
           color: var(--secondary-color);
           margin-bottom: 1rem;
       }

       .feature-card h3 {
           font-size: 1.5rem;
           font-weight: bold;
           margin-bottom: 1rem;
       }

       .feature-card p {
           margin-bottom: 1.5rem;
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
                        <a class="nav-link" href="{{ route('profil.index') }}">profil</a>
                    </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('berita.show') }}">Berita</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">Galeri</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">Kontak</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>

   <section class="hero-section">
       <div class="hero-content">
           <h1>MTS Muhammadiyah 3 Kunduran</h1>
           <p>Mendidik Generasi Unggul dengan Nilai-nilai Islami dan Prestasi Akademik</p>
           <a href="#" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
       </div>
   </section>

   <section class="features-section">
       <div class="container">
           <div class="row g-4">
               <div class="col-md-4">
                   <div class="feature-card h-100">
                       <div class="feature-icon">
                           <i class="fas fa-newspaper"></i>
                       </div>
                       <h3>Berita Terbaru</h3>
                       <p>Ikuti perkembangan terkini dan prestasi membanggakan sekolah kami melalui berita terupdate.</p>
                       <a href="#" class="btn btn-primary">Baca Berita</a>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="feature-card h-100">
                       <div class="feature-icon">
                           <i class="fas fa-images"></i>
                       </div>
                       <h3>Galeri Kegiatan</h3>
                       <p>Saksikan koleksi foto kegiatan dan momen berharga yang menggambarkan kehidupan sekolah kami.</p>
                       <a href="#" class="btn btn-primary">Lihat Galeri</a>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="feature-card h-100">
                       <div class="feature-icon">
                           <i class="fas fa-phone-alt"></i>
                       </div>
                       <h3>Hubungi Kami</h3>
                       <p>Dapatkan informasi lebih lanjut tentang pendaftaran dan program unggulan kami.</p>
                       <a href="#" class="btn btn-primary">Kontak Kami</a>
                   </div>
               </div>
           </div>
       </div>
   </section>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>