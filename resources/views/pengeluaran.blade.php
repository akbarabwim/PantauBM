@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Input Pengeluaran') }}</div>

          <div class="form-group row">
              <label for="bulan" class="col-md-4 col-form-label text-md-right">{{ __('Bulan') }}</label>

              <div class="col-md-6">
                  <input id="bulan" type="text" class="form-control{{ $errors->has('bulan') ? ' is-invalid' : '' }}" name="bulan" value="{{ old('bulan') }}" required autofocus>

                  @if ($errors->has('bulan'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('bulan') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="tahun" class="col-md-4 col-form-label text-md-right">{{ __('Tahun') }}</label>

              <div class="col-md-6">
                  <input id="tahun" type="integer" class="form-control{{ $errors->has('tahun') ? ' is-invalid' : '' }}" name="tahun" value="{{ old('tahun') }}" required autofocus>

                  @if ($errors->has('tahun'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('tahun') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="jenis_transaksi" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Transaksi') }}</label>

              <div class="col-md-6">
                  <select id="jenis_transaksi" type="dropdown" class="form-control{{ $errors->has('jenis_transaksi') ? ' is-invalid' : '' }}" name="jenis_transaksi" value="{{ old('jenis_transaksi') }}" required autofocus>
                    <option value="Penarikan">Penarikan</option>
                    <option value="Transfer">Transfer</option>
                    <option value="Pembayaran">Pembayaran</option>
                    <option value="Lain-lain">Lain-lain</option>
                  @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="nominal" class="col-md-4 col-form-label text-md-right">{{ __('Nominal') }}</label>

              <div class="col-md-6">
                  <input id="nominal" type="integer" class="form-control{{ $errors->has('nominal') ? ' is-invalid' : '' }}" name="nominal" value="{{ old('nominal') }}" required autofocus>

                  @if ($errors->has('nominal'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('nominal') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="keterangan" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>

              <div class="col-md-6">
                  <input id="keterangan" type="text" class="form-control{{ $errors->has('keterangan') ? ' is-invalid' : '' }}" name="keterangan" value="{{ old('keterangan') }}" required autofocus>

                  @if ($errors->has('keterangan'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('keterangan') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
