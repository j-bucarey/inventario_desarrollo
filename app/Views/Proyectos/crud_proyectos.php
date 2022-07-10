
    <table class="no-table centrar">
        <thead>
            <tr class="centrar-texto fondo-ws">
                <td class="borde1 espacio05" >#</td>
                <td class="borde1 espacio05" >Nombre</td>
                <td class="borde1 espacio05" >Fecha de inicio</td>
                <td class="borde1 espacio05" >Fecha de entrega</td>
                <td class="borde1 espacio05" >Código Estado</td>
        <td class="borde1 espacio05" >opciones</td>
            </tr>
        </thead>

        

        <tbody class="centrar-texto">
        <tr class="fila">
                <td class="borde1 espacio05" data-tipo="input" data-title="cabecera1" contenteditable="true"><?=$proyecto['id'];?></td>
                <td class="borde1 espacio05" data-tipo="input" data-title="cabecera2" contenteditable="true"><?=$proyecto['nombre'];?></td>
                <td class="borde1 espacio05" data-tipo="input" data-title="cabecera3" contenteditable="true"><?=$proyecto['Fecha de inicio'];?></td>
                <td class="borde1 espacio05" data-tipo="input" data-title="cabecera3" contenteditable="true"><?=$proyecto['Fecha de entrega'];?></td>
                <td class="borde1 espacio05" data-tipo="input" data-title="cabecera3" contenteditable="true"><?=$proyecto['id'];?></td>
            <td class="borde1 espacio05" data-tipo="input" data-title="opciones">
            <a href="#" class="btn btn-info">Editar</a>
            <a href="#" class="btn btn-danger">Eliminar</a>
            </td>
        </tbody>
    </table>

</section>
</div>