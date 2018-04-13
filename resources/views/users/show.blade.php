@extends('layouts.app')

@section('title', $user->name. ' \'personal profile')

@section('content')

<div class="row">

<div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
  <div class="panel panel-default">
    <div class="panel-body">
        <div class="media">
            <div align="center">
                <img class="thumbnail img-responsive" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" width="300px" height="300px">
            </div>
            <div class="media-body">
                <hr>
                <h4><strong>Personal Profile</strong></h4>
                <p>{{ $user->introduction }}</p>
                <hr>
                <h4><strong>Registered on</strong></h4>
                <p>{{ $user->created_at->diffForHumans() }}</p>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <span>
                <h1 class="panel-title pull-left" style="font-size:30px;">
                {{ $user->name}} <small>{{ $user->email}}</small>
                </h1>
            </span>
        </div>
    </div>
<hr>
{{-- Contents published by users--}}
<div class="panel panel-default">
    <div class="panel-body">
        No data yet ~_~
    </div>
</div>

</div>


</div>
@stop