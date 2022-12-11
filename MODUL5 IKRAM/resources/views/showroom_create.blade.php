@extends('layouts.main')

@section('part')

<div class="container py-5">
    <h1>Add Car</h1>
    <p>Tambah Mobil Baru Anda ke List Show Room</p>
    <form method="post" action="/showroom/create" enctype="multipart/form-data">
        @csrf
        <label for="mobil" class="fw-bold">Nama Mobil</label>
        <input type="text" id="mobil" class="form-control mb-3" name="name" placeholder="Nama Mobil" required>
        <label for="pemilik" class="fw-bold">Nama Pemilik</label>
        <input type="text" id="pemilik" class="form-control mb-3" name="owner" value="IKRAM ZAIDAN WICAKSONO - 1202204216" readonly>
        <label for="merk" class="fw-bold">Merk</label>
        <input type="text" id="merk" class="form-control mb-3" name="brand" placeholder="Merk Mobil" required>
        <label for="date" class="fw-bold">Tanggal Beli</label>
        <input type="date" id="date" class="form-control mb-3" name="purchase_date" required>
        <label for="deskripsi" class="fw-bold">Deskripsi</label>
        <textarea id="deskripsi" class="form-control mb-3" name="description"></textarea>
        <label for="foto" class="fw-bold">Foto</label>
        <input type="file" id="foto" class="form-control mb-3" name="image">
        <div class="mb-3">
            <div class="fw-bold">Status Pembayaran</div>
            <input type="radio" id="lunas" class="form-check-input me-2" name="status" value="Lunas">
            <label for="lunas" class="font-weight-bold">Lunas</label>
            <input type="radio" id="belum" class="form-check-input ms-3 me-2" name="status" value="Belum Lunas">
            <label for="belum" class="font-weight-bold">Belum Lunas</label>
        </div>
        <button type="submit" class="form-control btn btn-primary">Submit</button>
    </form>
</div>

@endsection