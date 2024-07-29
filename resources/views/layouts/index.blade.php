@extends('includes.main')
@section('main_content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-6 mb-6 order-0">
            <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                <div class="card-body">
                    <h5 class="card-title text-primary">Congratulations, Welcome again {{Auth::user()->username}}! 🎉</h5>
                    <p class="mb-4">
                    You have done.
                    </p>

                    <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Report</a>
                </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img
                    src="../assets/img/illustrations/man-with-laptop-light.png"
                    height="140"
                    alt="View Badge User"
                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                    data-app-light-img="illustrations/man-with-laptop-light.png"
                    />
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 order-1">
            <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img
                        src="../assets/img/icons/unicons/chart-success.png"
                        alt="chart success"
                        class="rounded"
                        />
                    </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Users (Students)</span>
                    <h3 class="card-title mb-2">{{$users}}</h3>
                </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img
                        src="../assets/img/icons/unicons/wallet-info.png"
                        alt="Credit Card"
                        class="rounded"
                        />
                    </div>
                    </div>
                    <span>Total Active Mentors</span>
                    <h3 class="card-title text-nowrap mb-1">{{$transfers}}</h3>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12 order-3 order-md-2">
            <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Latest Request</h5>
            </div>
            <div class="card-body">
                
                <div class="table-responsive text-nowrap m-3">
                <table id="product_list" class="table table-striped p-3" >
                    <thead>
                    <tr class="text-nowrap">
                        <th>#</th>
                        <th>Student name</th>
                        <th>Mentor Name</th>
                        <th>Status</th>
                        <th>Time Old</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>student 1</td>
                            <td>mentor 8</td>
                            <td>Pending</td>
                            <td>2 days ago</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>student 5</td>
                            <td>mentor 1</td>
                            <td>Confirmed</td>
                            <td>7 days ago</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- / Content -->
@endsection
