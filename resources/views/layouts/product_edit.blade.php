@extends('includes.main')
@section('main_content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Mentor/</span> Modify Mentor</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h4><small class="float-end">Fields with <span class="text-danger">*</span> are Required</small></h4>
            </div>
            <div class="card-body">
            <form action="{{route('product.create')}}" method="POST">
                @csrf
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Profile</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class="bx bx-file"></i
                    ></span>
                    <input
                        type="file"
                        class="form-control"
                        aria-describedby="basic-icon-default-fullname2"
                        name="file"
                    />
                    </div>
                    @if ($errors->has('file'))
                        <div class="text-danger">
                            {{ $errors->first('file') }}
                        </div>
                    @endif
                </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name <span class="text-danger">*</span> </label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class="bx bx-user"></i
                    ></span>
                    <input
                        type="text"
                        class="form-control"
                        id="basic-icon-default-fullname"
                        placeholder="Osama"
                        aria-label="Osama"
                        aria-describedby="basic-icon-default-fullname2"
                        name="names"
                        value="{{old('names')}}"
                    />
                    </div>
                    @if ($errors->has('names'))
                        <div class="text-danger">
                            {{ $errors->first('names') }}
                        </div>
                    @endif
                </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Telephone<span class="text-danger">*</span> </label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-phone"></i
                    ></span>
                    <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="250780000001"
                        aria-label="250780000001"
                        aria-describedby="basic-icon-default-company2"
                        name="telephone"
                        value="{{old('telephone')}}"
                    />
                    </div>
                    @if ($errors->has('telephone'))
                        <div class="text-danger">
                            {{ $errors->first('telephone') }}
                        </div>
                    @endif
                </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Email<span class="text-danger">*</span> </label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-mail-send"></i
                    ></span>
                    <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="example@mail.test"
                        aria-label="example@mail.test"
                        aria-describedby="basic-icon-default-company2"
                        name="email"
                        value="{{old('email')}}"
                    />
                    </div>
                    @if ($errors->has('email'))
                        <div class="text-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Specialist Field<span class="text-danger">*</span> </label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-collection"></i></span>                    
                    <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="Civil Engineering"
                        aria-describedby="basic-icon-default-company2"
                        name="field"
                        value="{{old('field')}}"
                    />
                    </div>
                    @if ($errors->has('field'))
                        <div class="text-danger">
                            {{ $errors->first('field') }}
                        </div>
                    @endif
                </div>
                </div>
                <div class="row mb-3">
                <label class="col-sm-2 form-label" for="basic-icon-default-message">Description</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                    <span id="basic-icon-default-message2" class="input-group-text"
                        ><i class="bx bx-comment"></i
                    ></span>
                    <textarea
                        id="basic-icon-default-message"
                        class="form-control"
                        placeholder="Hi, Do you have experiences to explain you?"
                        aria-describedby="basic-icon-default-message2"
                        name="description"
                    >{{old('description')}}</textarea>
                    </div>
                    @if ($errors->has('description'))
                        <div class="text-danger">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </div>
                </div>
                <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save Mentor</button>
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
