@extends('includes.main')
@section('main_content')
<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Mentor/</span>Mentorship Report</h4>

    <div class="card">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive text-nowrap m-3">
          <table id="product_list" class="table table-striped p-3" >
            <thead>
              <tr class="text-nowrap">
                <th>#</th>
                <th>Student name</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Mentor Name</th>
                <th>Assigned Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $cnt = 0;
                @endphp
                @foreach ($ops as $operation)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$operation->player}}</td>
                    <td>{{$operation->telephone}}</td>
                    <td>{{$operation->email}}</td>
                    <td>Kanyandekwe</td>
                    <td>12/01/2024</td>
                    <td>Active</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>

<!-- / Content -->
@endsection
