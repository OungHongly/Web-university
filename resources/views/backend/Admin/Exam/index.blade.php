@extends('backend.layouts.main')
@section('title', 'Exam')
@section('main-container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Exam</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Exam</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <hr class="line">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <!-- tab-->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Exam Tabs</h5>

                            <!-- course Tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="exam-tab" data-bs-toggle="tab"
                                        data-bs-target="#exam" type="button" role="tab" aria-controls="exam"
                                        aria-selected="true">Exam</button>
                                </li>
                                <!--<li class="nav-item" role="presentation">
                                    <button class="nav-link" id="editExam-tab" data-bs-toggle="tab"
                                        data-bs-target="#editExam" type="button" role="tab" aria-controls="editExam"
                                        aria-selected="false">Edit Exam Shedule</button>
                                </li>-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="addExam-tab" data-bs-toggle="tab" data-bs-target="#addExam"
                                        type="button" role="tab" aria-controls="addExam" aria-selected="false">Add Exam
                                        Schedule</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="myTabContent">
                                <div class="tab-pane fade show active" id="exam" role="tabpanel"
                                    aria-labelledby="exam-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Exam Schedule</h5>
                                            <table class="table table-striped datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Paper Code</th>
                                                        <th scope="col">Subject</th>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Start Time</th>
                                                        <th scope="col">End Time</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($exams as $ex)
                                                    <tr>
                                                        <th scope="row">{{ $ex->examid}}</th>
                                                        <td>{{ $ex->papercode }}</td>
                                                        <td>{{ $ex->subject }}</td>
                                                        <td>{{ $ex->course }}</td>
                                                        <td>{{ $ex->date }}</td>
                                                        <td>{{ $ex->starttime }}</td>
                                                        <td>{{ $ex->endtime }}</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Exam</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Exam.editExam')

                                                                            </div>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- End edit Modal-->

                                                            <!-- delete Modal -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete">
                                                                Delete
                                                            </button>
                                                            <div class="modal fade" id="delete" tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                    <h5 class="modal-title">Confirmation</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure to delete this record?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="btn btn-primary">Delete</button>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div><!-- End delete Modal-->
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <!-- End Table with stripped rows -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="editExam" role="tabpanel" aria-labelledby="editExam-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Edit Subject</h5>

                                            <!-- Edit Exam Form -->
                                            @include('backend.Admin.Exam.editExam')

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="addExam" role="tabpanel" aria-labelledby="addExam-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Add Exam</h5>

                                            <!-- add Exam form-->
                                            @include('backend.Admin.Exam.addExam')

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Default Tabs -->
                </div>
            </div>
        </section>

    </main>
@endsection
