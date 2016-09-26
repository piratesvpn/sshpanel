@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Settings</div>
                <div class="panel-body">
                  <hr />
                  <a href="{{url('setting/price')}}" style="text-decoration:none !important;" class="link-action">
                    <div class="col-md-3">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <span class="glyphicon glyphicon-usd list-action"></span>
                          <hr>
                          <div class="title">Set SSH Price</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="{{url('setting/ssh')}}" style="text-decoration:none !important;" class="link-action">
                    <div class="col-md-3">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <span class="glyphicon glyphicon-list-alt list-action"></span>
                          <hr>
                          <div class="title">SSH User</div>
                        </div>
                      </div>
                    </div>
                  </a>
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
