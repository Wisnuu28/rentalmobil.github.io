@extends('apps.layout')
 @section('sectionheader')
 <h1>
    Pesanan Customer
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Pesanan Customer</li>
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
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobil</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Pesan</th>
                    <th scope="col">Selesai Pesan</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
              @foreach($pesanan as $p)
              <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$p->name}}</td>
                      <td>{{$p->email}}</td>
                      <td width="10%">{{$p->mobil}}</td>
                      <td>{{$p->nomor_hp}}</td>
                      <td>{{$p->alamat}}</td>
                      <td>{{$p->tanggal_pesan}}</td>
                      <td>{{$p->selesai_pesan}}</td>
                      <td>
                        <a class="btn btn-danger" href="/deletepesanan/{{ $p->id }}">Delete</a>
                      </td>
              </tr>
              @endforeach
            </tbody>
            </table>
            </br>
            {{ $pesanan->links() }}

        </div>
   </div>
</section>
@stop