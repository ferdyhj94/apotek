@extends('layouts.temp')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-4">
            <h1>SISTEM INFORMASI APOTEK</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                  @if(Session::has('message'))
                    <span class="label label-danger">{{ Session::get('message') }}
                    </span>@endif
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{url('/login')}}">
                            <input type="hidden" class="form-control" name="username" id="username" >
   <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">
                            Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="NIK" name="username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" placeholder="Password" required >
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</div>

@endsection