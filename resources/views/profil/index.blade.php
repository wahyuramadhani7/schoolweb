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
                       <a class="nav-link" href="{{ route('kontak.index') }}">Kontak</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>

   <section id="profil" class="py-5">
       <div class="container">
           <h1 class="mb-4">Profil MTS Muhammadiyah 3 Kunduran</h1>
           <div class="row">
               <div class="col-md-6">
                   <img src="img/mts.jpg" alt="MTS Muhammadiyah 3 Kunduran" class="img-fluid mb-4">
               </div>
               <div class="col-md-6">
                   <h2>Identitas Satuan Pendidikan</h2>
                   <ul>
                       <li><strong>Nama:</strong> MTSS Muhammadiyah 3</li>
                       <li><strong>NPSN:</strong> 20363975</li>
                       <li><strong>Alamat:</strong> JL. BEJIREJO-KUNDURAN, Bejirejo, Kec. Kunduran, Kab. Blora, Jawa Tengah</li>
                       <li><strong>Status Sekolah:</strong> Swasta</li>
                       <li><strong>Naungan:</strong> Kementerian Agama</li>
                   </ul>

                   <h2>Dokumen dan Perizinan</h2>
                   <ul>
                       <li><strong>No. SK. Pendirian:</strong> E-1/89/MPK/VII/1987</li>
                       <li><strong>Tanggal SK. Pendirian:</strong> 1987-07-20</li>
                       <li><strong>No. SK. Operasional:</strong> Wk/5.c/34/Pgm/Is/198</li>
                       <li><strong>Tanggal SK. Operasional:</strong> 1988-05-10</li>
                       <li><strong>Akreditasi:</strong> B</li>
                       <li><strong>No. SK. Akreditasi:</strong> 165/BAP-SM/XI/2017</li>
                       <li><strong>Tanggal SK. Akreditasi:</strong> 09-11-2017</li>
                   </ul>

                   <h2>Sarana Prasarana</h2>
                   <ul>
                       <li>Sumber Listrik: PLN</li>
                       <li>Akses Internet: Ada</li>
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
