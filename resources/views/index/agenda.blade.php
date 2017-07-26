@extends('layouts.header')
@section('body')
  <div id="kanan">
	  <section class="content">
  		<div class="container">
  			<div class="row clearfix">
  				<div class="row">
  					<div class="col-xs-12" >

  <!--------------------------Halaman HOME---------------------------------------->
  						<div id="home">
  							<!-- Basic Examples -->
              <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="card">
                          <div class="header">
                              <h2>
                                  TABLE AGENDA
                              </h2>
                              <form action="{{route('agenda.index')}}" method="get">
                              <div class="row">
                                <div class="col-md-offset-1 col-md-3">
                                  <div class="form-control-wrapper">
                        						<input type="text" id="date1" name="date1" class="form-control floating-label" placeholder="Date">
                        					</div>
                                </div>
                                <div class="col-md-3" style="display:none;" id="date2">
                                  <div class="form-control-wrapper">
                                    <input type="text" id="date2" name="date2" class="form-control floating-label" placeholder="Date">
                                  </div>
                                </div>
                                @if (Auth::user()->level == 'admin')
                                  <div class="col-md-2">
                                    <select class="form-control show-tick" name="user">
                                      <option value="">-- Semua User --</option>
                                      @foreach ($users as $users)
                                        <option value="{{$users->name}}">{{$users->name}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="col-md-2">
                                    <select class="form-control show-tick" name="proyek">
                                      <option value="">-- Semua Proyek --</option>
                                      @foreach ($proyekk as $proyek)
                                        <option value="{{$proyek->nm_proyek}}">{{$proyek->nm_proyek}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                @endif
                                <div class="col-md-1">
                                 <input type="submit" value="filter" id="tombol_filter1" style="display:none">
                                 <input type="submit" id="tombol_filter2" value="All">
                                 {{-- <a href="{{route('agenda.show' , 'coba')}}"><button type="button" name="EXCEL">Excel</button></a> --}}
                                </div>
                              </div>
                              </form>
                          </div><br>
                          <div class="body">

          <table id="example" class="display nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              @if (Auth::user()->level == 'admin')
                <th>User</th>
              @endif
                <th>Hari/Tanggal</th>
                <th>Jam</th>
                <th>Kegiatan</th>
                <th>Nama Proyek</th>
                <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($agendaa as $agenda)
              <tr>
                  {{-- <td>{{$agenda->id}}</td> --}}
                  @if (Auth::user()->level == 'admin')
                  <td>{{$agenda->user->name}}</td>
                  @endif
                  <td>{{$agenda->tanggal}}</td>
                  <td>{{$agenda->jam_mulai}} s/d {{$agenda->jam_selesai}}</td>
                  <td>{{$agenda->kegiatan}}</td>
                  <td>{{$agenda->nm_proyek}} </td>
                  <td>{{$agenda->keterangan}}</td>
              </tr>
            @endforeach
          </tbody>
      </table>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- #END# Basic Examples -->


  						</div>
  <!-----------------Batas Halaman Home-------------------------------------------->
  <!--------------------------Halaman User----------------------------------------
  						<div class="card" id="user">
  							Ini Halaman User
  						</div>
  <!-----------------Batas Halaman User-------------------------------------------->
  					</div>
  				</div>
  			</div>
  		</div>
	   </section>
  </div>
@endsection
