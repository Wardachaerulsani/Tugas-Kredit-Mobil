<div class="modal fade" id="formInputModal" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mobil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
    <form method="POST" action="/mobil2">
          @csrf
          <div id="method"></div>
            <div class="card-body">
              <div class="form-group">
                <label for="kode_mobil">Kode Mobil</label>
                <input type="text" class="form-control " id="kode_mobil" placeholder="Kode Mobil" name="kode_mobil">
              </div>
              <div class="form-group">
                <label for="merk">Merk</label>
                <input type="text" class="form-control" id="merk" placeholder="merk" name="merk">
              </div>
              <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" placeholder="Type" name="type">
              </div>
              <div class="form-group">
                <label for="warna">Warna</label>
                <input type="text" class="form-control" id="warna" placeholder="warna" name="warna" >
              </div>
              <div class="form-group">
                <label for="harga_mobil">Harga Mobil</label>
                <input type="text" class="form-control" id="harga_mobil" placeholder="harga_mobil" name="harga_mobil">
              </div>
                <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" class="form-control" id="gambar" placeholder="gambar" name="gambar" >
              </div>
            </div>
          </div>
            <!-- /.card-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
        </form>
  </div>
  </div>

