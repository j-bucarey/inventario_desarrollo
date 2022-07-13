
    <table class="no-table centrar">
        <thead>
            <tr class="centrar-texto fondo-ws">
                <td class="borde1 espacio05" >#</td>
                <td class="borde1 espacio05" >Nombre</td>
                <td class="borde1 espacio05" >Stock</td>
                <td class="borde1 espacio05" >Código</td>
        <td class="borde1 espacio05" >opciones</td>
            </tr>
        </thead>

        

        <tbody class="centrar-texto">

        <?php foreach($bodegas as $bodega): ?>

        <tr class="fila">
                <td class="borde1 espacio05" data-tipo="input" data-title="cabecera1" contenteditable="true"><?=$bodega['id'];?></td>
                <td class="borde1 espacio05" title="cabecera2" contenteditable="true"><?=$bodega['nombre'];?></td>
                <td class="borde1 espacio05" title="cabecera3" contenteditable="true"><?=$bodega['stock'];?></td>
                <td class="borde1 espacio05" title="cabecera3" contenteditable="true"><?=$bodega['codigo'];?></td>
            <td class="borde1 espacio05" data-tipo="input" data-title="opciones">
            <a href="<?=base_url('editarBod/'.$bodega['id']);?>" class="btn btn-info">Editar</a>
            <a href="<?=base_url('borrarBod/'.$bodega['id']);?>" class="btn btn-danger">Eliminar</a>
            </td>
            <tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</section>
</div>