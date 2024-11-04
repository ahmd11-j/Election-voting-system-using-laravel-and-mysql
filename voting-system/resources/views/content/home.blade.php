@extends('main')



@section('content')


    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="col-lg-12 col-md-12 p-5">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card" style="background-color: #124E66;">
                        <div class="card-body">
                            <h2 class="fw-semibold d-block mb-1 text-white"><strong>Total Parties</strong></h2>
                            <h3 class="card-title mb-2 text-white">count : {{count($parties)}}</h3>
{{--                            <small class="text-primary"> Dept : <strong>CS</strong> (Computer Science) </small>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card" style="background-color: #124E66;">
                        <div class="card-body">
                            <h2 class="fw-semibold d-block mb-1 text-white"><strong>Total Candidates</strong></h2>
                            <h3 class="card-title mb-2 text-white">{{$candidates_count}}</h3>
{{--                            <small class="text-primary"> Dept : <strong>CS</strong> (Computer Science) </small>--}}
                            {{--                                    <h3 class="card-title mb-2">120</h3>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card" style="background-color: #124E66;">
                        <div class="card-body">
                            <h2 class="fw-semibold d-block mb-1 text-white"><strong>Registered Voter</strong></h2>
                            <h3 class="card-title mb-2 text-white">{{$registered_voter}}</h3>
                            {{--                            <small class="text-primary"> Dept : Computer Science</small>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card" style="background-color: #124E66;">
                        <div class="card-body">
                            <h2 class="fw-semibold d-block mb-1 text-white"><strong>Casted Votes</strong></h2>
                            <h3 class="card-title mb-2 text-white">{{$casted_voter}}</h3>
                            {{--                            <small class="text-primary"> Dept : Computer Science</small>--}}
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-md-4 col-6 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="fw-semibold d-block mb-1 text-primary"><strong>Registered Voter</strong></h2>--}}
{{--                            <h3 class="card-title mb-2 text-dark">{{$registered_voter}}</h3>--}}
{{--                            <small class="text-primary"> Dept : Computer Science</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-6 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="fw-semibold d-block mb-1 text-primary"><strong>Casted Voter</strong></h2>--}}
{{--                            <h3 class="card-title mb-2 text-dark">{{$casted_voter}}</h3>--}}
{{--                            <small class="text-primary"> Dept : Computer Science</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 col-md-12 col-6 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="fw-semibold d-block mb-1 text-danger"><strong>5th semester Students</strong></h2>--}}
{{--                            <h3 class="card-title mb-2 text-success">20</h3>--}}
{{--                            <small class="text-primary"> Dept : Computer Science</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-6 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="fw-semibold d-block mb-1 text-danger"><strong>6th semester Students</strong></h2>--}}
{{--                            <h3 class="card-title mb-2 text-success">10</h3>--}}
{{--                            <small class="text-primary"> Dept : Computer Science</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="fw-semibold d-block mb-1 text-primary"><strong>Voting Website</strong></h2>
{{--                            <h5 class="card-title mb-2">Mark your 13th May, 2024 attendance from here</h5>--}}
                            <a href="{{url('/')}}" class="btn btn-dark">Website Link</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card" style="background-color: #124E66;">
                        <div class="card-body">
                            <h2 class="fw-semibold d-block mb-1 text-white"><strong>Candidates</strong></h2>
                            <ol>
                                @foreach($candidates as $candidate)
                                    <li class="text-white">{{$candidate->first_name . ' ' . $candidate->last_name}}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card" style="background-color: #124E66;">
                        <div class="card-body">
                            <h2 class="fw-semibold d-block mb-1 text-white"><strong>Political Parties</strong></h2>
                            <ol>
                                @foreach($parties as $party)
                                    <li class="text-white">{{$party->name}}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">

            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>


@endsection
