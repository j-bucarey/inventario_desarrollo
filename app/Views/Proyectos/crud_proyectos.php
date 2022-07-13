<a href="crear_proyectos" class="btn btn-success">Crear Nuevo Proyecto</a>
<br/>
<br/>

    <table class="no-table centrar">
        <thead>
            <tr class="centrar-texto fondo-ws">
                <td class="borde1 espacio05" >#</td>
                <td class="borde1 espacio05" >Nombre</td>
                <td class="borde1 espacio05" >Fecha de inicio</td>
                <td class="borde1 espacio05" >Fecha de entrega</td>
                <td class="borde1 espacio05" >Codigo estado</td>
              
        <td class="borde1 espacio05" >Opciones</td>
            </tr>
        </thead>
        <tbody class="centrar-texto">

        <?php foreach($proyectos as $proyecto): ?>

        <tr class="fila">
                <td><?=$proyecto['id'];?></td>
                <td><?=$proyecto['nombre_proyecto'];?></td>
                <td><?=$proyecto['fecha_inicio'];?></td>
                <td><?=$proyecto['fecha_entrega'];?></td>
                <td><?=$proyecto['codigo_estado'];?></td>

                 <!-- Falta agregar codigo_estado -->
                <td>
                    <a href="<?=base_url('index.php/editar_proyecto/'.$proyecto['id']);?>" class="btn btn-warning" type="button">Editar</a>
                    <a href="<?=base_url('index.php/borrar_proyecto/'.$proyecto['id']);?>" class="btn btn-danger" type="button">Borrar</a>
            <td class="borde1 espacio05" data-tipo="input" data-title="opciones">
            
            </td>
        </tr>
        <?php endforeach; ?>


        </tbody>
    </table>

</section>
</div>