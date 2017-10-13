@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thêm máy</div>
                    @if(Session::has('status'))
                    <div class="alert alert-success"> {{ Session::get('status') }}</div>
                    @endif
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/machine/add') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="machine_name" class="col-md-4 control-label">Tên máy</label>
                            <div class="col-md-6">
                                <input id="machine_name" type="text" class="form-control" name="machine_name" value="{{ old('machine_name') }}">

                                @if ($errors->has('machine_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('machine_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Thêm máy
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
