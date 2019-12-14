<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Marriage Licence Application</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        body{
            font-size: 16px;
            color: black;

        }
        .col-md-5, .col-md-2, .col-md-3, .col-md-5 .row, .col-md-6, .all-border {
            border: 1px solid black;
            padding: 1px 11px;
        }
        .col-md-8{
            padding: 0px;
            border-right: 1.5px solid black;
        }
        .rem-right{
            border-right: none!important;
        }
        .rem-left{
            border-left: none!important;
        }
        .rem-top{
            border-top: none!important;
        }
        .rem-bottom{
            border-bottom: none!important;
        }
        .border-no{
            border: none!important;
        }
        .no-padding{
            padding: 0px 11px!important;
        }
        .example-print {
            display: block;
            text-align: right;
            padding: 10px;
        }
        @media print {
            .example-print {
                display: none;
            }
            body{
                font-size: 13px;
                line-height: normal;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-8 border-no" style="padding: 15px">
                <h5 class="example-print" style="font-weight: bold; color: green; text-align: left">Application Submitted Successfully</h5>
                <p class="example-print" style="text-align: left">Congratulations! You have submitted a secure on-line marriage licence application to the City of Toronto. Your file will remain active for 60 days. Please click the link right side to print your completed application form.</p>
            </div>
            <div class="col-md-4 border-no">
                <div class="row example-print">
                    <button class="btn btn-success btn-sm text-right" onClick="window.print()">Print this page</button>
                </div>
                <div class="row">
                    <div class="col-md-5 ">Application No. <br><br> </div>
                    <div class="col-md-1 border-no"></div>
                    <div class="col-md-6">Marriage Licence No. <br><br> </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 border-no">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </div>
            <div class="col-md-2 border-no text-center">
                Office of the
                Registrar General
            </div>
            <div class="col-md-5 border-no text-center">
                <h5>Marriage Licence Application
                    <br> Marriage Act - Form 3</h5>
            </div>
        </div>
    </div>
</header>

<div class="container">
    @foreach($data as $dat)
        <div class="row">
        <div class="col-md-5">Applicant</div>
        <div class="col-md-2 rem-top"></div>
        <div class="col-md-5">Joint Applicant</div>

        <div class="col-md-5 left-bott-border">{{ $dat->applicant_lname }}</div>
        <div class="col-md-2">Current last name or single name</div>
        <div class="col-md-5">{{ $dat->japplicant_lname }}</div>

        <div class="col-md-5 left-bott-border">{{ $dat->applicant_fname }}</div>
        <div class="col-md-2 rem-top-bottom">First and middle names</div>
        <div class="col-md-5">{{ $dat->japplicant_fname }}</div>

        <div class="col-md-5 left-bott-border"></div>
        <div class="col-md-2 rem-top-bottom">Marital Status</div>
        <div class="col-md-5"></div>

        <div class="col-md-5">
            <div class="row rem-top">Country of divorce <br> {{ $dat->divorced_country }}</div>
            <div class="row right-bottom">City of divorce if in Canada <br> {{ $dat->divorced_city }}</div>
            <div class="row rem-bottom">Court file number <br> {{ $dat->court_file_no }}</div>
        </div>
        <div class="col-md-2 ">If divorced</div>
        <div class="col-md-5">
            <div class="row rem-top">Country of divorce <br> {{ $dat->divorced_country }}</div>
            <div class="row">City of divorce if in Canada <br> {{ $dat->jdivorced_city }}</div>
            <div class="row rem-bottom">Court file number <br> {{ $dat->jcourt_file_no }}</div>
        </div>

        <div class="col-md-5">{{ $dat->applicant_religion }}</div>
        <div class="col-md-2 rem-top-bottom">Religious denomination</div>
        <div class="col-md-5">{{ $dat->japplicant_religion }}</div>

        <div class="col-md-2">Age<br>{{ $dat->applicant_age }}</div>
        <div class="col-md-3">Date of birth (yyyy-mm-dd)<br>{{ $dat->applicant_dob }}</div>
        <div class="col-md-2">Age and date of birth</div>
        <div class="col-md-2">Age<br>{{ $dat->japplicant_age }}</div>
        <div class="col-md-3">Date of birth (yyyy-mm-dd)<br>{{ $dat->japplicant_dob }}</div>

        <div class="col-md-5">Province (if outside Canada, state the country)<br>{{ $dat->app_province }}</div>
        <div class="col-md-2 rem-top-bottom">Place of birth</div>
        <div class="col-md-5">Province (if outside Canada, state the country)<br>{{ $dat->japp_province }}</div>

        <div class="col-md-5">
            <div class="row rem-top">Last name or single names <br> {{ $dat->parents1_sname }}</div>
            <div class="row">First and middle names <br> {{ $dat->parents1_fname }}</div>
            <div class="row rem-bottom">Province (if outside Canada, state the country) <br> {{ $dat->jparents1_province }}</div>
        </div>
        <div class="col-md-2">Parent's name and place of birth</div>
        <div class="col-md-5">
            <div class="row rem-top">Last name or single names <br> {{ $dat->jparents1_sname }}</div>
            <div class="row">First and middle names <br> {{ $dat->jparents1_fname }}</div>
            <div class="row rem-bottom">Province (if outside Canada, state the country) <br> {{ $dat->jparents1_province }}</div>
        </div>

        <div class="col-md-5">
            <div class="row rem-top">Last name or single names <br> {{ $dat->parents2_sname }}</div>
            <div class="row">First and middle names <br> {{ $dat->parents2_fname }}</div>
            <div class="row rem-bottom">Province (if outside Canada, state the country) <br> {{ $dat->parents2_province }}</div>
        </div>
        <div class="col-md-2">Parent's name and place of birth</div>
        <div class="col-md-5">
            <div class="row rem-top">Last name or single names <br> {{ $dat->jparents1_sname }}</div>
            <div class="row">First and middle names <br> {{ $dat->jparents1_fname }}</div>
            <div class="row rem-bottom">Province (if outside Canada, state the country) <br> {{ $dat->jparents1_province }}</div>
        </div>

        <div class="col-md-5">
            <div class="row rem-top">Last name or single names <br> {{ $dat->parents2_sname }}</div>
            <div class="row">First and middle names <br> {{ $dat->parents2_fname }}</div>
            <div class="row rem-bottom">Province (if outside Canada, state the country) <br> {{ $dat->parents2_province }}</div>
        </div>
        <div class="col-md-2 ">Parent's name and place of birth</div>
        <div class="col-md-5">
            <div class="row rem-top">Last name or single names <br> {{ $dat->jparents1_sname }}</div>
            <div class="row">First and middle names <br> {{ $dat->jparents1_fname }}</div>
            <div class="row rem-bottom">Province (if outside Canada, state the country) <br> {{ $dat->jparents1_province }}</div>
        </div>

        <div class="col-md-5">
            <div class="row rem-top">Last name or single names <br> {{ $dat->parents2_sname }}</div>
            <div class="row">First and middle names <br> {{ $dat->parents2_fname }}</div>
            <div class="row rem-bottom">Province (if outside Canada, state the country) <br> {{ $dat->parents2_province }}</div>
        </div>
        <div class="col-md-2 rem-top-bottom">Parent's name and place of birth</div>
        <div class="col-md-5">
            <div class="row rem-top">Last name or single names <br> {{ $dat->jparents1_sname }}</div>
            <div class="row">First and middle names <br> {{ $dat->jparents1_fname }}</div>
            <div class="row rem-bottom">Province (if outside Canada, state the country) <br> {{ $dat->jparents1_province }}</div>
        </div>

        <div class="col-md-5 no-padding">
            <div class="row rem-top no-padding">
                <div class="col-md-8">Street name and number <br> {{ $dat->app_prsnt_street }}</div>
                <div class="col-md-4">Apt <br> {{ $dat->app_prsnt_apt }}</div>
            </div>
            <div class="row no-padding">
                <div class="col-md-8">City or town <br> {{ $dat->app_prsnt_city }}</div>
                <div class="col-md-4">Province/Country <br> {{ $dat->app_prsnt_country }}</div>
            </div>
            <div class="row rem-bottom no-padding">
                <div class="col-md-8">Postal code <br> {{ $dat->app_prsnt_pcode }}</div>
                <div class="col-md-4">Telephone Number <br> {{ $dat->app_prsnt_phone }}</div>
            </div>
        </div>
        <div class="col-md-2 ">Present address or postal address of applicants</div>
        <div class="col-md-5 no-padding">
            <div class="row rem-top no-padding">
                <div class="col-md-8">Street name and number <br> {{ $dat->japp_prsnt_street }}</div>
                <div class="col-md-4">Apt <br> {{ $dat->japp_prsnt_apt }}</div>
            </div>
            <div class="row no-padding">
                <div class="col-md-8">City or town <br> {{ $dat->japp_prsnt_city }}</div>
                <div class="col-md-4">Province/Country <br> {{ $dat->japp_prsnt_country }}</div>
            </div>
            <div class="row rem-bottom no-padding">
                <div class="col-md-8">Postal code <br> {{ $dat->japp_prsnt_pcode }}</div>
                <div class="col-md-4">Telephone Number <br> {{ $dat->japp_prsnt_phone }}</div>
            </div>
        </div>
        <div class="col-md-5 no-padding">
            <div class="row rem-top no-padding">
                <div class="col-md-8">Street name and number <br> {{ $dat->app_prsnt_street }}</div>
                <div class="col-md-4">Apt <br> {{ $dat->app_prsnt_apt }}</div>
            </div>
            <div class="row no-padding">
                <div class="col-md-8">City or town <br> {{ $dat->app_prsnt_city }}</div>
                <div class="col-md-4">Province/Country <br> {{ $dat->app_prsnt_country }}</div>
            </div>
            <div class="row rem-bottom no-padding">
                <div class="col-md-8">Postal code <br> {{ $dat->app_prsnt_pcode }}</div>
                <div class="col-md-4">Telephone Number <br> {{ $dat->app_prsnt_phone }}</div>
            </div>
        </div>
        <div class="col-md-2 rem-top-bottom">Permanent address of applicants if different from above</div>
        <div class="col-md-5 no-padding">
            <div class="row rem-top no-padding">
                <div class="col-md-8">Street name and number <br> {{ $dat->japp_prsnt_street }}</div>
                <div class="col-md-4">Apt <br> {{ $dat->japp_prsnt_apt }}</div>
            </div>
            <div class="row no-padding">
                <div class="col-md-8">City or town <br> {{ $dat->japp_prsnt_city }}</div>
                <div class="col-md-4">Province/Country <br> {{ $dat->japp_prsnt_country }}</div>
            </div>
            <div class="row rem-bottom no-padding">
                <div class="col-md-8">Postal code <br> {{ $dat->japp_prsnt_pcode }}</div>
                <div class="col-md-4">Telephone Number <br> {{ $dat->japp_prsnt_phone }}</div>
            </div>
        </div>

        <div class="col-md-4 all-border">Intended place of marriage <br> {{ $dat->intented_place }}</div>
        <div class="col-md-4 all-border">City, town, village County or district <br> {{ $dat->intented_city }}</div>
        <div class="col-md-4 all-border">Intended date of marriage <br> {{ $dat->intented_mar_date }}</div>

        <div class="col-md-6">I declare that the above information is correct.<br>Signature of Applicant <br> <br> </div>
        <div class="col-md-6">I declare that the above information is correct.<br>Signature of Joint Applicant<br> <br></div>
        <div class="col-md-6">Date (yyyy-mm-dd) <br> {{ date('Y-m-d') }}</div>
        <div class="col-md-6">Date (yyyy-mm-dd) <br> {{ date('Y-m-d') }}</div>
        <div class="col-md-12">
            <p>Personal information contained on this form is collected under the authority of the Marriage Act, R.S.O 1990, c. M.3 and will be used to determine whether to issue the marriage licence, to register and record the marriage, provide certified copies, extracts, certificates, search notices, photocopies and for statistical, research, medical, law enforcement, adoption, and adoption disclosure purposes. It is an offence to knowingly make a false statement on this form. Questions about this collection should be directed to: the Deputy Registrar General, Office of the Registrar General, 189 Red River Road, P.O. Box 4600, Thunder Bay, ON P7B 6L8. Telephone:1-800-461-2156 (outside Toronto but within North America) or 416-325-8305 (in Toronto or outside North America), 416-325-3408 (TTY/Teletypewriter).</p>
        </div>
    </div>
    @endforeach
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="overflow: hidden;">
                    <p style="float: left;">11018E (2018/02) @</p>
                    <p style="float: right;">Queen's Printer for Ontario, 2018</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>

