@extends('layout.template')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6>Data Kriteria</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kode</th>
                                    <th class="text-left">Kriteria
                                    </th>
                                    <th class="text-center">Atribut
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteria as $get)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td class="text-center">{{ $get->kode_kriteria }}</td>
                                        <td class="text-left">{{ $get->nama_kriteria }}</td>
                                        <td class="text-center">{{ $get->atribut }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
