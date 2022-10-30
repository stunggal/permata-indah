@extends('layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Barang</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Barang</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>


                                <div class="card-body pb-0">
                                    <h5 class="card-title">Top Selling <span>| Today</span></h5>
                                    @if (session()->has('success'))
                                        <div class="alert alert-success container">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Foto</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Harga Asli</th>
                                                <th scope="col">Harga Ecer</th>
                                                <th scope="col">Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barangs as $item)
                                                <tr>
                                                    <th scope="row">{{ $item->id }}</th>
                                                    <td><img src="{{ $item->foto }}" alt=""></td>
                                                    <td>
                                                        <a href="/barang/update/{{ $item->id }}"
                                                            class="text-primary fw-bold">{{ $item->nama_barang }}</a>
                                                    </td>
                                                    <td>Rp. {{ $item->harga_asli }}</td>
                                                    <td>Rp. {{ $item->harga_jual }}</td>
                                                    <td class="fw-bold">{{ $item->stok }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Recent Sales -->
            </div>
        </section>
    </main>
@endsection
