@extends('layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Update Barang</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Update Barang</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input barang</h5>

                            <!-- General Form Elements -->
                            <form action="" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('nama_barang') is-invalid @enderror"
                                            id="validationCustom03" required name="nama_barang"
                                            value="{{ $barang->nama_barang }}">
                                        @error('nama_barang')
                                            <div class="invalid text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText"
                                        class="col-sm-2 col-form-label @error('harga_asli') is-invalid @enderror">Harga
                                        Asli</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="validationCustom03" required
                                            name="harga_asli" value="{{ $barang->harga_asli }}">
                                        @error('harga_asli')
                                            <div class="invalid text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText"
                                        class="col-sm-2 col-form-label @error('harga_jual') is-invalid @enderror">Harga
                                        Jual</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="validationCustom03" required
                                            name="harga_jual" value="{{ $barang->harga_jual }}">
                                        @error('harga_jual')
                                            <div class="invalid text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText"
                                        class="col-sm-2 col-form-label @error('stok') is-invalid @enderror">Stok</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="validationCustom03" required
                                            name="stok" value="{{ $barang->stok }}">
                                        @error('stok')
                                            <div class="invalid text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText"
                                        class="col-sm-2 col-form-label @error('barcode') is-invalid @enderror">Barcode</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="validationCustom03" required
                                            name="barcode" value="{{ $barang->barcode }}">
                                        @error('barcode')
                                            <div class="invalid text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText"
                                        class="col-sm-2 col-form-label @error('foto') is-invalid @enderror">Foto</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="validationCustom03" required
                                            name="foto" value="{{ $barang->foto }}">
                                        @error('foto')
                                            <div class="invalid text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>


            </div>
        </section>
    </main>
@endsection
