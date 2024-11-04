@extends('main')



@section('content')


    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="col-lg-12 col-md-12 p-5">
            <h1 class="text-center" style="color:#124E66;"><i>Election Result</i></h1>
            <div class="row">
                @foreach($candidates as $candidate)
                    <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card" style="background-color: #124E66;">
                            <div class="card-body">
                                <h2 class="fw-semibold d-block mb-1 text-white"><strong>{{$candidate->first_name . ' ' . $candidate->last_name}}</strong></h2>
                                <h3 class="card-title mb-2 text-success">count : {{$candidate->votes_count}}</h3>
                                <small class="text-primary"> <strong>{{$candidate['party']['name'] ?? ""}}</strong> ({{$candidate['area'] ? $candidate['area']['area_type'] . '-' . $candidate['area']['area_no'] : "" }}) </small>
                            </div>
                        </div>
                    </div>
                @endforeach
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
