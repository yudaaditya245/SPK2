@extends('layouts.layout')

@section('title', 'Pilih Ponsel')

@section('style')
  <style media="screen">
    a:hover img{
      transform: rotate(3deg);
    }

    #lain > div{
      background-color: #4580d9;
      color: white;
      height: 50px;
      line-height: 50px;
      transition: all 0.3s ease;
    }

    #lain:hover div {
      transform: translateY(-5px);
    }
  </style>
@endsection

@section('body')

  @if (session('hp') == null)

  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-body">
        <div class="alert alert-info text-center">
          <span class="glyphicon glyphicon-info-sign"></span>&nbsp; PILIH MERK PONSEL ANDA
        </div>
        <br>

        <div class="col-md-12">

          <div class="col-md-3">
            <a href="{{ url('/sethp/samsung') }}">
              <img src="{{ asset('img/samsung.jpg') }}" class="img-responsive img-thumbnail">
            </a>
          </div>

          <div class="col-md-3">
            <a href="{{ url('/sethp/sony') }}">
              <img src="{{ asset('img/sony.png') }}" class="img-responsive img-thumbnail">
            </a>
          </div>

          <div class="col-md-3">
            <a href="{{ url('/sethp/xiaomi') }}">
              <img src="{{ asset('img/xiaomi.png') }}" class="img-responsive img-thumbnail">
            </a>
          </div>

          <div class="col-md-3">
            <a href="{{ url('/sethp/asus') }}">
              <img src="{{ asset('img/asus.jpg') }}" class="img-responsive img-thumbnail">
            </a>
          </div>
        </div>

        <!-- SEPARATOR -->
        <div class="col-md-12"><hr></div>
        <!-- END SEPARATOR -->

        <div class="col-md-12">
          <div class="col-md-3">
            <a href="{{ url('/sethp/lenovo') }}">
              <img src="{{ asset('img/lenovo.jpg') }}" class="img-responsive img-thumbnail">
            </a>
          </div>

          <div class="col-md-3">
            <a href="{{ url('/sethp/oppo') }}">
              <img src="{{ asset('img/oppo.jpg') }}" class="img-responsive img-thumbnail">
            </a>
          </div>

          <div class="col-md-3">
            <a href="{{ url('/sethp/huawei') }}">
              <img src="{{ asset('img/huawei.jpg') }}" class="img-responsive img-thumbnail">
            </a>
          </div>

          <div class="col-md-3">
            <a href="{{ url('/sethp/lg') }}">
              <img src="{{ asset('img/lg.jpg') }}" class="img-responsive img-thumbnail">
            </a>
          </div>
        </div>


      </div>
    </div>
  </div>

  @else

    <div class="container">
      <div class="panel panel-primary">
        <div class="panel-body">
          <div class="col-md-4">
            <img class="img-responsive img-thumbnail" src="<?= asset('img/'.session("hp").'.png') ?>" alt="">
          </div>

          <div class="col-md-8">
            <h3>Ponsel Anda</h3>

            <a class="btn btn-success" href="{{ url('/diagmati') }}">Mulai Diagnosa</a>
            <a class="btn btn-danger" href="{{ url('/delsess') }}">Hapus Ponsel</a>
          </div>
        </div>
      </div>
    </div>

  @endif

  <!-- <div class="col-md-6 col-md-offset-3">
      <h2 style="text-align:center">SISTEM PAKAR KERUSAKAN HP</h2>
      <div class="panel panel-default text-center">
          <div class="panel-body">
              <p class="alert alert-warning">Pilih kondisi HP : </p>
              <ul class="nav nav-pills nav-stacked">
                  <li><a href="{{ url('diagmati') }}"><span class="glyphicon glyphicon-remove"></span>&nbsp; HP TIDAK DAPAT DIHIDUPKAN</a></li>
                  <li><a href="{{ url('diaghidup') }}"><span class="glyphicon glyphicon-ok"></span>&nbsp; HP DAPAT DIHIDUPKAN</a></li>
              </ul>
          </div>
      </div>
  </div> -->
@endsection
