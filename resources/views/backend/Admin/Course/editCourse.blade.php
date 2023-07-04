<form class="row g-3" action="/course/edit">
    <div class="col-md-6">
        
        <label for="txtcourse_id" class="form-label">Course ID</label>
        <input type="text" class="form-control" id="txtcourse_id" name="txtcourse_id">
        @if($errors->has('txtcourse_id'))
            <span class="text-danger">{{ $errors->first('txtcourse_id')}}</span>
        @endif
    </div>
    <div class="col-md-6"> 
        <label for="txtcourse_name" class="form-label">Course Name</label>
        <input type="text" class="form-control" id="txtcourse_name" name="txtcourse_name">
        @if($errors->has('txtcourse_name'))
            <span class="text-danger">{{ $errors->first('txtcourse_id')}}</span>
        @endif
    </div>
    <!--<fieldset>Subject
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="python">
            <label class="form-check-label" for="python">
                python
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="c#">
            <label class="form-check-label" for="c#">
                C#
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="laravel">
            <label class="form-check-label" for="laravel">
                Laravel
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="oracle">
            <label class="form-check-label" for="oracle">
                Oracle
            </label>
        </div>
    </fieldset>-->

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Edit Course</button>
        <!--<button type="reset" class="btn btn-secondary">Reset</button>-->
    </div>
</form><!-- End edit course Form -->
