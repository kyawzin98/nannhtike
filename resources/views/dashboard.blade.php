@extends('master')
@section('content')
    <div class="row row-eq-height my-3">
        <div class="col-md-3 col-sm-6">
            <a href="{{route('Tasks.index')}}" class="">
                <div class="card no-b mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="icon-list s-18"></i></div>
                            <div><span class="badge badge-pill badge-primary">4:30</span></div>
                        </div>
                        <div class="text-center">
                            <div class="s-48 my-3 font-weight-lighter">68</div>
                            View All List
                        </div>

                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card no-b mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div><i class="icon-user-circle-o s-18"></i></div>
                        <div><span class="badge badge-pill badge-danger">4:30</span></div>
                    </div>
                    <div class="text-center">
                        <div class="s-48 my-3 font-weight-lighter">170</div>
                        New Users
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card no-b mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div><i class="icon-package s-18"></i></div>
                        <div><span class="text-success">40+35</span></div>
                    </div>
                    <div class="text-center">
                        <div class="s-48 my-3 font-weight-lighter">35</div>
                        New Products
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card no-b mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div><i class="icon-user-times s-18"></i></div>
                        <div><span class="text-danger">50</span></div>
                    </div>
                    <div class="text-center">
                        <div class="s-48 my-3 font-weight-lighter">95</div>
                        Returning Users
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection