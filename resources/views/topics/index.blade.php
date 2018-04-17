@extends('layouts.app')

@section('title', 'Topic List')

@section('content')

<div class="row">
    <div class="col-lg-9 col-md-9 topic-list">
        <div class="panel panel-default">

          <div class="panel-heading">
              <ul class="nav nav-pills">
                <li role="presentation" class="active">
                    <a href="#">Last reply</a>
                </li>
                <li role="presentation">
                    <a href="#">Latest reply</a>
                </li>
              </ul>
          </div>

          <div class="panel-body">
            {{-- Topic List --}}
            @include('topics._topic_list', ['topics' => $topics])
            {{--Paganation--}}
            {!! $topics->render() !!}
          </div>
        </div>
    </div>

    <div class="col-lg-9 col-md-9 sidebar">
        @include('topics._sidebar')
    </div>
</div>

@endsection
