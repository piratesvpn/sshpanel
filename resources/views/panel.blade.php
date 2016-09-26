@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Server Panel</div>
                <div class="panel-body">

                  @if(isset($cnt))
                    <h3 style="text-align:center">NO SERVER FOUND</h3>
                  @else
                  <h3 style="text-align:center">CHOOSE SERVER TO MANAGE</h3>
                    @foreach($servers as $server)
                    <a href="{{url('setting/panel/' . $server->key)}}" style="text-decoration:none !important;" class="link-action">
                      <div class="col-md-3">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <span class="glyphicon glyphicon-tasks list-action"></span>
                            <hr>
                            <div class="title">{{$server->name}}</div>
                          </div>
                        </div>
                      </div>
                    </a>
                    @endforeach
                  @endif

                    <div class="col-md-12">
                      <hr />
                      <p style="text-align : center !important;"><b>Copyright &copy; <a href="https://github.com/rizalio/sshpanel">Rizal Fakhri</a> & &#x3C;/&#x3E; with <span class="glyphicon glyphicon-heart"></span> on Cengkareng.</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
