@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/smart_wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/smart_wizard_theme_arrows.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush
@section('content')

    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <a class="navbar-brand" href="#">
                        Marriage Licence Application
                    </a>

                    <ul class="navbar-nav ml-auto">
                        @if (Auth::check())
                        <li class="nav-item no-arrow">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Dashboard</span>
                            </a>
                        </li>
                        @else
                        <li class="nav-item no-arrow">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user-tie fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Reserved for Administration</span>
                            </a>
                        </li>
                            <li class="nav-item no-arrow">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Login</span>
                            </a>
                        </li>
                        <li class="nav-item no-arrow">
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="fas fa-user-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Register</span>
                            </a>
                        </li>
                        @endif
                    </ul>


                </nav>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('saveApplicant') }}" role="form" data-toggle="validator" method="POST" accept-charset="utf-8">
                    @csrf
                     <div id="smartwizard">
                    <ul>
                        <li><a href="#step-1">Step 1<br /><small>General Information</small></a></li>
                        <li><a href="#step-2">Step 2<br /><small>Applicant's Information</small></a></li>
                        <li><a href="#step-3">Step 3<br /><small>Joint Applicant's Information</small></a></li>
                        <li><a href="#step-4">Step 4<br /><small>Submit Your Application</small></a></li>
                    </ul>

                    <div>
                            <div id="step-1" class="">
                                @include('partials.step1')
                            </div>
                            <div id="step-2" class="">
                                @include('partials.step2')
                            </div>
                            <div id="step-3" class="">
                                @include('partials.step3')
                            </div>
                            <div id="step-4" class="">
                                @include('partials.step4')
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>

@endsection
@push('scripts')
    <script src="{{ asset('assets/js/validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.smartWizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/customjs.js') }}"></script>

@endpush
