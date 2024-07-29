@extends('includes.main')
@section('main_content')
<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Operation/</span>Operation List</h4>

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
                <th>Player name</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>From Club</th>
                <th>Current Club</th>
                <th>Transaction Price</th>
                <th>Paid Price</th>
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
                    <td>{{$operation->club}}</td>
                    <td>{{$operation->club}}</td>
                    <td>{{number_format($operation->cost)}}</td>
                    <td>{{number_format($operation->paid_cost)}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>

<!-- / Content -->
@endsection
