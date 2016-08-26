@extends('layouts.main')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Welcome to <strong>University</strong>.</div>
        </div>
    </div>

    @if(Auth::check())

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Students of <strong>University</strong>.</div>
                <div class="panel-body">

                    @if(count($students))

                        <table id="dataTable" class="display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Birthday</th>
                                <th>Branch</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($students as $student)

                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->firstname }}</td>
                                    <td>{{ $student->lastname }}</td>
                                    <td>{{ $student->birthday }}</td>
                                    <td>{{ $student->branch->name }}</td>
                                    <td>
                                        <div style="float: right">

                                            {!! Form::open(['route'=>['student.destroy', $student->id], 'method'=>'DELETE']) !!}
                                            <button name="submit" type="submit" data-toggle="tooltip" title="Delete"
                                                    class="btn btn-sm btn-danger"><span class="fa fa-times"></span>
                                            </button>
                                            {!! Form::close() !!}
                                        </div>
                                        <a href="{{ route("student.edit", $student->id) }}"
                                           class="btn btn-sm btn-info pull-right" style="margin-right: 5px"><span
                                                    class="fa fa-pencil"></span></a>


                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="alert alert-warning text-center">There are no students.</p>
                    @endif

                </div>
            </div>
        </div>
    @endif
@endsection

@section("stylesheets")
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
@endsection

@section("scripts")
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                columnDefs: [{
                    targets: [0],
                    orderData: [0, 1]
                }, {
                    targets: [1],
                    orderData: [1, 0]
                }, {
                    targets: [2],
                    orderData: [2, 0]
                }, {
                    targets: [3],
                    orderData: [3, 0]
                }]
            });
        });
    </script>
@endsection