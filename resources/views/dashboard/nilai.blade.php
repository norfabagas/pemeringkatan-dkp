@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form Penilaian
          <span style="float: right;">
            <a class="btn btn-md btn-warning" href="{{ url('dashboard') }}">Kembali</a>
          </span>
        </div>

        <div class="panel-body">
          <form method="GET" action="{{ url()->current() }}">

            <div class="form-group">
              <label>Pertanyaan 1</label>
              <select class="form-control" required>
                <option value="">Pilih jawaban</option>
                <option value="1">Pilihan 1</option>
                <option value="2">Pilihan 2</option>
                <option value="3">Pilihan 3</option>
              </select>
            </div>

            <div class="form-group">
              <label>Pertanyaan 2</label>
              <select class="form-control" required>
                <option value="">Pilih jawaban</option>
                <option value="1">Pilihan 1</option>
                <option value="2">Pilihan 2</option>
                <option value="3">Pilihan 3</option>
              </select>
            </div>

            <div class="form-group">
              <label>Pertanyaan 3</label>
              <select class="form-control" required>
                <option value="">Pilih jawaban</option>
                <option value="1">Pilihan 1</option>
                <option value="2">Pilihan 2</option>
                <option value="3">Pilihan 3</option>
              </select>
            </div>

            <div class="form-group">
              <label>Pertanyaan 4</label>
              <select class="form-control" required>
                <option value="">Pilih jawaban</option>
                <option value="1">Pilihan 1</option>
                <option value="2">Pilihan 2</option>
                <option value="3">Pilihan 3</option>
              </select>
            </div>

            <div class="form-group">
              <label>Pertanyaan 5</label>
              <select class="form-control" required>
                <option value="">Pilih jawaban</option>
                <option value="1">Pilihan 1</option>
                <option value="2">Pilihan 2</option>
                <option value="3">Pilihan 3</option>
              </select>
            </div>

            <a class="btn btn-lg btn-success" href="{{ url('dashboard') }}">Submit Jawaban</a>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
