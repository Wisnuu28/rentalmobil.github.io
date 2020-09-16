 @extends('apps.layout')
 @section('sectionheader')
 <h1>
    Data Mobil
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Mobil</li>
  </ol>
 @endsection
 @section('content')
 <section class="content">
   <div class="box box-primary">
        <div class="box-body">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Harga Sewa</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
              @foreach($data_mobil as $dm)
              <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$dm->nama_mobil}}</td>
                      <td>{{formatRupiah($dm->harga_sewa)}}</td>
                      <td>{{$dm->keterangan}}</td>
                      <td><img width="150px" src="{{ url('/data_file/'.$dm->file) }}"></td>
                      <td>
                        <a class="btn btn-success" href="/edit/{{ $dm->id }}">Update</a>
                        <a class="btn btn-danger" href="/deletedatamobil/{{ $dm->id }}">Delete</a>
                      </td>
              </tr>
              @endforeach
            </tbody>
            </table>
            </br>
            {{ $data_mobil->links() }}
        </div>
   </div>
</section>
@stop