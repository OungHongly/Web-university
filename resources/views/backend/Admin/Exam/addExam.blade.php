<!-- add Exam Form -->
<form class="row g-3" action="{{ url('insert-data') }}" method="POST">
    {{ csrf_field('') }}
    <div class="row mb-3">
        <label for="paperCode" class="col-sm-2 col-form-label">Paper Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="papercode" id="paperCode">
        </div>
    </div>

    <div class="row mb-3">
        <label for="txtSubjectname" class="col-sm-2 col-form-label">Subject Name</label>
        <div class="col-sm-10">
            <select id="txtSubjectname" class="form-select">
                <option selected>Choose subject name...</option>
                <option>System Analysis</option>
                <option>Java</option>
                <option>Python</option>
                <option>Web Developer</option>
                <option>Oracle</option>
                <option>Linux</option>
                <option>...</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="txtCoursename" class="col-sm-2 col-form-label">Course Name</label>
        <div class="col-sm-10">
            <select id="txtCoursename" class="form-select">
                <option selected>Choose course name...</option>
                <option>MIS</option>
                <option>BIT</option>
                <option>Design</option>
                <option>...</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="txtDate" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="txtDate" id="endtime">
        </div>
    </div>

    <div class="row mb-3">
        <label for="startTime" class="col-sm-2 col-form-label">Start Time</label>
        <div class="col-sm-10">
            <input type="time" class="form-control" name="startTime" id="endtime">
        </div>
    </div>

    <div class="row mb-3">
        <label for="endtime" class="col-sm-2 col-form-label">End Time</label>
        <div class="col-sm-10">
            <input type="time" class="form-control" name="endtime" id="endtime">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Add Exam Schedule</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </div>

</form><!-- end add Exam Form -->
