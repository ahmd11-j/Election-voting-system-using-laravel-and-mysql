@extends('main')


@section('content')


    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4" style="color: #124E66;">Voters</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
{{--                <h5 class="card-header"></h5>--}}
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>CNIC # </th>
                            <th>Area of Election</th>
                            <th>Candidate Name</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($votes as $vote)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$vote['voter'] ? $vote['voter']['first_name'] . ' ' . $vote['voter']['last_name'] : null}}</strong></td>
                            <td>{{$vote['voter'] ? $vote['voter']['cnic_no'] : ""}}</td>
                            <td>NA - 120</td>
                            <td>{{$vote['candidate'] ? $vote['candidate']['first_name'] : ""}}</td>
{{--                            <td>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">--}}
{{--                                        <i class="bx bx-dots-vertical-rounded"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu">--}}
{{--                                        <a class="dropdown-item" href="{{url('/create_student')}}"--}}
{{--                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a--}}
{{--                                        >--}}
{{--                                        <a class="dropdown-item" href="javascript:void(0);"--}}
{{--                                        ><i class="bx bx-trash me-1"></i> Delete</a--}}
{{--                                        >--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
