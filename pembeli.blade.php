<div class="card">
    <div class="card-header">
        Pilih Data Pembeli
    </div>
    <div class="card-body">
            <div class="form-group">
                <label for="ktp_pembeli" class="form-label">No.Ktp</label>
                <input type="text" name="ktp_pembeli" id="ktp_pembeli" class="form-control" placeholder="Ktp Pembeli" readonly>
            </div>
            <div class="form-group">
                <label for="nama_pembeli" class="form-label">Nama</label>
                <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control" placeholder="Nama Pembeli"readonly>
            </div>
             <div class="form-group">
                <label for="alamat_pembeli" class="form-label">Alamat</label>
                <input type="text" name="alamat_pembeli" id="alamat_pembeli" class="form-control" placeholder="Alamat Pembeli"readonly>
            </div>
            <div class="form-group">
                <label for="telp_pembeli" class="form-label">No.Hp</label>
                <input type="text" name="telp_pembeli" id="telp_pembeli" class="form-control" placeholder="Nomor Telepon" readonly>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pilihPembeliModal">
                Pilih Pembeli
            </button>
            </div>
    </div>
 </div>
 



<div class="modal fade" id="pilihPembeliModal" tabindex="-1"
role="dialog" aria-labelleby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
              Pilih Pembeli</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body ">
        <table id="tbl-pembeli" class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>No.Ktp</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.Hp</th>
                    <th>Pilih</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembeli as $p)
                <tr>
                     <td>{{ $i = (isset($i)?++$i:$i=1) }}</td>
                     <td>{{ $p->ktp_pembeli}}</td>
                     <td>{{ $p->nama_pembeli}}</td>
                     <td>{{ $p->alamat_pembeli}}</td>
                     <td>{{ $p->telp_pembeli}}</td>
                    <td><button class='pilih-pembeli' type="button">Pilih</button></td>
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
