<div class="card">
    <div class="card-header">
        Pilih Data Mobil
    </div>
    <div class="card-body">
            <div class="form-group">
                <label for="kode_mobil" class="form-label">Kode Mobil</label>
                <input type="text" name="kode_mobil" id="kode_mobil" class="form-control" placeholder="Kode Mobil" readonly>
            </div>
            <div class="form-group">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" name="merk" id="merk" class="form-control" placeholder="Merk"readonly>
            </div>
             <div class="form-group">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Type"readonly>
            </div>
            <div class="form-group">
                <label for="warna" class="form-label">Warna</label>
                <input type="text" name="warna" id="warna" class="form-control" placeholder="Warna" readonly>
            </div>
            <div class="form-group">
                <label for="harga_mobil" class="form-label">Harga Mobil</label>
                <input type="text" name="harga_mobil" id="harga_mobil" class="form-control" placeholder="Harga Mobil" readonly>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pilihMobilModal">
                Pilih Mobil
            </button>
            </div>
    </div>
 </div>
 



<div class="modal fade" id="pilihMobilModal" tabindex="-1"
role="dialog" aria-labelleby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
              Pilih Mobil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <table id="tbl-mobil" class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Mobil</th>
                    <th>Merk</th>
                    <th>Type</th>
                    <th>Warna</th>
                    <th>Harga Mobil</th>
                    <th>Pilih</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mobil as $m)
                <tr>
                     <td>{{ $i = (isset($i)?++$i:$i=1) }}</td>
                     <td>{{ $m->kode_mobil}}</td>
                     <td>{{ $m->merk}}</td>
                     <td>{{ $m->type}}</td>
                     <td>{{ $m->warna}}</td>
                     <td>{{ $m->harga_mobil}}</td>
                    <td><button class='pilih-mobil'>Pilih</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
      
    </div>
      </div>
      </div>
      </div>
