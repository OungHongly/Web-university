<!-- Edit Professor Form -->
<form>
    <div class="row mb-3">
        <label for="inputUserName" class="col-sm-2 col-form-label">Professor Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputUserName">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputlastname" class="col-sm-2 col-form-label">Lastname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputlastname">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputusername" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputusername">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control">
        </div>
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rdFemale" id="rdFemale" value="female">
                <label class="form-check-label" for="rdFemale">
                    Female
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rdMale" id="rdMale" value="male">
                <label class="form-check-label" for="rdMale">
                    Male
                </label>
            </div>
        </div>
    </fieldset>
    <div class="row mb-3">
        <label for="inputPhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputPhoneNumber">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Edit Professor</button>
            <!--<button type="reset" class="btn btn-secondary">Reset</button>-->
        </div>
    </div>

</form><!-- End edit Professor Form -->
