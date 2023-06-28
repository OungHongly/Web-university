@extends('backend.layouts.main')
@section('title', 'Professor')
@section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Professor</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Professor</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <hr class="line">
        <!-- tab-->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Professor Tabs</h5>

                            <!-- course Tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="professor-tab" data-bs-toggle="tab"
                                        data-bs-target="#professor" type="button" role="tab" aria-controls="professor"
                                        aria-selected="true">Professor</button>
                                </li>
                                <!--<li class="nav-item" role="presentation">
                                    <button class="nav-link" id="editProfessor-tab" data-bs-toggle="tab"
                                        data-bs-target="#editProfessor" type="button" role="tab"
                                        aria-controls="editProfessor" aria-selected="false">Edit Professor</button>
                                </li>-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="addProfessors-tab" data-bs-toggle="tab"
                                        data-bs-target="#addProfessors" type="button" role="tab"
                                        aria-controls="addProfessors" aria-selected="false">Add Professor</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="myTabContent">
                                <div class="tab-pane fade show active" id="professor" role="tabpanel"
                                    aria-labelledby="professor-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Professor List</h5>
                                            <!-- Table with stripped rows -->
                                            <table class="table table-striped datatable">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>LAST NAME</th>
                                                        <th>FIRST NAME</th>
                                                        <th>USERNAME</th>
                                                        <th>PASSWORD</th>
                                                        <th>GENDER</th>
                                                        <th>PHONE NUMBER</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $tch)
                                                    <tr>
                                                        <td>{{$tch->user_id}}</td>
                                                        <td>{{$tch->first_name}}</td>
                                                        <td>{{$tch->last_name}}</td>
                                                        <td>{{$tch->username}}</td>
                                                        <td>{{$tch->password}}</td>
                                                        <td>{{$tch->gender}}</td>
                                                        <td>{{$tch->phoneNumber}}</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Professor</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Professor.editProfessor')

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
                                <!--<div class="tab-pane fade" id="editProfessor" role="tabpanel"
                                    aria-labelledby="editProfessor-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Edit Professor</h5>

                                            <!-- Edit Professor. Form -->
                                            <!--include('backend.Admin.Professor.editProfessor')

                                        </div>
                                    </div>
                                </div>-->
                                <div class="tab-pane fade" id="addProfessors" role="tabpanel"
                                    aria-labelledby="addProfessors-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Add Professor</h5>

                                            <!-- add Professor. form-->
                                            @include('backend.Admin.Professor.addProfessor')

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Default Tabs -->
                </div>
            </div>
        </section>

        <!-- End professor Table -->
    </main>
@endsection
