<div class="container">
    <div class="row custom-padding">
        <div class="form-row" id="form-step-0" role="form" data-toggle="validator">
            <div class="form-group col-md-4">
                <label for="mar-place">Intended Place of Marriage <span class="asterisk">*</span></label>
                <input type="text" class="form-control" id="mar-place" name="intented_city" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-4">
                <label for="mar-date">Intended Date of Marriage: <span class="asterisk">*</span></label>
                <input type="date" class="form-control" id="mar-date" name="intented_mar_date" placeholder="MM/DD/YYYY" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-4">
                <label for="mar-lang">Language for the Licence</label>
                <div class="">
                    <select id="mar-lang" class="form-control" name="licence_lang">
                        <option value="English" selected>English</option>
                        <option value="French">French</option>
                    </select>
                </div>
            </div>
            <div class="form-group form-check col-md-12">
                <input type="checkbox" class="form-check-input" id="intended" value="1" name="intented_place" required>
                <label class="form-check-label" for="intended"><span class="asterisk">*</span>Confirm the intended place of marriage is in Ontario
                </label>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
</div>

