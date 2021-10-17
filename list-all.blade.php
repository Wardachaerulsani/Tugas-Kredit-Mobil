<table class="table-bordered table m-4">
  <tr class="align-center">
    <th>No</th>
    <th>Kode Mobil</th>
    <th>Merk</th>
    <th>Type</th>
    <th>Warna</th>
    <th>Harga Mobil</th>
    <th>Gambar</th>
  
  </tr>
  @foreach($mobil2 as $k)
    <tr>
      <td>{{ $i = (isset($i)?++$i:$i=1) }}</td>
      <td>{{ $k->kode_mobil}}</td>
      <td>{{ $k->merk }}</td>
      <td>{{ $k->type }}</td>
      <td>{{ $k->warna }}</td>
      <td>{{ $k->harga_mobil }}</td>
      <td><img src="{{ asset('assets') }}/img/{{ $k->gambar }}" width="200px"></td>
    
    </tr>
  @endforeach
</table>