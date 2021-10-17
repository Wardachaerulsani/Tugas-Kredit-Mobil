@extends('templates/header')
@section('content')
<div class="card">
<div class="card-header">
    <h3 class="card-title">Data Mobil</h3>
    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>

    </div>
</div>
<div class="card-body">
 <div>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formInputModal">
        Tambah Data
     </button>
 </div>
<div style="margin-top:20px">
    @if(session('success'))
    <div class="alert alert-success" role="alert" id="success-alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
</div>
    <div class="card-footer">
        @include('mobil2/form')
        @include('mobil2/list-all')        
    </div>
</div>
@endsection

@push('script')
<script>
    $(function(){
        //data table
        $('#tbl-mobil2').DataTable()
        
        //menghapus alert
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });
         $("#error-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });

        //delete kelas
        // $('.delete-mobil2').click(function(e){
        //     e.preventDefault()
        //     let data = $(this).closest('tr').find('td:eq(1)').text()
        //     swal({
        //         title: "Apakah kamu yakin?",
        //         text: "Data "+data+" akan dihapus?",
        //         icon:  "warning",
        //         buttons: true,
        //         dangerMode: true,
        //     })
        //     .then((req) => {
        //         if(req) $(e.target).closest('form').submit()
        //         else swal.close()
        //     });
        // });
        //edit dan input kelas
        // $('#formInputModal').on('show.bs.modal', function(event){
        // let button $(event.relatedTarget)
        // console.log(button)
        // let id= button.data('id')
        // let kode_mobil= button.data('kode_mobil')
        // let merk= button.data('merk') 
        // let type= button.data('type')
        // let warna= button.data('warna')
        // let harga_mobil= button.data('harga_mobil')
        // let gambar= button.data('gambar')
        // let modal $(this)
        // if(mode="edit"){
        //     modal.find('.modal-title').text('Edit Data Mobil2') 
        //     modal.find('.modal-body #kode_mobil' ).val(kode_mobil)
        //     modal.find('.modal-body #merk' ).val(merk)
        //     modal.find('.modal-body #type' ).val(type)
        //     modal.find('.modal-body #warna' ).val(warna)
        //     modal.find('.modal-body #harga_mobil' ).val(harga_mobil)
        //     modal.find('.modal-body #gambar' ).val(gambar)
        //     modal.find('.modal-footer #btn-submit').text( 'Update')
        //     modal.find('.modal-body #method').html('{{ method_field('patch') }}')
        //     modal.find('.modal-body form').attr('action', 'kelas/'+id)
        // }else{
        //     modal.find('.modal-title').text('Input Data Mobil') 
        //     modal.find('.modal-body #kode_mobil').val('')
        //     modal.find('.modal-body #merk').val('')
        //     modal.find('.modal-body #type').val('')
        //     modal.find('.modal-body #warna').val('')
        //     modal.find('.modal-body #harga_mobil').val('')
        //     modal.find('.modal-body #gambar').val('')
        //     modal.find('.modal-body #method').html("") 
        //     modal.find('.modal-footer #btn-submit').text('Submit')
        // }
    })
</script>
@endpush
