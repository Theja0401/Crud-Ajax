<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Kita Serba Digital</title>
</head>
<body>
    <div id="wrapper">
    @include('layouts/app2')
        <div class="content-page">
            <div class="content">

            <!-- Start -->
            <div class="container-fluid">
                <br>
                @if (session('success'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Berhasil!</strong>  {{ session('success') }}
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-error alert-dismissable bg-danger text-white">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Gagal!</strong> {!! implode('', $errors->all('<div>:message</div>')) !!}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                            <div class="card-header">
                                <h2>Gallery</h2>
                            </div>
                            <button type="button" class="btn btn-primary tambah float-right" data-toggle="modal" data-target="galleryModal" style="margin-top: -5.5%; margin-right: 2%;">
                                Tambah Album
                            </button>
                            <div class="card-body">
                                <table id="galleryTable" width="100%" class="table table-bordered dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Foto</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kota</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                        <tbody>
                                          
                                        </tbody>
                                </table>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

<!-- Modal add-->
<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="Data" enctype="multipart/form-data" action="/store" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" parsley-trigger="change" name="nama" id="nama" placeholder="Masukan nama album">
                    </div>
                    <div class="form-group">
                        <input type="radio" id="cowok" name="jenis" value="cowok">
                        <label for="cowok">Cowok</label>
                        <input type="radio" id="cewek" name="jenis" value="cewek">
                        <label for="cewek">Cewek</label>
                    </div>
                    <div class="form-group">
                        <label for="File">File</label>
                        <input type="file" name="file" id="file" class="form-control dropify" multiple="multiple" >
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <select name="kota" id="kota" class="form-control">
                            <option value="Pontianak">Pontianak</option>
                            <option value="Semarang">Semarang</option>
                            <option value="Palangkaraya">Palangkaraya</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="galleryModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="DataEdit" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="hidden" id="id" name="editID">
                        <input type="text" class="form-control" parsley-trigger="change" name="nama" id="nama_edit" placeholder="Masukan nama album">
                    </div>
                    <div class="form-group">
                        <input type="radio" id="cowok_edit" name="jenis" value="cowok">
                        <label for="cowok">Cowok</label>
                        <input type="radio" id="cewek_edit" name="jenis" value="cewek">
                        <label for="cewek">Cewek</label>
                    </div>
                    <div class="form-group">
                        <label for="File">File</label>
                        <input type="hidden" name="filename" id="filename">
                        <input type="file" name="file" id="file_edit" class="form-control dropify" multiple="multiple" >
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <select name="kota" id="kota_edit" class="form-control">
                            <option value="Pontianak">Pontianak</option>
                            <option value="Semarang">Semarang</option>
                            <option value="Palangkaraya">Palangkaraya</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        $('#kota').select2();
        $('#galleryTable').DataTable({
            processing:true,
            info:true, 
            ajax:"{{route('get') }}",
            columns:[
                {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
                {data:'nama',name:'nama'},
                {data: 'foto',name: 'foto',
                    render: function( data, type, full, meta ) {
                        return "<img src=\"" + data + "\" width=\"150\" data-action='zoom' />";
                    }},
                {data:'jenis_kelamin',name:'jenis_kelamin'},
                {data:'Kota',name:'Kota'},
                {data:'action',name:'action'},
            ]
        });
        $(document).on('click','.tambah',function(e) {
            $('#galleryModal').modal('show');
        })
        $('#Data').submit(function(e){
            e.preventDefault();
            $.ajax({
                method:"POST",
                url: "/store",
                data:new FormData(this),
                contentType: false,
                cache:false,
                processData:false,
                success:function(response){
                    swal.fire({
                    title:'Sukses!',
                    text: 'Berhasil Memasukkan Data',
                    type: 'success',
                    confirmButtonText: 'Oke'
                    });
                    $('#galleryModal').modal('hide');
                    $('#galleryTable').DataTable().ajax.reload();
                }
            })
        })
        $(document).on('click','.edit',function(e) {
            var id=$(this).attr('id'); 
            $.ajax({
                url:'/edit/'+id,
                success: function(response){
                    console.log(response);
                    $('#id').val(response.id);
                    $('#filename').val(response.foto);
                    $('#nama_edit').val(response.nama);
                    if(response.jenis_kelamin =="cewek"){
                        $('#cewek_edit').attr('checked','checked');
                    }else{
                        $('#cowok_edit').attr('checked','checked');
                    }
                    $('#kota_edit').val(response.Kota).trigger('change'); 
                    var lokasi_foto = "{{ asset('storage/foto') }}"+'/'+response.foto;

                    var fileDropper = $("#file_edit").dropify({
                    messages: {default: "Seret dan lepas logo disini atau klik", replace: "Seret dan lepas logo disini atau klik", remove: "Remove", error: "Terjadi kesalahan"},
                    error: {fileSize: "Ukuran file gambar terlalu besar (Maksimal 1 MB)"},
                    });

                    fileDropper = fileDropper.data('dropify');
                    fileDropper.resetPreview();
                    fileDropper.clearElement();
                    fileDropper.settings['defaultFile'] = lokasi_foto;
                    fileDropper.destroy();
                    fileDropper.init();
                }
            })
            $('#galleryModalEdit').modal('show');
        })
        $('#DataEdit').submit(function(e){
            e.preventDefault();
            $.ajax({
                method:"POST",
                url: "/update",
                data:new FormData(this),
                contentType: false,
                cache:false,
                processData:false,
                success:function(response){
                    swal.fire({
                    title:'Sukses!',
                    text: 'Berhasil Mengupdate Data',
                    type: 'success',
                    confirmButtonText: 'Oke'
                    }).then((result)=>{
                        $('#galleryTable').DataTable().ajax.reload();
                    });
                    $('#galleryModal').modal('hide');
                }
            })
        })
        $(document).on('click', '.delete', function(e){
                var id = $(this).attr('id');
                Swal.fire({
                title: 'Are you sure?',
                text: "Yakin untuk menghapus data?",
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yakin'
                }).then((result) => {
                    if(result.value) {
                        $.ajax({
                            method:'get',
                            url : '/delete/'+id,
                            success: function(data) {
                                swal.fire({
                                    type: 'success',
                                    title:"Berhasil Dihapus",
                                    confirmButtonText: 'Oke',
                                })
                                $('#galleryTable').DataTable().ajax.reload();
                            }
                        })
                    }
                })
        });
    });
</script>
</body>
</html>