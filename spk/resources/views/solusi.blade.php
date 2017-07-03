@extends('layouts.layout')

@section('title', 'Solusi')

@section('body')
    <div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
        <div class="panel panel-primary">
            <div class="panel-body">

                <label>Diagnosa Masalah : </label>
                <p class="alert alert-danger"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp; {{ $data['masalah'] }}</p>

                <label>Solusi : </label>
                <p class="alert alert-info"><span class="glyphicon glyphicon-wrench"></span>&nbsp; {{ $data['solusi'] }}</p>

                <a class="btn btn-success" href="{{ url('/') }}">Ok</a>


            </div>
        </div>
    </div>
@endsection
