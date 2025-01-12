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
                            <div class="d-flex justify-content-between align-items-center mb-2 mt-2">
                                <h3>Borrowing List Report</h3>
                            </div>
                            <form action="" method="get" target="_blank">
                                <div class="form-group mb-3">
                                    <label for="kelas">Item:</label>
                                    <select name="item" class="form-control form-select rounded-4 py-2">
                                        <option value="">All Item's</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="jurusan">Borrower's Name:</label>
                                    <select name="Borrower's Name" class="form-control form-select rounded-4 py-2">
                                        <option value="">All Borrower's Name</option>
                                    </select>
                                </div>
                                <div class="row d-flex align-items-end">
                                    <!-- Start Date -->
                                    <div class="col-12 col-md-3 mb-3 mb-md-0">
                                        <label for="awal" class="form-label">Start Date:</label>
                                        <input type="date" name="awal" class="form-control rounded-4 py-2" required>
                                    </div>
                                    <!-- End Date -->
                                    <div class="col-12 col-md-3 mb-3 mb-md-0">
                                        <label for="akhir" class="form-label">End Date:</label>
                                        <input type="date" name="akhir" class="form-control rounded-4 py-2" required>
                                    </div>
                                    <!-- Buttons -->
                                    <div class="col-12 col-md-6 mb-3 mb-md-0 d-md-flex">
                                        <button type="submit" name="cetak" class="btn btn-primary rounded-4 w-100 w-md-auto mb-3 mb-md-0 me-md-2">Cetak</button>
                                        <button type="button" class="btn btn-warning rounded-4 w-100 w-md-auto mb-3 mb-md-0 me-md-2">Refresh</button>
                                        <button type="button" class="btn btn-danger rounded-4 w-100 w-md-auto">Unduh PDF</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Striped rows end -->
    </div>

</div>
@endsection
