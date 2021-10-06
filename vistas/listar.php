<?php require_once("../encabezado.php"); ?>
<div class="container">
    <h2 class="is-size-2">Lista de productos</h2>
    <hr>
    <div class="box ">
    <div class="columns">
        <div class="column">
            <table class="table is-bordered is-fullwidth">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="cuerpoTabla">
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
<script src="../js/listar.js"></script>
<?php require_once("../pie.php"); ?>