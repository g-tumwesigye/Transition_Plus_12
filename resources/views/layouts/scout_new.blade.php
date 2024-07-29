@extends('includes.main')
@section('main_content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Publication/</span> Register New</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h4><small class="float-end">Fields with <span class="text-danger">*</span> are Required</small></h4>
            </div>
            <div class="card-body">
            <form action="{{route('scout.create')}}" method="POST">
                @csrf
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Image<span class="text-danger">*</span></label>
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
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Title<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class="bx bx-collection"></i
                    ></span>
                    <input
                        type="text"
                        class="form-control"
                        id="basic-icon-default-fullname"
                        placeholder="Advertisment"
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
                <label class="col-sm-2 form-label" for="basic-icon-default-message">Content<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                    <span id="basic-icon-default-message2" class="input-group-text"
                        ><i class="bx bx-comment"></i
                    ></span>
                    <textarea
                        id="basic-icon-default-message"
                        class="form-control"
                        placeholder="Provide full information or content to this publication"
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
                    <button type="submit" class="btn btn-primary">Publish</button>
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
