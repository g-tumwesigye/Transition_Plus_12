@extends('includes.main')
@section('main_content')
<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span>Product List</h4>

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
                <th>Name</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Field</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $cnt = 0;
                @endphp
                @foreach ($players as $player)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$player->name}}</td>
                    <td>{{$player->telephone}}</td>
                    <td>{{$player->email}}</td>
                    <td>IT Engineering</td>
                    <td>{{$player->is_active?'Available':'Not Available'}}</td>
                    <td>
                        <i class="text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                        </svg>View</i>
                        &nbsp;
                        <a href="{{route('product.edit', $player->player_id)}}">
                            <i class="bx bx-edit text-success">Edit</i>
                        </a>
                        &nbsp;
                        @if ($player->is_active)
                        <a href="{{route('product.delete',$player->player_id)}}">
                            <i class="bx bx-trash text-danger">Delete</i>
                        </a>
                        @else
                        <a href="{{route('product.undelete',$player->player_id)}}">
                            <i class="bx bx-lock-open text-warning">Roll Back</i>
                        </a>
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
