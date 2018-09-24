@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header mb-3">
                    <h3 class="box-title">Responsive Hover Table</h3>
                    <div class="box-tools">
                        <div class="input-group input-group-sm focused" style="width: 150px;">
                            <input name="table_search" class="form-control float-right" placeholder="Search"
                                   type="text">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-secondary"><i class="icon-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>UserName</th>
                            <th>Phone</th>
                            <th>Device Name</th>
                            <th>Problem</th>
                            <th>Date</th>
                            <th>
                                <a href="{{route('dashboard')}}" class="btn btn-primary">
                                    <span class="icon-home"></span>&ensp;Dashboard
                                </a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>11-7-2014</td>
                            <td>
                                <span class="badge text-white badge text-white-pill badge text-white-success">Approved</span>
                            </td>
                            <td>Bacon ipsum dolor sit</td>
                            <td>Bacon ipsum dolor sit</td>
                            <td>Detail</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection