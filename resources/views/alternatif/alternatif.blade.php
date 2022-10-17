@extends('layout.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <div class="card" style="min-width: 100%">
        <div class="card-header">
          Alternatif
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-sm mb-4" id="user_table">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Telp</th>
                      <th>Email</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>


@endsection
