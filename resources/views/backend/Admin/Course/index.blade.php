@extends('backend.layouts.main')
@section('title', 'Course')
@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Course</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Course</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <hr class="line">
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- MIS Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card mis-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">MIS <span>| Course</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-at-line"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>MIS</h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End MIS Card -->

                    <!-- BIT Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card bit-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">BIT <span>| Course</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-at-line"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>BIT</h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End bit Card -->

                    <!-- design Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card design-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Design <span>| Course</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-at-line"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Design</h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->
                </div>
            </div>
        </div>
    </section>
    <hr class="line">
    <!-- tab-->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Course Tabs</h5>

                        <!-- course Tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="course-tab" data-bs-toggle="tab"
                                    data-bs-target="#course" type="button" role="tab" aria-controls="course"
                                    aria-selected="true">Course</button>
                            </li>
                            <!--<li class="nav-item" role="presentation">
                                <button class="nav-link" id="editCourse-tab" data-bs-toggle="tab"
                                    data-bs-target="#editCourse" type="button" role="tab"
                                    aria-controls="editCourse" aria-selected="false">Edit Course</button>
                            </li>-->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="addCourse-tab" data-bs-toggle="tab"
                                    data-bs-target="#addCourse" type="button" role="tab"
                                    aria-controls="addCourse" aria-selected="false">Add Course</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="myTabContent">
                            <div class="tab-pane fade show active" id="course" role="tabpanel"
                                aria-labelledby="course-tab">
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Course List</h5>
                                        <!-- Table with stripped rows -->
                                        <table class="table table-striped datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Course ID</th>
                                                    <th scope="col">Course Name</th>
                                                    <th scope="col">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($courses as $cou)
                                                <tr>
                                                    <td>{{ $cou->course_id }}</td>
                                                    <td>{{ $cou->course_name }}</td>
                                                    <td><!--Edit-->
                                                        <button type="button" class="btn btn-primary">Add</button>
                                                        
                                                        <button type="button" class="btn btn-primary">Delete</button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!-- End Table with stripped rows -->
                                    </div>
                                </div>
                            </div>
                            <!--<div class="tab-pane fade" id="editCourse" role="tabpanel"
                                aria-labelledby="editCourse-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Edit Course</h5>

                                        <!-- edit Course Form -->
                                        <!--include('backend.admin.course.editCourse')

                                    </div>
                                </div>
                            </div>-->
                            <div class="tab-pane fade" id="addCourse" role="tabpanel"
                                aria-labelledby="addCourse-tab">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success')}}
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Add Course</h5>

                                        <!-- add course form-->
                                        @include('backend.Admin.Course.addCourse')

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Default Tabs -->
            </div>
        </div>
    </section>
    <!-- end tab-->
</main>


@endsection
