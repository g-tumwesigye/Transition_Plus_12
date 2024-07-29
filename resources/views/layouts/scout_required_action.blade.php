@extends('includes.main')
@section('main_content')
<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span>Product List</h4>

    <div class="card">
        <div class="table-responsive text-nowrap m-3">
          <table id="product_list" class="table table-striped p-3" >
            <thead>
              <tr class="text-nowrap">
                <th>#</th>
                <th>Player name</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Current Club</th>
                <th>Date of Birth</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Osam</td>
                <td>250780000001</td>
                <td>example@mail.test</td>
                <td>Rayon Sport</td>
                <td>02/01/2000</td>
                <td>Active</td>
                <td>
                    <i class="text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                          </svg>Reject
                    </i>
                    &nbsp;
                    <i class="text-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Comfirm
                    </i>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
</div>

<!-- / Content -->
@endsection
