@extends('main')


@section('content')


    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4" style="color: #124E66;"><span class="text-muted fw-light"></span>Add Candidate</h4>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">

                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Enroll your new candidate</h5>
                                {{--                                <small class="text-muted float-end">Merged input group</small>--}}
                            </div>
                            <div class="card-body">
                                <form action="{{url('/store_candidate')}}" method="post" enctype="multipart/form-data">
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
                                                    required
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
                                                    required
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
                                                    required
                                                />
{{--                                                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>--}}
                                            </div>
                                            <div class="form-text">CNIC Number must be in without -</div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Date of Birth</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-id-card"></i
                                  ></span>
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    id="basic-icon-default-fullname"
                                                    placeholder="Enter your Date of Birth"
                                                    aria-label="name"
                                                    aria-describedby="basic-icon-default-fullname2"
                                                    name="date_of_birth"
                                                    required
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Party Name</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-book-open"></i
                                  ></span>
                                                <select class="dropdown form-control" name="party_id" required>
                                                    <option value=""> Select political party</option>
                                                    @foreach($parties as $party)
                                                        <option value="{{$party->id}}" class="dropdown-item">{{$party->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Area</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-book-open"></i
                                  ></span>
                                                <select class="dropdown form-control" name="area_of_election_id" required>
                                                    <option value=""> Select electional area</option>
                                                    @foreach($area_of_elections as $area_of_election)
                                                        <option value="{{$area_of_election->id}}" class="dropdown-item">{{$area_of_election->area_type . " " . $area_of_election->area_no}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
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
                                                    required
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
