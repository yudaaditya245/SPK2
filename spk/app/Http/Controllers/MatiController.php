<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatiController extends Controller
{
    public function index()
    {
        return view('mati');
    }

    public function diagnosa($id)
    {
        switch ($id) {
            case 1:
                $data = array(
                  'id' => 1,
                  'info' => "Apa itu boot animation?",
                  'infourl' => url('/infomat/1'),
                  'img' => asset('img/diag/boot.jpg'),
                  'ask' => 'Apakah Ponsel Anda menampilkan boot animation?',
                  'ya' => url('diaghidup/2'),
                  'tidak' => url('diagmati/2')
                );
              break;

            case 2:
                $data = array(
                  'id' => 2,
                  'img' => asset('img/diag/getar.jpg'),
                  'ask' => 'Apakah Ponsel Anda bergetar saat dihidupkan?',
                  'ya' => url('diagmati/3'),
                  'tidak' => url('diagmati/4')
                );
              break;

            case 3:
                $data = array(
                  'id' => 3,
                  'info' => 'Apa itu suara boot animation?',
                  'infourl' => url('/infomat/3'),
                  'img' => asset('img/diag/suara.jpg'),
                  'ask' => 'Apakah Ponsel Anda mengeluarkan suara boot animation?',
                  'ya' => url('solmati/LCD'),
                  'tidak' => url('diagmati/6')
                );
              break;

            case 4:
                $data = array(
                  'id' => 4,
                  'img' => asset('img/diag/baterai.jpg'),
                  'ask' => 'Apakah baterai Ponsel Anda dapat digunakan di Ponsel lain?',
                  'ya' => url('diagmati/5'),
                  'tidak' => url('solmati/baterai')
                );
              break;

            case 5:
                $data = array(
                  'id' => 5,
                  'img' => asset('img/diag/charge.jpg'),
                  'ask' => 'Apakah Ponsel Anda merespond saat dihubungkan ke charge?',
                  'ya' => url('solmati/IC'),
                  'tidak' => url('solmati/matot')
                );
              break;

            case 6:
                $data = array(
                  'id' => 6,
                  'info' => 'Apa itu charge baterai kodok/desktop?',
                  'infourl' => url('/infomat/6'),
                  'img' => asset('img/diag/chargeex.jpg'),
                  'ask' => 'Isi daya baterai Anda dengan charge baterai kodok/desktop, apakah masih tetap?',
                  'ya' => url('solmati/hardbrick'),
                  'tidak' => url('solmati/lemah')
                );
              break;

          default:
              $data = array(
                'id' => 1,
                'ask' => 'Apakah Ponsel Anda menampilkan boot animation?',
                'ya' => url('diaghidup'),
                'tidak' => url('diagmati/2')
              );
            break;
        }

        return view('diagnosa', ['data' => $data]);
    }

    public function solmati($solusi)
    {
        switch ($solusi) {
          case 'LCD':
                $data = array(
                  'masalah' => 'LCD Ponsel Anda telah rusak',
                  'solusi' => 'Ganti LCD dengan yang baru'
                );
            break;

          case 'baterai':
                $data = array(
                  'masalah' => 'Ada kemungkinan baterai Ponsel Anda sudah tidak dapat digunakan kembali',
                  'solusi' => 'Ganti baterai Ponsel Anda dengan yang baru'
                );
            break;

          case 'lemah':
                $data = array(
                  'masalah' => 'Ada kemungkinan baterai Ponsel Anda kehabisan daya',
                  'solusi' => 'Pastikan baterai Ponsel Anda dalam kondisi terisi sebelum digunakan'
                );
            break;

          case 'IC':
                $data = array(
                  'masalah' => 'Kemungkinan IC Connector baterai pada ponsel Anda rusak',
                  'solusi' => 'Bawa ke service terdekat untuk mengganti IC Ponsel Anda'
                );
            break;

          case 'matot':
                $data = array(
                  'masalah' => 'Ponsel Anda mengalami mati total',
                  'solusi' => 'Bawa ke service terdekat untuk mendapatkan penanganan yang lebih spesifik'
                );
            break;

          case 'hardbrick':
                $data = array(
                  'masalah' => 'Ponsel Anda mengalami hardbrick, biasanya diakibatkan oleh kerusakan partisi flash memory internal atau eMMC bricked',
                  'solusi' => 'Coba flash ulang Ponsel Anda sesuai dengan merk'
                );
            break;

          default:
            # code...
            break;
        }

        return view('solusi', ['data' => $data]);
    }

    public function info($id)
    {
        switch ($id) {
          case 1:
            $data = array(
              'info' => 'Boot animation adalah sebuah animasi yang akan muncul pada saat pertama kali Android dihidupkan. Seperti misalnya Smartphone Android akan menampilkan animasi bertuliskan "ANDROID" saat dihidupkan.',
              'url' => url('/diagmati/'.$id),
              'ex' => 'https://www.google.co.id/search?q=apa+itu+boot+animation+android'
            );
            break;

          case 3:
            $data = array(
              'info' => 'Suara boot animation biasanya terdengar bersamaan dengan munculnya boot animation, biasanya tidak berdurasi lama dan mirip seperti ringtone',
              'url' => url('/diagmati/'.$id)
            );
            break;

          case 6:
            $data = array(
              'info' => 'Charge desktop atau kodok adalah alat yang digunakan untuk mengecharge baterai secara langsung tanpa melalui perantara ponsel, semua jenis baterai ponsel dapat dicharge dengan charger ini',
              'url' => url('/diagmati/'.$id)
            );
            break;

          default:
            $info = '';
            break;
        }

        return view('info', ['data' => $data]);
    }
}
