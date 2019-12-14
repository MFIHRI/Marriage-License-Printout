<?php

namespace App\Http\Controllers;

//use Barryvdh\DomPDF\PDF;
use App\Generalinfo;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ApplicantController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'intented_place' => 'required',
            'intented_city' => 'required',
            'intented_mar_date' => 'required',
        ]);

        $general_info = DB::table('general_infos')->insertGetId([
                'intented_place' => $request->input('intented_place'),
                'intented_city' => $request->input('intented_city'),
                'intented_mar_date' => $request->input('intented_mar_date'),
                'licence_lang' => $request->input('licence_lang'),
                'applicant_email' => $request->input('applicant_email')
            ]
        );

        $applicant_data = DB::table('applicants')->insert([
                'applicant_lname' => $request->input('applicant_lname'),
                'applicant_fname' => $request->input('applicant_fname'),
                'applicant_sname' => $request->input('applicant_sname'),
                'app_marital_stat' => $request->input('app_marital_stat'),
                'court_file_no' => $request->input('court_file_no'),
                'divorced_city' => $request->input('divorced_city'),
                'divorced_country' => $request->input('divorced_country'),
                'applicant_religion' => $request->input('applicant_religion'),
                'applicant_dob' => $request->input('applicant_dob'),
                'applicant_age' => $request->input('applicant_age'),
                'app_birth_country' => $request->input('app_birth_country'),
                'app_province' => $request->input('app_province'),
                'parents1_fname' => $request->input('parents1_fname'),
                'parents1_lname' => $request->input('parents1_lname'),
                'parents1_sname' => $request->input('parents1_sname'),
                'parents1_country' => $request->input('parents1_country'),
                'parents1_province' => $request->input('parents1_province'),
                'parents2_fname' => $request->input('parents2_fname'),
                'parents2_lname' => $request->input('parents2_lname'),
                'parents2_sname' => $request->input('parents2_sname'),
                'parents2_country' => $request->input('parents2_country'),
                'parents2_province' => $request->input('parents2_province'),
                'app_prsnt_street' => $request->input('app_prsnt_street'),
                'app_prsnt_apt' => $request->input('app_prsnt_apt'),
                'app_prsnt_city' => $request->input('app_prsnt_city'),
                'app_prsnt_country' => $request->input('app_prsnt_country'),
                'app_prsnt_province' => $request->input('app_prsnt_province'),
                'app_prsnt_pcode' => $request->input('app_prsnt_pcode'),
                'app_prsnt_phone' => $request->input('app_prsnt_phone'),
            ]
        );

        $joint_applocant = DB::table('joint_applicants')->insert([
                'japplicant_lname' => $request->input('japplicant_lname'),
                'japplicant_fname' => $request->input('japplicant_fname'),
                'japplicant_sname' => $request->input('japplicant_sname'),
                'japp_marital_stat' => $request->input('japp_marital_stat'),
                'jcourt_file_no' => $request->input('jcourt_file_no'),
                'jdivorced_city' => $request->input('jdivorced_city'),
                'jdivorced_country' => $request->input('jdivorced_country'),
                'japplicant_religion' => $request->input('japplicant_religion'),
                'japplicant_dob' => $request->input('japplicant_dob'),
                'japplicant_age' => $request->input('japplicant_age'),
                'japp_birth_country' => $request->input('japp_birth_country'),
                'japp_province' => $request->input('japp_province'),
                'jparents1_fname' => $request->input('jparents1_fname'),
                'jparents1_lname' => $request->input('jparents1_lname'),
                'jparents1_sname' => $request->input('jparents1_sname'),
                'jparents1_country' => $request->input('jparents1_country'),
                'jparents1_province' => $request->input('jparents1_province'),
                'jparents2_fname' => $request->input('jparents2_fname'),
                'jparents2_lname' => $request->input('jparents2_lname'),
                'jparents2_sname' => $request->input('jparents2_sname'),
                'jparents2_country' => $request->input('jparents2_country'),
                'jparents2_province' => $request->input('jparents2_province'),
                'japp_prsnt_street' => $request->input('japp_prsnt_street'),
                'japp_prsnt_apt' => $request->input('japp_prsnt_apt'),
                'japp_prsnt_city' => $request->input('japp_prsnt_city'),
                'japp_prsnt_country' => $request->input('japp_prsnt_country'),
                'japp_prsnt_province' => $request->input('japp_prsnt_province'),
                'japp_prsnt_pcode' => $request->input('japp_prsnt_pcode'),
                'japp_prsnt_phone' => $request->input('japp_prsnt_phone'),
            ]
        );

        $id = Crypt::encryptString($general_info);
        //dd($id);
        return redirect()->route('printData', [$id]);

    }


    public function print($id)
    {
//        $data_id = Generalinfo::find($id);
//        $gen_id = $data_id->id;
//        //dd($gen_id);
        $decryptedid = Crypt::decryptString($id);

        $data = DB::table('general_infos')
            ->join('applicants', 'general_infos.id', '=', 'applicants.id')
            ->join('joint_applicants', 'general_infos.id', '=', 'joint_applicants.id')
            ->where('general_infos.id', '=', $decryptedid)
            ->select('*')
            ->get();
        //dd($data);

        return view('partials.print', compact('data'));
    }
}
