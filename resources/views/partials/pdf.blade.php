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
    <link href="{{ asset('assets/css/print.css') }}" rel="stylesheet">

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
            <table style="width:100%">
                <tr>
                    <th class="table-heading">Applicant</th>
                    <th class="table-heading-blank"></th>
                    <th class="table-heading">Joint Applicant</th>
                </tr>
                <tr>
                    <td>{{ $dat->applicant_lname }} {{ $dat->applicant_sname }} </td>
                    <td style="text-align: center;">Current last name or single name</td>
                    <td>{{ $dat->japplicant_lname }} {{ $dat->japplicant_sname }}</td>
                </tr>
                <tr>
                    <td>{{ $dat->applicant_fname }}</td>
                    <td style="text-align: center;padding: 5px;">First and middle names</td>
                    <td>{{ $dat->japplicant_fname }}</td>
                </tr>

                <tr>
                    <td>
                        <label class="label-contain">Never married
                            @if($dat->app_marital_stat == 1)
                                <span class="crossmark">&#10006;</span>
                            @else
                                <span class="crossmark"></span>
                            @endif

                        </label>
                        <label class="label-contain">Widowed
                            @if($dat->app_marital_stat == 2)
                                <span class="crossmark">&#10006;</span>
                            @else
                                <span class="crossmark"></span>
                            @endif
                        </label>
                        <label class="label-contain">Divorced
                            @if($dat->app_marital_stat == 3)
                                <span class="crossmark">&#10006;</span>
                            @else
                                <span class="crossmark"></span>
                            @endif
                        </label>
                    </td>
                    <td style="text-align: center;padding: 5px;">
                        Marital Status
                    </td>
                    <td>
                        <label class="label-contain">Never married
                            @if($dat->japp_marital_stat == 1)
                                <span class="crossmark">&#10006;</span>
                            @else
                                <span class="crossmark"></span>
                            @endif
                        </label>
                        <label class="label-contain">Widowed
                            @if($dat->japp_marital_stat == 2)
                                <span class="crossmark">&#10006;</span>
                            @else
                                <span class="crossmark"></span>
                            @endif
                        </label>
                        <label class="label-contain">Divorced
                            @if($dat->japp_marital_stat == 3)
                                <span class="crossmark">&#10006;</span>
                            @else
                                <span class="crossmark"></span>
                            @endif
                        </label>
                    </td>
                </tr>

                <tr>
                    <td class="table-space">
                        Country of divorce <br> {{ $dat->divorced_country }}
                    </td>
                    <td rowspan="3" style="text-align: center;">If divorced</td>
                    <td class="table-space">
                        Country of divorce <br> {{ $dat->jdivorced_country }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        City of divorce if in canada <br> {{ $dat->divorced_city }}
                    </td>

                    <td class="table-space">
                        City of divorce if in canada <br> {{ $dat->jdivorced_city }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        Court File Number <br> {{ $dat->court_file_no }}
                    </td>

                    <td class="table-space">
                        Court File Number <br> {{ $dat->jcourt_file_no }}
                    </td>
                </tr>

                <tr>
                    <td>{{ $dat->applicant_religion }}</td>
                    <td style="text-align: center;padding: 5px;">Religious denomination</td>
                    <td>{{ $dat->japplicant_religion }}</td>
                </tr>
                <tr>
                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-cell-left">
                                Age <br>{{ $dat->applicant_age }}
                            </div>
                            <div class="split-cell-right">
                                Date of Birth <br>{{ $dat->applicant_dob }}
                            </div>
                        </div>
                    </td>
                    <td style="padding: 5px;text-align: center;">Age and date of birth</td>
                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-cell-left">
                                Age <br>{{ $dat->japplicant_age }}
                            </div>
                            <div class="split-cell-right">
                                Date of Birth <br>{{ $dat->japplicant_dob }}
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="table-space">Province(if outside canada, state the country) <br>{{ $dat->app_province }}</td>
                    <td style="text-align: center;padding: 5px;">Place of birth</td>
                    <td class="table-space">Province(if outside canada, state the country) <br>{{ $dat->japp_province }}</td>
                </tr>

                <tr>
                    <td class="table-space">
                        last name or single name <br> {{ $dat->parents1_sname }}
                    </td>
                    <td rowspan="3" style="text-align: center;">Parents name and place of birth</td>
                    <td class="table-space">
                        last name or single name <br> {{ $dat->jparents1_sname }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        First name and middle name <br> {{ $dat->parents1_fname }}
                    </td>

                    <td class="table-space">
                        First name and middle name <br> {{ $dat->jparents1_fname }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        Province(if outside canada, state the country) <br> {{ $dat->parents1_province }}
                    </td>

                    <td class="table-space">
                        Province(if outside canada, state the country) <br> {{ $dat->jparents1_province }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        last name or single name <br> {{ $dat->parents2_sname }}
                    </td>
                    <td rowspan="3" style="text-align: center;">Parents name and place of birth</td>
                    <td class="table-space">
                        last name or single name <br> {{ $dat->jparents2_sname }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        First name and middle name <br> {{ $dat->parents2_fname }}
                    </td>

                    <td class="table-space">
                        First name and middle name <br> {{ $dat->jparents2_fname }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        Province(if outside canada, state the country) <br> {{ $dat->parents2_province }}
                    </td>

                    <td class="table-space">
                        Province(if outside canada, state the country) <br> {{ $dat->jparents2_province }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        last name or single name <br> {{ $dat->parents3_sname }}
                    </td>
                    <td rowspan="3" style="text-align: center;">Parents name and place of birth</td>
                    <td class="table-space">
                        last name or single name <br> {{ $dat->jparents3_sname }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        First name and middle name <br> {{ $dat->parents3_fname }}
                    </td>

                    <td class="table-space">
                        First name and middle name <br> {{ $dat->jparents3_fname }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        Province(if outside canada, state the country) <br> {{ $dat->parents3_province }}
                    </td>

                    <td class="table-space">
                        Province(if outside canada, state the country) <br> {{ $dat->jparents3_province }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        last name or single name <br> {{ $dat->parents4_sname }}
                    </td>
                    <td rowspan="3" style="text-align: center;">Parents name and place of birth</td>
                    <td class="table-space">
                        last name or single name <br> {{ $dat->jparents4_sname }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        First name and middle name <br> {{ $dat->parents4_fname }}
                    </td>

                    <td class="table-space">
                        First name and middle name <br> {{ $dat->jparents4_fname }}
                    </td>
                </tr>
                <tr>
                    <td class="table-space">
                        Province(if outside canada, state the country) <br> {{ $dat->parents4_province }}
                    </td>

                    <td class="table-space">
                        Province(if outside canada, state the country) <br> {{ $dat->jparents4_province }}
                    </td>
                </tr>

                <tr>
                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                Street name and number <br> {{ $dat->app_prsnt_street }}
                            </div>
                            <div class="split-bt-cell-right">
                                Apt <br> {{ $dat->app_prsnt_apt }}
                            </div>
                        </div>
                    </td>
                    <td rowspan="3" style="text-align: center;">Present Address or postal address of applicant</td>
                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                Street name and number <br> {{ $dat->japp_prsnt_street }}
                            </div>
                            <div class="split-bt-cell-right">
                                Apt <br> {{ $dat->japp_prsnt_apt }}
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                City or town <br> {{ $dat->app_prsnt_city }}
                            </div>
                            <div class="split-bt-cell-right">
                                Postal code <br> {{ $dat->app_prsnt_pcode }}
                            </div>
                        </div>
                    </td>

                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                City or town <br> {{ $dat->japp_prsnt_city }}
                            </div>
                            <div class="split-bt-cell-right">
                                Postal code <br> {{ $dat->japp_prsnt_pcode }}
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                Postal code <br> {{ $dat->app_prsnt_pcode }}
                            </div>
                            <div class="split-bt-cell-right">
                                Telephone Number <br> {{ $dat->app_prsnt_phone }}
                            </div>
                        </div>
                    </td>

                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                Postal code <br> {{ $dat->japp_prsnt_pcode }}
                            </div>
                            <div class="split-bt-cell-right">
                                Telephone Number <br> {{ $dat->japp_prsnt_phone }}
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                Street name and number <br> {{ $dat->app_prsnt_street }}
                            </div>
                            <div class="split-bt-cell-right">
                                Apt <br> {{ $dat->app_prsnt_apt }}
                            </div>
                        </div>
                    </td>
                    <td rowspan="3" style="text-align: center;">Permanent Address or postal address of applicant</td>
                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                Street name and number <br> {{ $dat->japp_prsnt_street }}
                            </div>
                            <div class="split-bt-cell-right">
                                Apt <br> {{ $dat->japp_prsnt_apt }}
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                City or town <br> {{ $dat->app_prsnt_city }}
                            </div>
                            <div class="split-bt-cell-right">
                                Postal code <br> {{ $dat->app_prsnt_pcode }}
                            </div>
                        </div>
                    </td>

                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                City or town <br> {{ $dat->japp_prsnt_city }}
                            </div>
                            <div class="split-bt-cell-right">
                                Postal code <br> {{ $dat->japp_prsnt_pcode }}
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                Postal code <br> {{ $dat->app_prsnt_pcode }}
                            </div>
                            <div class="split-bt-cell-right">
                                Telephone Number <br> {{ $dat->app_prsnt_phone }}
                            </div>
                        </div>
                    </td>

                    <td style="padding: 0px;">
                        <div style="display: flex;">
                            <div class="split-bt-cell-left">
                                Postal code <br> {{ $dat->japp_prsnt_pcode }}
                            </div>
                            <div class="split-bt-cell-right">
                                Telephone Number <br> {{ $dat->japp_prsnt_phone }}
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr style="border-top: 0px white;">
                    <td style="width: 33.33%;" class="bottom-table">Intended place of marriage <br> {{ $dat->intented_place }}</td>
                    <td class="bottom-table bt-tb-bdr">
                        City, town, village <br> {{ $dat->intented_city }}
                    </td>
                    <td class="bottom-table">
                        Country or district
                    </td>
                    <td style="width: 33.33%;" class="bottom-table">Intended date of marriage <br> {{ $dat->intented_mar_date }}</td>
                </tr>

                <tr style="border-top: 0px white;">
                    <td colspan="2" class="bottom-table">I declare that above information is correct.<br>Signature of Applicant <br> <br></td>

                    <td colspan="2" class="bottom-table">I declare that above information is correct.<br>Signature of Joint Applicant <br> <br></td>
                </tr>
                <tr style="border-top: 0px white;">
                    <td colspan="2" class="bottom-table">Date (yyyy-mm-dd) <br> {{ date('Y-m-d') }}</td>

                    <td colspan="2" class="bottom-table">Date (yyyy-mm-dd) <br> {{ date('Y-m-d') }}</td>
                </tr>

            </table>
        </div>
    @endforeach
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Personal information contained on this form is collected under the authority of the Marriage Act, R.S.O 1990, c. M.3 and will be used to determine whether to issue the marriage licence, to register and record the marriage, provide certified copies, extracts, certificates, search notices, photocopies and for statistical, research, medical, law enforcement, adoption, and adoption disclosure purposes. It is an offence to knowingly make a false statement on this form. Questions about this collection should be directed to: the Deputy Registrar General, Office of the Registrar General, 189 Red River Road, P.O. Box 4600, Thunder Bay, ON P7B 6L8. Telephone:1-800-461-2156 (outside Toronto but within North America) or 416-325-8305 (in Toronto or outside North America), 416-325-3408 (TTY/Teletypewriter).</p>
            </div>
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

