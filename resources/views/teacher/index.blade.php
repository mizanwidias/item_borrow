@extends('be.master')
@section('sidebar')
    @include('be.sidebar')
@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3 text-white"></i>
        </a>
    </header>


    <div class="page-heading d-flex justify-content-between align-items-start">
        <div class="d-flex flex-column">
            <h6 class="text-white fst-italic">Pages / {{$title}}</h6>
            <h5 class="text-white">{{$title}}</h5>
        </div>
        <h5 class="text-white ms-auto"><i class="bi bi-person" style="margin-right: 7px;"></i>John Allion Midor</h5>
    </div>

    <div class="page-content">
        <!-- Striped rows start -->
        <section class="section">
            <div class="row" id="table-striped">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <h3>Teacher List</h3>
                            </div>
                            <!-- Tombol-tombol di bawah judul -->
                            <div class="d-flex justify-content-between ">
                                <!-- Tombol Tambah di kiri -->
                                <a href="#" class="btn btn-primary px-4 py-2 rounded-4 my-4">
                                    <span>Add</span>
                                </a>
                                <!-- Filter Pencarian di sebelah kanan -->
                                <div class="input-group mt-4" style="max-width: 200px; max-height:30px ">
                                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="bi bi-search"></i> <!-- Icon pencarian -->
                                    </button>
                                </div>
                            </div>


                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 fs-5">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Teacher Id</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">1</td>
                                        <td class="text-bold-500">Infocus</td>
                                        <td class="text-bold-500">1234567</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Striped rows end -->
    </div>
    @endsection
