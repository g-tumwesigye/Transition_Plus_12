@extends('includes.main')
@section('main_content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Operation/</span> Confirm Operation</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h4><small class="float-end">Fields with <span class="text-danger">*</span> are Required</small></h4>
            </div>
            <div class="card-body">
            <form action="{{route('operation.price')}}" method="POST">
                @csrf
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Telephone</label>
                <div class="col-sm-10">
                    <label for="" class="text-black">{{$operation->telephone }}</label>
                    <input type="hidden" name="id" value="{{$operation->op_id }}">
                </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Email</label>
                <div class="col-sm-10">
                    <label for="" class="text-black">{{$operation->email }}</label>
                </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Player</label>
                <div class="col-sm-10">
                    <label for="" class="text-black">{{$operation->player }}</label>
                </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 form-label" for="basic-icon-default-message">Description</label>
                <div class="col-sm-10">
                    <label for="" class="text-black"><i>{{$operation->description }}</i></label>
                </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Cost/Price</label>
                <div class="col-sm-10">
                    <label for="" class="text-black">{{number_format($operation->cost) }} Rwf</label>
                </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Cost/Price You pay</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-money"></i
                    ></span>
                    <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="500,000"
                        aria-label="500,000"
                        aria-describedby="basic-icon-default-company2"
                        name="cost"
                        value="{{old('cost')}}"
                    />
                    <span id="basic-icon-default-company2" class="input-group-text"
                        >RWF</span>
                    </div>
                    @if ($errors->has('cost'))
                        <div class="text-danger">
                            {{ $errors->first('cost') }}
                        </div>
                    @endif
                </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Player</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                    <select
                        class="form-control"
                        name="club"
                    >
                    <option value="" selected hidden>Select Club</option>
                    @foreach ($clubs as $player)
                    <option value="{{$player->club_id}}" {{old('club')==$player->club_id?'selected':''}}>{{ $player->name }}</option>
                    @endforeach
                    </select>
                    </div>
                    @if ($errors->has('club'))
                        <div class="text-danger">
                            {{ $errors->first('club') }}
                        </div>
                    @endif
                </div>
                </div>
                <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save Transfer</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection
