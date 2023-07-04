<!-- Add Professor Form -->
@csrf
<form class="row g-3" action="/professor/add">
    <div class="row mb-3">
        <label for="inputfirstname" class="col-sm-2 col-form-label">Firstname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputfirstname" name="firstname">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputlastname" class="col-sm-2 col-form-label">Lastname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputlastname" name="lastname">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputusername" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputusername" name="username">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password">
        </div>
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rdFemale" id="rdFemale" value="female" checked>
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
    </div>
    <div class="row mb-3">
        <label for="inputPhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputPhoneNumber" name="phoneNumber">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Add Professor</button>
        </div>
    </div>

</form><!-- End Add Professor Form -->
