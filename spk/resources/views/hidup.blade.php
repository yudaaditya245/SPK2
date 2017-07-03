@extends('layouts.layout')

@section('title', 'HIDUP')

@section('body')
    <div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
        <div class="panel panel-primary">
            <div class="panel-body text-center">

                <p>
                  Ponsel yang masih dapat dihidupkan cukup banyak memiliki potensi untuk diperbaiki karena sebagian besar masalah
                  dikarenakan software dari Ponsel itu sendiri yang mengalami error. <br/><br/>

                  Anda dapat mendiagnosa beberapa masalah ringan yang dialami ponsel
                </p>
                <br/>
                <a class="btn btn-info" href="{{ url('/diaghidup/1') }}">Mulai Diagnosa</a>

            </div>
        </div>
    </div>
@endsection
