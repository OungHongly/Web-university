<!-- add Exam Form -->
@csrf
<form class="row g-3" action="{{route('addExam')}}">
    <div class="row mb-3">
        <label for="paperCode" class="col-sm-2 col-form-label">Paper Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="paperCode" id="paperCode">
        </div>
    </div>

    <div class="row mb-3">
        <label for="txtSubjectname" class="col-sm-2 col-form-label">Subject Name</label>
        <div class="col-sm-10">
            <!--<input type="text" class="form-control" name="txtSubjectname" id="txtSubjectname">-->
            
            <select id="txtSubjectname" class="form-select" name="txtSubjectname">
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
            <!--<input type="text" class="form-control" name="txtCoursename" id="txtCoursename">-->
            
                <select id="txtCoursename" class="form-select" name="txtCoursename">
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
            <input type="date" class="form-control" name="txtDate" id="txtDate">
        </div>
    </div>

    <div class="row mb-3">
        <label for="startTime" class="col-sm-2 col-form-label">Start Time</label>
        <div class="col-sm-10">
            <input type="time" class="form-control" name="txtstartTime" id="txtstartTime">
        </div>
    </div>

    <div class="row mb-3">
        <label for="endtime" class="col-sm-2 col-form-label">End Time</label>
        <div class="col-sm-10">
            <input type="time" class="form-control" name="txtendTime" id="txtendTime">
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
