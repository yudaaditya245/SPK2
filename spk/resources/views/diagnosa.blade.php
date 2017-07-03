@extends('layouts.layout')

@section('title', 'Diagnosa')

@section('body')
    <div class="col-md-6 col-md-offset-3" style="margin-top:20px;">


        <div class="panel panel-default">
            <div class="panel-body text-center">

                <p><span class="glyphicon glyphicon-comment"></span>&nbsp; {{ $data['ask'] }}</p>
                <a class="btn btn-sm btn-success" href="{{ $data['ya'] }}"><span class="glyphicon glyphicon-ok"></span></a>
                <a class="btn btn-sm btn-danger" href="{{ $data['tidak'] }}"><span class="glyphicon glyphicon-remove"></span></a>

            </div>
        </div>

        @if (isset($data['info']))
        <div class="alert alert-info text-center">
          <a style="text-decoration: none; font-weight:bold;" href="{{ $data['infourl'] }}">{{ $data['info'] }}</a>
        </div>
        @endif

        @if (isset($data['img']))
        <div class="panel panel-default">
            <div class="panel-body">

                <img src="{{ $data['img'] }}" class="img-responsive img-thumbnail">

            </div>
        </div>
        @endif
    </div>
@endsection
