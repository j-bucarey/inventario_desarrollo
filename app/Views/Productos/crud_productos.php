
<a href="crear" class="btn btn-success">Crear Nuevo Producto</a>
<br/>
<br/>
    <table class="no-table centrar">
        <thead>
            <tr class="centrar-texto fondo-ws">
                <th class="borde1 espacio05" >#</th>
                <th class="borde1 espacio05" >Nombre</th>
                <th class="borde1 espacio05" >Stock</th>
                <th class="borde1 espacio05" >Código</th>
        <th class="borde1 espacio05" >opciones</th>
            </tr>
        </thead>

        <tbody class="centrar-texto">

        <?php foreach($productos as $producto): ?>

        <tr class="fila">
                <td class="borde1 espacio05" title="cabecera1" contenteditable="true"><?=$producto['id'];?></td>
                <td class="borde1 espacio05" title="cabecera2" contenteditable="true"><?=$producto['nombre'];?></td>
                <td class="borde1 espacio05" title="cabecera3" contenteditable="true"><?=$producto['stock'];?></td>
                <td class="borde1 espacio05" title="cabecera3" contenteditable="true"><?=$producto['codigo'];?></td>
            <td class="borde1 espacio05" data-tipo="input" data-title="opciones">
            <a href="<?=base_url('index.php/editar/'.$producto['id']);?>" class="btn btn-warning">Editar</a>
            <a href="<?=base_url('index.php/borrar/'.$producto['id']);?>" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</section>
</div>