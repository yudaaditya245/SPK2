@extends('layouts.layout')

@section('title', 'HOME')

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

  @if (session('hp') != null)

    <div class="container">
      <div class="col-md-4">

          @if ( session('hp') == 'sony' || session('hp') == 'xiaomi' || session('hp') == 'lain')
            <img class="img-responsive img-thumbnail" src="<?= asset('img/'.session("hp").'.png') ?>" >
          @else
            <img class="img-responsive img-thumbnail" src="<?= asset('img/'.session("hp").'.jpg') ?>" >
          @endif

      </div>

      @if (session('tipe') == null)
      <div class="col-md-8">
      @else
      <div class="col-md-4">
      @endif

        <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-12">


              <h3>{{ ucfirst(session('hp')) }}</h3>

              <hr>

              @if ( session('tipe') == null && session('hp') != null)

              <form action="{{ url('settipe') }}" method="post" style="width:200px;">
                <label>Pilih Tipe</label>

                <select class="form-control" name="tipe">

                  @if (session('hp') == 'samsung')
                    <?php $array = array(
                      'Galaxy J7 Prime', 'Galaxy J7 2016', 'Z2', 'Galaxy On8', 'Galaxy C5', 'Galaxy J3 Pro'
                    ); ?>
                  @elseif (session('hp') == 'sony')
                    <?php $array = array(
                      'Xperia Z5 Premium', 'Xperia Z5', 'Xperia X', 'Xperia C5 Ultra', 'Xperia M5', 'Xperia Z3+'
                    ); ?>
                  @elseif (session('hp') == 'xiaomi')
                    <?php $array = array(
                      'Mi 4i', 'Redmi 2A', 'Mi Note Pro', 'Mi Note', 'Mi 4 LTE', 'Mi 6'
                    ); ?>
                  @elseif (session('hp') == 'asus')
                    <?php $array = array(
                      'Zenfone 3 Deluxe', 'Zenfone 4', 'Zenfone 5 Lite', 'Zenfone 6', 'Zenfone 2', 'Zenfone C'
                    ); ?>
                  @elseif (session('hp') == 'lenovo')
                    <?php $array = array(
                      'A6000 Plus', 'A Plus', 'P2', 'K6 Note', 'K6 Power', 'K5 Note'
                    ); ?>
                  @elseif (session('hp') == 'oppo')
                    <?php $array = array(
                      'F1S', 'R9 Plus', 'F1', 'Neo 7', 'R7S', 'F1 Plus'
                    ); ?>
                  @elseif (session('hp') == 'huawei')
                    <?php $array = array(
                      'Y3 II', 'Y5 II', 'P8 Lite', 'Y6', 'Y3', 'GR3'
                    ); ?>
                  @elseif (session('hp') == 'lg')
                    <?php $array = array(
                      'Stylus 2', 'V20', 'Ray', 'K4', 'X Cam', 'X Screen'
                    ); ?>
                  @endif

                  @foreach ($array as $row)
                  <option value="{{ str_replace(' ', '-', $row) }}">{{ $row }}</option>
                  @endforeach

                </select>

                {{ csrf_field() }}
                <br>
                <input class="btn btn-success btn-sm" type="submit" name="submit" value="Ok">
              </form>

              @else

              Tipe : {{ session('tipe') }}

              @endif

              <hr>
              @if (session('tipe') == null)
                <p style="color: #c81a1a;"><span class="glyphicon glyphicon-info-sign"></span>&nbsp; Pilih Tipe Ponsel Terlebih Dahulu</p>
                <a class="btn btn-sm btn-success" href="#disabled" disabled="disabled">
                  <span class="glyphicon glyphicon-search"></span>&nbsp; Mulai Diagnosa
                </a>
                <a class="btn btn-sm btn-info" href="{{ url('/delsess') }}"><span class="glyphicon glyphicon-edit"></span>&nbsp; Ganti Ponsel</a>
                <a class="btn btn-sm btn-danger" href="{{ url('/hapushp') }}"><span class="glyphicon glyphicon-trash"></span>&nbsp; Hapus Ponsel</a>
              @else
                <div class="col-md-12 text-center">
                  <a class="btn btn-success" href="{{ url('/diagmati') }}">
                    <span class="glyphicon glyphicon-search"></span>&nbsp; Mulai Diagnosa
                  </a>
                </div>
                <br><br>
                <div class="col-md-12 text-center">
                  <a class="btn btn-sm btn-info" href="{{ url('/delsess') }}"><span class="glyphicon glyphicon-edit"></span>&nbsp; Ganti Ponsel</a>
                  <a class="btn btn-sm btn-danger" href="{{ url('/hapushp') }}"><span class="glyphicon glyphicon-trash"></span>&nbsp; Hapus Ponsel</a>
                </div>
              @endif

            </div>
          </div>
        </div>
      </div>

      @if (session('tipe') != null)
      <div class="col-md-4">

          <img class="img-responsive img-thumbnail" src="<?= asset('img/'.session('hp').'/'.session("tipe").'.jpg') ?>" >


      </div>
      @endif

    </div>

    <hr>

  @else

    <div class="container">
      <div class="panel panel-primary">
        <div class="panel-body text-center">
          <a href="{{ url('/pilihhp') }}">Pilih Ponsel</a>
        </div>
      </div>
    </div>

  @endif




@endsection
