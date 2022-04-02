@extends('layouts.administrador.admin')
@section('datatable-css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
@endsection
@section('content')
<div class="container">

    <h3>Productos</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevoProducto" type="button" class="btn btn-success" data-toggle="modal">Nuevo </button>    
        </div>    
    </div>    
</div>    
    <br>

    <table class="table table-bordered data-table ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Detalles</th>
                <th>Imagen</th>
                <th width="300px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
    <!--Modal para CRUD-->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="ProductoForm">
            <div class="modal-body">
                <div class="form-group">
                <input type="hidden" name="id" id="id"> 
                    <label for="nombre" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>                
                <div class="form-group">
                    <label for="precio" class="col-form-label">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio" required>
                </div>
                <div class="form-group">
                    <label for="detalles" class="col-form-label">Detalles:</label>
                    <input type="text" class="form-control" id="detalles" name="detalles" required>
                </div> 
                <div class="form-group">
                    <label for="foto" class="col-form-label">Imagen:</label>
                    <input type="file" class="form-control" id="foto" name="foto" required>
                </div>           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="reset" id="saveBtn" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
</div>
<!--FIN del cont principal-->
@endsection
@section('datatable-scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('js/alerts.js') }}"></script>

<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('Admin.gestionProductos') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'nombre', name: 'nombre'},
                {data: 'precio', name: 'precio'},
                {data: 'detalles', name: 'detalles'},
                {data: 'imagen', name: 'imagen'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        $("#btnNuevoProducto").click(function(){
            $("#ProductoForm").trigger("reset");
            $(".modal-header").css("background-color", "#1cc88a");
            $(".modal-header").css("color", "white");
            $(".modal-title").text("Nuevo Producto");            
            $("#modalCRUD").modal("show");        
        });
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            var data = new FormData($('#ProductoForm')[0]);
            
            $.ajax({
                data: data,
                url: "{{ route('gestionProductos.store') }}",
                type: "POST",
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (data) {
                    console.log(data);
                    Swal.fire({
                        icon: "success",
                        text: "Registrado correctamente",
                        timer: 1000
                    });
                    $("#modalCRUD").modal("hide");
                    table.draw();
                },
                error: function (data) {
                    console.log(data);
                }
            });
            
        });
        $('button[type=reset]').click(function(){
            $('#id').val('');
        });
        $('body').on('click', '.deleteBook', function () {      
            var id = $(this).data("id");
            console.log(id);
            if(confirm("Are You sure want to delete !")) {
                $.ajax({
                    type: "DELETE",
                    url: "{{url('Admin/gestionProductos/delete') }}"+'/'+id,
                    success: function (data) {
                        console.log(data);
                        alertDanger("Book is deleted");
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            }
        });
    });
</script>
@endsection