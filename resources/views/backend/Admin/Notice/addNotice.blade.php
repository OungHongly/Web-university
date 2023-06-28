<!-- add Notice Form -->
@csrf
<form class="row g-3" action="/notice/add">
    <div class="row mb-3">
        <label for="txtDate" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="txtDate" name="txtDate">
            <!-- if ($errors->has('txtDate'))
                <span class="text-danger">{{ $errors->first('txtDate') }}</span>
            <!--endif-->
        </div>
    </div>

    <div class="row mb-3">
        <label for="txtEvent" class="col-sm-2 col-form-label">Upcoming Event</label>
        <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="txtEvent" name="txtEvent"></textarea>
            <!-- if ($errors->has('txtEvent'))
                <span class="text-danger">{{ $errors->first('txtEvent') }}</span>
            <!-- endif-->
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Add Notice</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </div>
</form><!-- end add Notice Form -->
