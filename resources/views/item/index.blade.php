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
                                <h3>Item List</h3>
                                <!-- Filter Pencarian di sebelah kanan -->
                                <div class="input-group" style="max-width: 200px;">
                                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="bi bi-search"></i> <!-- Icon pencarian -->
                                    </button>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between align-items-center my-3">
                                <!-- Button Add di kiri -->
                                <div>
                                    <button type="submit" name="cetak" class="btn btn-primary rounded-4 px-4">Add</button>
                                </div>

                                <!-- Button Print Label dan Download PDF di kanan -->
                                <div>
                                    <button type="button" class="btn btn-warning rounded-4 me-2">Print Label</button>
                                    <button type="button" class="btn btn-danger rounded-4">Download PDF</button>
                                </div>
                            </div>



                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 fs-5">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Item Name</th>
                                        <th>Brand</th>
                                        <th>Item Code</th>
                                        <th>QRcode</th>
                                        <th>Item Type</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">1</td>
                                        <td class="text-bold-500">Infocus</td>
                                        <td>Canon</td>
                                        <td class="text-bold-500">1234567</td>
                                        <td>kiw</td>
                                        <td class="text-bold-500">Learning Item</td>
                                        <td class="text-bold-500">Available</td>
                                        <td>Kiw</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">1</td>
                                        <td class="text-bold-500">Infocus</td>
                                        <td>Canon</td>
                                        <td class="text-bold-500">1234567</td>
                                        <td>kiw</td>
                                        <td class="text-bold-500">Learning Item</td>
                                        <td class="text-bold-500">Available</td>
                                        <td>Kiw</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">1</td>
                                        <td class="text-bold-500">Infocus</td>
                                        <td>Canon</td>
                                        <td class="text-bold-500">1234567</td>
                                        <td>kiw</td>
                                        <td class="text-bold-500">Learning Item</td>
                                        <td class="text-bold-500">Available</td>
                                        <td>Kiw</td>
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
