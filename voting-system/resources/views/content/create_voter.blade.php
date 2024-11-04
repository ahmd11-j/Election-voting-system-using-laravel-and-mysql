@extends('main')


@section('content')


    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4" style="color: #124E66;"><span class="text-muted fw-light"></span>Enroll Voter</h4>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">

                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Enroll your new voter</h5>
                                {{--                                <small class="text-muted float-end">Merged input group</small>--}}
                            </div>
                            <div class="card-body">
                                <form action="{{url('/store_voter')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">First Name</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                                  ></span>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="basic-icon-default-fullname"
                                                    placeholder="Enter your first name"
                                                    aria-label="name"
                                                    aria-describedby="basic-icon-default-fullname2"
                                                    name="first_name"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Last Name</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                                  ></span>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="basic-icon-default-fullname"
                                                    placeholder="Enter your last name"
                                                    aria-label="name"
                                                    aria-describedby="basic-icon-default-fullname2"
                                                    name="last_name"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">CNIC #</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                <input
                                                    type="text"
                                                    id="basic-icon-default-email"
                                                    class="form-control"
                                                    placeholder="Enter your CNIC #"
                                                    aria-label="john.doe"
                                                    aria-describedby="basic-icon-default-email2"
                                                    name="cnic_no"
                                                />
{{--                                                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>--}}
                                            </div>
                                            <div class="form-text">CNIC Number must be in without -</div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Upload Picture</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bxs-photo-album"></i></span>
                                                <input
                                                    type="file"
                                                    id="basic-icon-default-email"
                                                    class="form-control"
                                                    placeholder="Upload an image"
                                                    aria-describedby="basic-icon-default-email2"
                                                    name="image"
                                                />
                                                {{--                                                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>--}}
                                            </div>
                                            <div class="form-text">You can use png,jpg and jpeg formats</div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn" style="background-color: #124E66; color: white">Upload</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
