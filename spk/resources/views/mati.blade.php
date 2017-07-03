@extends('layouts.layout')

@section('title', 'MATI')

@section('body')
    <div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
        <div class="panel panel-primary">
            <div class="panel-body text-center">

                <label>Ponsel Mati :</label>
                <p class="alert alert-info">
                  Masalah pada Android yang tidak dapat dihidupkan sebagian besar terletak pada hardware atau komponen Ponsel itu sendiri
                  sehingga sebagian besar kerusakan memerlukan pergantian komponen ataupun sparepart Ponsel.
                </p>

                <label>Ponsel Hidup :</label>
                <p class="alert alert-info">
                  Ponsel yang masih dapat dihidupkan cukup banyak memiliki potensi untuk diperbaiki karena sebagian besar masalah
                  dikarenakan software dari Ponsel itu sendiri yang mengalami error.
                </p>
                <a class="btn btn-success" href="{{ url('/diagmati/1') }}"><span class="glyphicon glyphicon-search"></span>&nbsp; Mulai Diagnosa</a>

            </div>
        </div>
    </div>
@endsection
