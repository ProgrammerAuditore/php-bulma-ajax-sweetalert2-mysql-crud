<?php require_once("../encabezado.php"); ?>
<div class="container">
    <h2 class="is-size-2">Editar producto</h2>
    <hr>
    <div class="box">
            <div class="field">
                <label for="nombre" class="label">Nombre</label>
                <div class="control">
                    <input required id="nombre" class="input" type="text" placeholder="Nombre" name="nombre">
                </div>
            </div>

            <div class="field">
                <label for="descripcion" class="label">Descripción</label>
                <div class="control">
                    <textarea name="descripcion" class="textarea" id="descripcion" cols="30" rows="5" placeholder="Descripción" required></textarea>
                </div>
            </div>

            <div class="field">
                <label for="precio" class="label">Precio</label>
                <div class="control">
                    <input required id="precio" name="precio" class="input" type="number" placeholder="Precio">
                </div>
            </div>
            
            <div class="field">
                <div class="control">
                    <button id="btnEditar" class="button is-success">Guardar</button>
                    <a href="listar.php" class="button is-warning">Volver</a>
                </div>
            </div>
    </div>
</div>
<script src="../js/actualizar.js"></script>
<?php require_once("../pie.php"); ?>