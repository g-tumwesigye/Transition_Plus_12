@extends('includes.main')
@section('main_content')
<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Mentor/</span>Operation List</h4>

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
                <th>Current Club</th>
                <th>Cost</th>
                <th>Market Status</th>
                <th>Action</th>
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
                    <td>{{number_format($operation->cost)}}</td>
                    <td>{{$operation->is_active&&$operation->is_done=='0'?'Available':'Not Available'}}</td>
                    <td>
                        @if ($operation->is_done=='0')
                        <a href="{{route('operation.buy', $operation->op_id)}}">
                            <i class="bx bx-money text-primary">Buy</i>
                        </a>
                        &nbsp;
                        <a href="{{route('operation.edit', $operation->op_id)}}">
                            <i class="bx bx-edit text-success">Edit</i>
                        </a>
                        &nbsp;
                        @if ($operation->is_active)
                        <a href="{{route('operation.delete', $operation->op_id)}}">
                            <i class="bx bx-trash text-danger">Delete</i>
                        </a>
                        @else
                        <a href="{{route('operation.undelete', $operation->op_id)}}">
                            <i class="bx bx-lock-open text-warning">Roll Back</i>
                        </a>
                        @endif
                        @else
                        No Action
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>

<!-- / Content -->
@endsection
