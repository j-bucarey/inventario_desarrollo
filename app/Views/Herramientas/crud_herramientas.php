
<a href="crearHerr">Nuevo herramienta</a>

<table class="no-table centrar">
    <thead>
        <tr class="centrar-texto fondo-ws">
            <th class="borde1 espacio05" >#</th>
            <th class="borde1 espacio05" >Nombre</th>
            <th class="borde1 espacio05" >Código</th>
            <th class="borde1 espacio05" >Stock</th>
    <th class="borde1 espacio05" >opciones</th>
        </tr>
    </thead>

    <tbody class="centrar-texto">

    <?php foreach($herramientas as $herramienta): ?>

    <tr class="fila">
            <td class="borde1 espacio05" data-tipo="input" data-title="cabecera1" contenteditable="true"><?=$herramienta['id'];?></td>
            <td class="borde1 espacio05" data-tipo="input" data-title="cabecera2" contenteditable="true"><?=$herramienta['nombre'];?></td>
            <td class="borde1 espacio05" data-tipo="input" data-title="cabecera3" contenteditable="true"><?=$herramienta['codigo'];?></td>
            <td class="borde1 espacio05" data-tipo="input" data-title="cabecera3" contenteditable="true"><?=$herramienta['stock'];?></td>
        <td class="borde1 espacio05" data-tipo="input" data-title="opciones">
        <a href="#" class="btn btn-info">Editar</a>
        <a href="<?=base_url('borrarHerr/'.$herramienta['id']);?>" class="btn btn-danger">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</section>
</div>