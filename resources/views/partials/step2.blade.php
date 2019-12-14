<div class="container">
    <div class="row custom-padding">
        <div class="form-row" id="form-step-1" role="form" data-toggle="validator">
            <div class="form-group form-check col-md-12">
                <input type="checkbox" class="form-check-input" id="namelastfirst" value="1" name="nlastfirst">
                <label class="form-check-label" for="namelastfirst">Please check this box if Last Name and First and Middle Name do not apply to the applicant because they have either a registered Birth Certificate or Change of Name Certificate bearing a Single Name
                </label>
            </div>

            <div class="form-group col-md-4 app-lm">
                <label for="app-lname">Applicant's Last Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="app-lname" name="applicant_lname">
            </div>

            <div class="form-group col-md-4 app-lm">
                <label for="app-fmname">Applicant's First & Middle Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="app-fmname" name="applicant_fname">
            </div>

            <div class="form-group col-md-4 app-sn">
                <label for="app-sname">Applicant's Single Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="app-sname" name="applicant_sname">
            </div>

            <div class="form-group col-md-4">
                <label for="app-religion">Religion <span class="asterisk">*</span></label>
                <div class="">

                    <select id="app-religion" name="applicant_religion" class="form-control" required>
                        @include('partials.religion')
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

        <div class="col-md-8 checkbox-pad">
            <label>Marital Status <span class="asterisk">*</span></label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="never-mar" name="app_marital_stat" value="1" class="custom-control-input">
                <label class="custom-control-label" for="never-mar">Never Married</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="widowed" name="app_marital_stat" value="2" class="custom-control-input">
                <label class="custom-control-label" for="widowed">Widowed</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="divorced_canada" name="app_marital_stat" value="3" class="custom-control-input">
                <label class="custom-control-label" for="divorced_canada">Divorced in Canada</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="canada_outside" name="app_marital_stat" value="4" class="custom-control-input">
                <label class="custom-control-label" for="canada_outside">Divorced Outside Canada</label>
            </div>
        </div>

            <div class="form-group col-md-4 court-file">
                <label for="app-div-inc">Court File No <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="app-div-inc" name="court_file_no">
            </div>

            <div class="form-group col-md-4 court-file">
                <label for="app-div-city">City Divorce Granted In <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="app-div-city" name="divorced_city">
            </div>

            <div class="form-group col-md-4 divorced-country">
                <label for="app-div-country">Foreign Divorced Country <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="app-div-country" name="divorced_country">
            </div>

            <div class="form-group col-md-4">
                <label for="app-dob">Date of Birth <span class="asterisk">*</span></label>
                <input type="date" class="form-control" id="app-dob" name="applicant_dob" placeholder="MM/DD/YYYY" onchange="submitBday()" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-4">
                <label for="app-age">Age</label>
                <input type="text" class="form-control" id="app-age" name="applicant_age">
            </div>

            <div class="form-group col-md-4">
                <label for="placeof_birth">Place of Birth Country<span class="asterisk">*</span></label>
                <div class="">
                    <select id="placeof_birth" name="app_birth_country" class="form-control">
                        @include('partials.country')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-4 control-prov">
                <label for="placeof_province">Province</label>
                <div class="">
                    <select id="placeof_province" class="form-control" name="app_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <hr>
                <h4>Parents 1</h4>
                <br>
            </div>
            <div class="form-group form-check col-md-12">
                <input type="checkbox" class="form-check-input" id="prnamelastfirst" value="1" name="prnlastfirst">
                <label class="form-check-label" for="prnamelastfirst">Please check this box if Last Name and First and Middle Name do not apply to the applicant because they have either a registered Birth Certificate or Change of Name Certificate bearing a Single Name
                </label>
            </div>

            <div class="form-group col-md-3 prapp-lm">
                <label for="parents-lname">Parents Last Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="parents-lname" name="parents1_lname">
            </div>

            <div class="form-group col-md-3 prapp-lm">
                <label for="parents-fname">Parents First Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="parents-fname" name="parents1_fname">
            </div>

            <div class="form-group col-md-3 prapp-sn">
                <label for="parents-sname">Parents Single Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="parents-sname" name="parents1_sname">
            </div>

            <div class="form-group col-md-3">
                <label for="parplaceof_birth">Parents Place of Birth <span class="asterisk">*</span></label>
                <div class="">
                    <select id="parplaceof_birth" class="form-control" name="parents1_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3 control-provpar1">
                <label for="parplaceof_province">Parents Province</label>
                <div class="">
                    <select id="parplaceof_province" class="form-control" name="parents1_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <hr>
                <h4>Parents 2</h4>
                <br>
            </div>

            <div class="form-group form-check col-md-12">
                <input type="checkbox" class="form-check-input" id="pr2namelastfirst" value="1" name="pr2nlastfirst">
                <label class="form-check-label" for="pr2namelastfirst">Please check this box if Last Name and First and Middle Name do not apply to the applicant because they have either a registered Birth Certificate or Change of Name Certificate bearing a Single Name
                </label>
            </div>

            <div class="form-group col-md-3 pr2app-lm">
                <label for="parents-lname">Parents Last Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="parents-lname" name="parents2_lname">
            </div>

            <div class="form-group col-md-3 pr2app-lm">
                <label for="parents-fname">Parents First Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="parents-fname" name="parents2_fname">
            </div>

            <div class="form-group col-md-3 pr2app-sn">
                <label for="parents-sname">Parents First Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="parents-sname" name="parents2_sname">
            </div>

            <div class="form-group col-md-3">
                <label for="parplaceof_birth">Parents Place of Birth <span class="asterisk">*</span></label>
                <div class="">
                    <select id="parplaceof_birth2" name="parents2_country" class="form-control">
                        @include('partials.country')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3 control-provpar2">
                <label for="parplaceof_province">Parents Province</label>
                <div class="">
                    <select id="parplaceof_province" class="form-control" name="parents2_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <hr>
                <h4>Applicant's Present Residence or Postal Address </h4>
                <br>
            </div>

            <div class="form-group col-md-3">
                <label for="app-street">Street<span class="asterisk">*</span> </label>
                <input type="text" class="form-control" id="app-street" name="app_prsnt_street" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-3">
                <label for="app-apt">APT</label>
                <input type="text" class="form-control" id="app-apt" name="app_prsnt_apt">
            </div>

            <div class="form-group col-md-3">
                <label for="app-city">City <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="app-city" name="app_prsnt_city" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-3">
                <label for="app_country">Country <span class="asterisk">*</span></label>
                <div class="">
                    <select id="app_country" class="form-control" name="app_prsnt_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3 control-appprov">
                <label for="app_province">Province <span class="asterisk">*</span></label>
                <div class="">
                    <select id="app_province" class="form-control" name="app_prsnt_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="app-postal">Postal Code <span class="asterisk">*</span></label>
                <input type="text" class="form-control p-code" id="app-postal" name="app_prsnt_pcode" maxlength="7" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-3">
                <label for="app-phone">Phone <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="app-phone" name="app_prsnt_phone" pattern="^[2-9]{1}[0-9]{2}-[2-9]{1}[0-9]{2}-[0-9]{4}$" placeholder="XXX-XXX-XXXX" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group form-check col-md-12">
                <input type="checkbox" class="form-check-input" id="permanentcheck" value="1" name="nlastfirst">
                <label class="form-check-label" for="permanentcheck">Permanent Home Address Is Different
                </label>
            </div>

            <div class="col-md-12 permanent_val">
                <hr>
                <h4>Applicant's Permanent Home Address </h4>
                <br>
            </div>

            <div class="form-group col-md-3 permanent_val">
                <label for="app-street-p">Street<span class="asterisk">*</span> </label>
                <input type="text" class="form-control" id="app-street-p" name="app_prmnt_street">
            </div>

            <div class="form-group col-md-3 permanent_val">
                <label for="app-apt-p">APT <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="app-apt-p" name="app_prmnt_apt">
            </div>

            <div class="form-group col-md-3 permanent_val">
                <label for="app-city-p">City <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="app-city-p" name="app_prmnt_city">
            </div>

            <div class="form-group col-md-3 permanent_val">
                <label for="app_country-p">Country <span class="asterisk">*</span></label>
                <div class="">
                    <select id="app_country-p" class="form-control" name="app_prmnt_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3 permanent_val control-parper">
                <label for="app_province-p">Province <span class="asterisk">*</span></label>
                <div class="">
                    <select id="app_province-p" class="form-control" name="app_prmnt_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3 permanent_val">
                <label for="app-postal-p">Postal Code <span class="asterisk">*</span></label>
                <input type="text" class="form-control p-code" id="app-postal-p" name="app_prmnt_pcode" maxlength="7">
            </div>

            <div class="form-group col-md-3 permanent_val">
                <label for="app-phone-p">Phone <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="app-phone-p" name="app_prmnt_phone" pattern="^[2-9]{1}[0-9]{2}-[2-9]{1}[0-9]{2}-[0-9]{4}$" placeholder="XXX-XXX-XXXX">
            </div>
        </div>
    </div>
</div>


