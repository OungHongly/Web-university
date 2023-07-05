<!-- edit Notice form-->
<form class="row g-3" action="/notice/edit{{$ntc->noticeId}}">
@csrf
    <!--<div class="row mb-3">
        <label for="txtNoticeID" class="col-sm-2 col-form-label">Notice ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="txtNoticeID">
        </div>-->
        <!--<div class="col-sm-10">
            <select id="txtNoticeID" class="form-select">
                <option selected>Choose notice ID...</option>
                <option>...</option>
            </select>
        </div>
    </div>-->

        <div class="row mb-3">
            <label for="txtDate" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="txtDate" id="txtDate" value="{{$ntc->date}}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="txtEvent" class="col-sm-2 col-form-label">Upcoming Event</label>
            <div class="col-sm-10">
                {{-- <textarea class="form-control" style="height: 100px" id="txtEvent" name="txtEvent">{{$ntc->event}}</textarea> --}}
                <input type="text" class="form-control" name="txtEvent" id="txtEvent" style="padding-bottom:100px" value="{{$ntc->event}}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <input type="hidden" name="hidden_id"/>
                <button type="submit" class="btn btn-primary">Edit Notice</button>
            </div>
        </div>
</form>
<!-- End edit Notice Form -->
