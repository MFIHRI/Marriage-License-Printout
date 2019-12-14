<div class="container">
    <div class="row custom-padding">
        <div class="form-row" id="form-step-1" role="form" data-toggle="validator">

            <div class="form-group form-check col-md-12">
                <input type="checkbox" class="form-check-input" id="jnamelastfirst" value="1" name="nlastfirst">
                <label class="form-check-label" for="jnamelastfirst">Please check this box if Last Name and First and Middle Name do not apply to the applicant because they have either a registered Birth Certificate or Change of Name Certificate bearing a Single Name
                </label>
            </div>

            <div class="form-group col-md-4 japp-lm">
                <label for="japp-lname">Applicant's Last Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="japp-lname" name="japplicant_lname">
            </div>

            <div class="form-group col-md-4 japp-lm">
                <label for="japp-fmname">Applicant's First & Middle Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="japp-fmname" name="japplicant_fname">
            </div>

            <div class="form-group col-md-4 japp-sn">
                <label for="japp-sname">Applicant's Single Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="japp-sname" name="japplicant_sname">
            </div>

            <div class="form-group col-md-4">
                <label for="japp-religion">Religion</label>
                <div class="">
                    <select id="japp-religion" class="form-control" name="japplicant_religion" required>
                        @include('partials.religion')
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-md-8 checkbox-pad">
                <label>Marital Status <span class="asterisk">*</span></label><br>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="jnever-mar" name="japp_marital_stat" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="jnever-mar">Never Married</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="jwidowed" name="japp_marital_stat" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="jwidowed">Widowed</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="jdivorced_canada" name="japp_marital_stat" value="3" class="custom-control-input">
                    <label class="custom-control-label" for="jdivorced_canada">Divorced in Canada</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="jcanada_outside" name="japp_marital_stat" value="4" class="custom-control-input">
                    <label class="custom-control-label" for="jcanada_outside">Divorced Outside Canada</label>
                </div>
            </div>

            <div class="form-group col-md-4 jcourt-file">
                <label for="japp-div-inc">Court File No <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="japp-div-inc" name="jcourt_file_no">
            </div>


            <div class="form-group col-md-4 jcourt-file">
                <label for="japp-div-city">City Divorce Granted In <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="japp-div-city" name="jdivorced_city">
            </div>


            <div class="form-group col-md-4 jdivorced-country">
                <label for="japp-div-country">Foreign Divorced Country <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="japp-div-country" name="jdivorced_country">
            </div>


            <div class="form-group col-md-4">
                <label for="japp-dob">Date of Birth <span class="asterisk">*</span></label>
                <input type="date" class="form-control" id="japp-dob" name="japplicant_dob" placeholder="MM/DD/YYYY" onchange="submitBday3()" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-4">
                <label for="japp-age">Age</label>
                <input type="text" class="form-control" id="japp-age" name="japplicant_age">
            </div>

            <div class="form-group col-md-4">
                <label for="jplaceof_birth">Place of Birth Country</label>
                <div class="">
                    <select id="jplaceof_birth" class="form-control" name="japp_birth_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-4 jcontrol-prov">
                <label for="jplaceof_province">Province</label>
                <div class="">
                    <select id="jplaceof_province" class="form-control" name="japp_province">
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
                <input type="checkbox" class="form-check-input" id="prjnamelastfirst" value="1" name="jnlastfirst">
                <label class="form-check-label" for="prjnamelastfirst">Please check this box if Last Name and First and Middle Name do not apply to the applicant because they have either a registered Birth Certificate or Change of Name Certificate bearing a Single Name
                </label>
            </div>

            <div class="form-group col-md-4 prjapp-lm">
                <label for="jparents-lname">Parents Last Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="jparents-lname" name="jparents1_lname">
            </div>

            <div class="form-group col-md-4 prjapp-lm">
                <label for="jparents-fname">Parents First Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="jparents-fname" name="jparents1_fname">
            </div>

            <div class="form-group col-md-4 prjapp-sn">
                <label for="jparents-sname">Parents Single Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="jparents-fname" name="jparents1_sname">
            </div>

            <div class="form-group col-md-4">
                <label for="jparplaceof_birth">Parents Place of Birth</label>
                <div class="">
                    <select id="jparplaceof_birth" class="form-control" name="jparents1_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-4 jcontrol-provpar1">
                <label for="jparplaceof_province">Parents Province</label>
                <div class="">
                    <select id="jparplaceof_province" class="form-control" name="jparents1_province">
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
                <input type="checkbox" class="form-check-input" id="pr2jnamelastfirst" value="1" name="pr2jnlastfirst">
                <label class="form-check-label" for="pr2jnamelastfirst">Please check this box if Last Name and First and Middle Name do not apply to the applicant because they have either a registered Birth Certificate or Change of Name Certificate bearing a Single Name
                </label>
            </div>

            <div class="form-group col-md-4 pr2japp-lm">
                <label for="jparents-lname">Parents Last Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="jparents-lname" name="jparents2_lname">
            </div>

            <div class="form-group col-md-4 pr2japp-lm">
                <label for="jparents-fname">Parents First Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="jparents-fname" name="jparents2_fname">
            </div>

            <div class="form-group col-md-4 pr2japp-sn">
                <label for="jparents-sname">Parents Single Name <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="jparents-sname" name="jparents2_sname">
            </div>

            <div class="form-group col-md-4">
                <label for="jparplaceof_birth">Parents Place of Birth country</label>
                <div class="">
                    <select id="jparplaceof_birth" class="form-control" name="jparents2_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-4 jcontrol-provpar2">
                <label for="jparplaceof_province">Parents Province</label>
                <div class="">
                    <select id="jparplaceof_province" class="form-control" name="jparents2_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <hr>
                <h4>Applicant's Present Residence or Postal Address</h4>
                <br>
            </div>

            <div class="form-group col-md-3">
                <label for="japp-street">Street <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="japp-street" name="japp_prsnt_street" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-3">
                <label for="japp-apt">APT</label>
                <input type="text" class="form-control" id="japp-apt" name="japp_prsnt_apt">
            </div>

            <div class="form-group col-md-3">
                <label for="japp-city">City <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="japp-city" name="japp_prsnt_city" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-3">
                <label for="japp_country">Country</label>
                <div class="">
                    <select id="japp_country" class="form-control" name="japp_prsnt_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3 jcontrol-appprov">
                <label for="japp_province">Province</label>
                <div class="">
                    <select id="japp_province" class="form-control" name="japp_prsnt_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="japp-postal">Postal Code <span class="asterisk">*</span></label>
                <input type="text" class="form-control p-code" id="japp-postal" name="japp_prsnt_pcode" maxlength="7" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-3">
                <label for="japp-phone">Phone <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="japp-phone" name="japp_prsnt_phone" pattern="^[2-9]{1}[0-9]{2}-[2-9]{1}[0-9]{2}-[0-9]{4}$" placeholder="XXX-XXX-XXXX" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group form-check col-md-12">
                <input type="checkbox" class="form-check-input" id="jpermanentcheck" value="1" name="jnlastfirst">
                <label class="form-check-label" for="jpermanentcheck">Permanent Home Address Is Different
                </label>
            </div>

            <div class="col-md-12 jpermanent_val">
                <hr>
                <h4>Applicant's Permanent Home Address </h4>
                <br>
            </div>

            <div class="form-group col-md-3 jpermanent_val">
                <label for="japp-street-p">Street<span class="asterisk">*</span> </label>
                <input type="text" class="form-control" id="japp-street-p" name="japp_prmnt_street">
            </div>

            <div class="form-group col-md-3 jpermanent_val">
                <label for="japp-apt-p">APT</label>
                <input type="text" class="form-control" id="japp-apt-p" name="japp_prmnt_apt">
            </div>


            <div class="form-group col-md-3 jpermanent_val">
                <label for="japp-city-p">City <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="japp-city-p" name="japp_prmnt_city">
            </div>

            <div class="form-group col-md-3 jpermanent_val">
                <label for="japp_country-p">Country <span class="asterisk">*</span></label>
                <div class="">
                    <select id="japp_country-p" class="form-control" name="japp_prmnt_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3 jpermanent_val jcontrol-parper">
                <label for="japp_province-p">Province <span class="asterisk">*</span></label>
                <div class="">
                    <select id="japp_province-p" class="form-control" name="japp_prmnt_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3 jpermanent_val">
                <label for="japp-postal-p">Postal Code <span class="asterisk">*</span></label>
                <input type="text" class="form-control p-code" id="japp-postal-p" name="japp_prmnt_pcode" maxlength="7">
            </div>

            <div class="form-group col-md-3 jpermanent_val">
                <label for="japp-phone-p">Phone <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="japp-phone-p" name="japp_prmnt_phone" pattern="^[2-9]{1}[0-9]{2}-[2-9]{1}[0-9]{2}-[0-9]{4}$" placeholder="XXX-XXX-XXXX">
            </div>

        </div>
    </div>
</div>


