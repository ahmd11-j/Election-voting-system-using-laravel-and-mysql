@extends('main')


@section('content')


    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4" style="color: #124E66;">Area of Elections</h4>

            <div class="p-2 bg-white w-50 rounded p-2">
                <form action="{{url('/store_area_of_election')}}" method="post">
                    @csrf
                    <label>Enter type of Election</label>
                    <input type="text" name="area_type" class="form-control" placeholder="Enter type of election">
                    <label>Enter Area Number</label>
                    <input type="text" name="area_no" class="form-control" placeholder="Enter area number">
                    <div class="pt-3">
                        <button class="btn" style="background-color: #124E66;color: white;">Add</button>
                    </div>
                </form>
            </div>

            <div class="row pt-3">
                @foreach($area_of_elections as $area_of_election)
                    <div class="list-group-item w-25" style="background-color: #124E66; color: white">
                        <h1 class="text-white">{{$area_of_election->area_type . "-" . $area_of_election->area_no}}</h1>
                    </div>
                    <div class="col-1"></div>
                @endforeach
            </div>

            <!-- Basic Bootstrap Table -->
            <div class="card w-25">
{{--                <h5 class="card-header"></h5>--}}
{{--                <div class="table-responsive text-nowrap">--}}
{{--                    <table class="table">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Approved</th>--}}
{{--                            <th>CNIC # </th>--}}
{{--                            <th>Date of Birth</th>--}}
{{--                            <th>Political Party</th>--}}
{{--                            <th>Area of Election</th>--}}
{{--                            <th>Actions</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody class="table-border-bottom-0">--}}
{{--                        @foreach($parties as $candidate)--}}
{{--                        <tr>--}}
{{--                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$candidate->name}}</strong></td>--}}
{{--                            <td><input type="checkbox" name="approve" checked></td>--}}
{{--                            <td>{{$candidate->cnic_no}}</td>--}}
{{--                            <td>{{\Carbon\Carbon::parse($candidate->date_of_birth)->format('Y-m-d')}}</td>--}}
{{--                            <td>{{$candidate['party']['name'] ?? null }}</td>--}}
{{--                            <td>{{$candidate['area'] ? $candidate['area']['area_type'] . ' ' . $candidate['area']['area_no'] : ""}}</td>--}}
{{--                            <td>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">--}}
{{--                                        <i class="bx bx-dots-vertical-rounded"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu">--}}
{{--                                        <a class="dropdown-item" href="{{url('/edit_candidate') . '/' . $candidate->id}}"--}}
{{--                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a--}}
{{--                                        >--}}
{{--                                        <a class="dropdown-item" href="{{url('/delete_candidate') . '/' . $candidate->id}}"--}}
{{--                                        ><i class="bx bx-trash me-1"></i> Delete</a--}}
{{--                                        >--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>


@endsection
