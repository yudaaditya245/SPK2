@extends('layouts.layout')

@section('title', 'INFO')

@section('body')
    <div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
        <div class="panel panel-primary">
            <div class="panel-body text-center">

                <p class="alert alert-info">
                    {{ $data['info'] }}
                </p>

                <a class="btn btn-success" href="{{ $data['url'] }}">Ok</a>

                @if(isset($data['ex']))
                <hr>
                <a target="_blank" style="font-weight:bold; text-decoration:none;" href="{{ $data['ex'] }}">Saya masih belum mengerti...</a>
                @endif

            </div>
        </div>
    </div>
@endsection
