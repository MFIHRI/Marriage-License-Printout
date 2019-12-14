@extends('layouts.master')
@push('styles')
    <link href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Marriage Application Info</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Date of Birth</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($data as $dat)
                    <tr>
                        <td>{{ $dat->applicant_lname }} {{ $dat->applicant_sname }}</td>
                        <td>{{ $dat->app_birth_country }}</td>
                        <td>{{ $dat->app_prsnt_city }}</td>
                        <td>{{ $dat->applicant_dob }}</td>
                        <td>{{ $dat->applicant_age }}</td>
                        <td><a class="btn btn-primary btn-sm" href="{{route('downloadPdf', $dat->id)}}">Print</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables-demo.js') }}"></script>
@endpush
