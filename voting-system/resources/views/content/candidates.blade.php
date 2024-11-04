@extends('main')


@section('content')


    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4" style="color: #124E66;">Candidates</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
{{--                <h5 class="card-header"></h5>--}}
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>CNIC # </th>
                            <th>Date of Birth</th>
                            <th>Political Party</th>
                            <th>Area of Election</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($candidates as $candidate)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$candidate->first_name . ' ' . $candidate->last_name}}</strong></td>
                            <td>{{$candidate->cnic_no}}</td>
                            <td>{{\Carbon\Carbon::parse($candidate->date_of_birth)->format('Y-m-d')}}</td>
                            <td>{{$candidate['party']['name'] ?? null }}</td>
                            <td>{{$candidate['area'] ? $candidate['area']['area_type'] . ' ' . $candidate['area']['area_no'] : ""}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{url('/edit_candidate') . '/' . $candidate->id}}"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                        >
                                        <a class="dropdown-item" href="{{url('/delete_candidate') . '/' . $candidate->id}}"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                        >
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
