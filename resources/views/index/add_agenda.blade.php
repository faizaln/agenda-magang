<div class="modal fade" id="myModalAdd" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Agenda</h4>
      </div>
      <form action="{{route('agenda.store')}}" method="post">
        {{ csrf_field() }}
        <div style="padding: 10px 40px 10px 40px;" class="modal-body">
          <div class="form-group row">
            <div class="form-control-wrapper">
              <label for="tgl">Tanggal</label>
              <input style="margin:5px 0px;" type="text" id="date1" name="tanggal" class="form-control floating-label" placeholder="Hari/Tanggal">
            </div>
          </div>
          <div class="form-group row">
            <label for="example-time-input" class="col-2 col-form-label">Waktu Mulai</label>
            <div class="col-10">
              <input class="form-control" type="time" name="jam_mulai" id="example-time-input">
            </div>
          </div>
          <div class="form-group row">
            <label for="example-time-input" class="col-2 col-form-label">Waktu Selesai</label>
            <div class="col-10">
              <input class="form-control" type="time" name="jam_selesai" id="example-time-input">
            </div>
          </div>
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Kegiatan</label>
            <div class="col-10">
              <input class="form-control" type="text" value="" name="kegiatan" id="example-text-input">
            </div>
          </div>
          <div class="form-group row">
            <label for="usr">Proyek</label>
            <select style="margin:5px 0px;" class="form-control show-tick proyek_agenda" name="proyek">
              @foreach ($proyekk as $proyek)
                <option value="{{$proyek->id}}" {{$changeProyek == $proyek->nm_proyek?'selected="select"':''}}>{{$proyek->nm_proyek}}</option>
              @endforeach
            </select>
          </div>
            <div class="form-group row">
              <label for="comment">Keterangan</label>
              <input class="form-control" name="keterangan" id="comment"></input>
            </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" data-dismiss="modal">Kembali</a>
          <input type="submit" class="btn btn-success kirim_agenda" value="kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>
