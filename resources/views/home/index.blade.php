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

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="{{asset('dist/assets/images/faces/1.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex text-white">John Zamn</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">My Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <form action="/logout" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="dropdown-item">Log Out</button>
                </form>
            </div>
        </div>
    </div>

    <div class="page-content">
        <section class="row">
            {{-- Start Of Header Section --}}
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card">
                            <div class="card-body px-3 py-4 ms-2">
                                <div class="row fs-4">
                                    <div class="col-4 ">
                                        <div class="stats-icon purple">
                                            <i class="bi bi-archive-fill mb-3 me-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="text-muted font-bold">Item Total</h6>
                                        <h6 class="font-extrabold mb-0 text-primary">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card">
                            <div class="card-body px-3 py-4 ms-2">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="stats-icon blue">
                                            <i class="bi bi-calendar-check-fill mb-3 me-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="text-muted font-bold">Borrowed</h6>
                                        <h6 class="font-extrabold mb-0 text-info">12</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card">
                            <div class="card-body px-3 py-4 ms-2">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="text-muted font-bold">Users</h6>
                                        <h6 class="font-extrabold mb-0 text-success">225</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card">
                            <div class="card-body px-3 py-4 ms-2">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="stats-icon red">
                                            <i class="bi bi-tools mb-3 me-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="text-muted font-bold">Broken </h6>
                                        <h6 class="font-extrabold mb-0 text-danger">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Of Header Section --}}

                {{-- Start Of Content Section --}}
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Return Schedule</h4>
                            </div>
                            <div class="card-body">
                                <!-- Hoverable rows start -->
                                <div class="row" id="table-hover-row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <!-- table hover -->
                                                <div class="table-responsive">
                                                    <table class="table table-hover mb-0 fs-6">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Item</th>
                                                                <th>Brand</th>
                                                                <th>Borrow Date</th>
                                                                <th>Return Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-bold-500">Ridwan Azriel Panglima</td>
                                                                <td>Infocus</td>
                                                                <td>Canon</td>
                                                                <td>19 December 2024</td>
                                                                <td>20 January 2025</td>
                                                                <td><a href="" class="btn btn-link btn-icon-only btn-rounded btn-md text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hoverable rows end -->
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Of Content Section --}}
            </div>


            {{-- Start Of Header Profile --}}
            <div class="col-12 col-lg-3 d-none d-lg-block">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{asset('dist/assets/images/faces/1.jpg')}}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">John Duck</h5>
                                <h6 class="text-muted mb-0">@johnducky</h6>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Of Header Profile --}}

                {{-- Start Of Content 2 --}}
                <div class="row mt-3">
                    <div class="card-header">
                        <h4>Item Type</h4>
                    </div>
                    <div class="card-body" id="table-borderless">
                        <div class="col-12">
                            <!-- table with no border -->
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold-500">Michael Right</td>
                                            <td>$15/hr</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    {{-- End Of Content 2 --}}
    </section>
</div>
@endsection