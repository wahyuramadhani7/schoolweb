@extends('layouts.app')

@section('content')
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
        <form action="{{ route('kontak.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</div>
@endsection