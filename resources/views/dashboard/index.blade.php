@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat Datang, {{ auth()->user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informasi Cepat</div>

                <div class="panel-body">
                    <table class="table">
                      <tr>
                        <td>Nama</td>
                        <td>{{ auth()->user()->name }}</td>
                      </tr>

                      <tr>
                        <td>Email</td>
                        <td>{{ auth()->user()->email }}</td>
                      </tr>

                      <tr>
                        <td>No. Telp</td>
                        <td>{{ auth()->user()->telepon }}</td>
                      </tr>

                      <tr>
                        <td>Alamat</td>
                        <td>{{ auth()->user()->alamat }}</td>
                      </tr>

                      <tr>
                        <td>Provinsi</td>
                        <td>{{ auth()->user()->provinsi }}</td>
                      </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Penilaian DKP</div>

        <div class="panel-body">
          <a class="btn btn-info btn-md" href="{{ url('dashboard/nilai') }}">Form Penilaian</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
