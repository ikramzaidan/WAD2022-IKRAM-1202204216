@extends('layouts.main')

@section('part')

<div class="container py-5">
    <h1>My Show Room</h1>
    <p>List Show Room Ikram - 1202204216</p>
    <div class="row mb-5">
        @foreach ($Showrooms as $car)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <img src="../assets/images/{{ $car->image }}" class="img-thumbnail">
                    <h4 class="mt-3">{{ $car->brand }} {{ $car->name }}</h4>
                    <div class="mb-4">{{ $car->description }}</div>
                    <a href="" class="btn btn-primary px-5 rounded-pill">Detail</a>
                    <a href="" class="btn btn-danger px-5 rounded-pill">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <p class="fw-bold">Jumlah Mobil: </p>
</div>

@endsection