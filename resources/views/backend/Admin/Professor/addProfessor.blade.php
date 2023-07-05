<!-- Add Professor Form -->
@csrf
<form class="row g-3" action="/professor/add">
    <div class="row mb-3">
        <label for="firstname" class="col-sm-2 col-form-label">Firstname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
    </div>
    <div class="row mb-3">
        <label for="lastname" class="col-sm-2 col-form-label">Lastname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
    </div>
    <div class="row mb-3">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username">
        </div>
    </div>
    <div class="row mb-3">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password">
        </div>
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
        <div class="col-sm-6">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender"
                    id="rFemale" value="female" checked>
                <label class="form-check-label" for="rFemale">
                    Female
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio"
                    name="gender"id="rMale" value="male">
                <label class="form-check-label" for="rMale">
                    Male
                </label>
            </div>
        </div>
    </fieldset>
    <div class="row mb-3">
        <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="phoneNumber" name="phoneNumber">
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
        </div>
    </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Add Professor</button>
        </div>
    </div>

</form><!-- End Add Professor Form -->
