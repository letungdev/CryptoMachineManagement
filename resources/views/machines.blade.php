@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ url('machine/add') }}"><button class="btn btn-default btn-danger"><i class="fa fa-edit"></i> Thêm máy</button></a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Tên Máy</th>
                            <th>Địa Chỉ IP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($machines as $machine)
                        <tr>
                            <td>{{ $machine->machine_name }}</td>
                            <td>{{ $machine->machine_ipaddress }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div



@endsection
