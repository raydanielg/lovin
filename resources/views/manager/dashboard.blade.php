@extends('adminlte::page')

@section('title', 'Manager Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard Overview</h1>
@stop

@section('content')
    <!-- Stats Cards Row -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>1,234</h3>
                    <p>Total Students</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <span class="small-box-footer">
                    <i class="fas fa-arrow-up"></i> +12 this month
                </span>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>28</h3>
                    <p>Subjects</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
                <span class="small-box-footer">Active subjects</span>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>85%</h3>
                    <p>Marks Entered</p>
                </div>
                <div class="icon">
                    <i class="fas fa-clipboard-check"></i>
                </div>
                <span class="small-box-footer">456 remaining</span>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>23</h3>
                    <p>Pending Review</p>
                </div>
                <div class="icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <span class="small-box-footer">Requires attention</span>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Activity Row -->
    <div class="row">
        <!-- Quick Actions -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Quick Actions</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('manager.marks') }}" class="btn btn-success btn-block mb-2">
                        <i class="fas fa-plus mr-2"></i> Enter New Marks
                    </a>
                    <a href="{{ route('manager.students') }}" class="btn btn-outline-primary btn-block mb-2">
                        <i class="fas fa-user-plus mr-2"></i> Add Student
                    </a>
                    <a href="{{ route('manager.reports') }}" class="btn btn-outline-secondary btn-block">
                        <i class="fas fa-file-export mr-2"></i> Generate Report
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent Activity</h3>
                </div>
                <div class="card-body p-0">
                    <div class="timeline timeline-inverse p-3">
                        <!-- Item 1 -->
                        <div class="time-label">
                            <span class="bg-success">Today</span>
                        </div>
                        <div>
                            <i class="fas fa-check bg-success"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> 2 hours ago</span>
                                <h3 class="timeline-header">Marks entered for Form 4 Mathematics</h3>
                                <div class="timeline-body">
                                    <span class="badge badge-success">Completed</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="time-label">
                            <span class="bg-primary">Yesterday</span>
                        </div>
                        <div>
                            <i class="fas fa-user-plus bg-primary"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> Yesterday</span>
                                <h3 class="timeline-header">New student registered - John Doe (Form 2)</h3>
                                <div class="timeline-body">
                                    <span class="badge badge-primary">New</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div>
                            <i class="fas fa-edit bg-warning"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> 3 days ago</span>
                                <h3 class="timeline-header">Report generated - Term 1 Results</h3>
                                <div class="timeline-body">
                                    <span class="badge badge-warning">Report</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div>
                            <i class="fas fa-exclamation bg-danger"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> 5 days ago</span>
                                <h3 class="timeline-header">Missing marks for Form 3 Science</h3>
                                <div class="timeline-body">
                                    <span class="badge badge-danger">Pending</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <i class="far fa-clock bg-gray"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
