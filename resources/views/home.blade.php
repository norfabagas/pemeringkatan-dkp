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

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Peringkat DKP</div>

        <div class="panel-body">
          <table class="table table-responsive">
            <thead>
              <tr>
                <td>No.</td>
                <td>Nama DKP</td>
                <td>Provinsi</td>
                <td>Nilai</td>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>DKP 1</td>
                <td>Provinsi 1</td>
                <td>100</td>
              </tr>
              <tr>
                <td>2</td>
                <td>DKP 2</td>
                <td>Provinsi 2</td>
                <td>90</td>
              </tr>
              <tr>
                <td>3</td>
                <td>DKP 3</td>
                <td>Provinsi 3</td>
                <td>85</td>
              </tr>
              <tr>
                <td>4</td>
                <td>DKP 4</td>
                <td>Provinsi 4</td>
                <td>80</td>
              </tr>
              <tr>
                <td>5</td>
                <td>DKP 5</td>
                <td>Provinsi 5</td>
                <td>77</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
