<a href="crear_proyectos" class="btn btn-success">Crear Nuevo Proyecto</a>
<br/>
<br/>
    <table class="table table-light">
        <thead class= "thead-light">
            <tr class="centrar-texto fondo-ws">
                <th class="borde1 espacio05" >#</th>
                <th class="borde1 espacio05" >Nombre</th>
                <th class="borde1 espacio05" >Fecha de inicio</th>
                <th class="borde1 espacio05" >Fecha de entrega</th>
                <th class="borde1 espacio05" >Codigo Estado</th>
                <th class="borde1 espacio05" >Opciones</th>
                <th class="borde1 espacio05" >Detalle Proyecto</th>
            </tr>
        </thead>
        <tbody class="centrar-texto">

            <?php foreach($proyectos as $proyecto): ?>

                <tr class="fila">
                        
                        <td class="borde1 espacio05" data-tipo="input" data-title="cabecera1" contenteditable="true"><?=$proyecto['id'];?></td>
                        <td class="borde1 espacio05" data-tipo="input" data-title="cabecera1" contenteditable="true"><?=$proyecto['nombre_proyecto'];?></td>
                        <td class="borde1 espacio05" data-tipo="input" data-title="cabecera1" contenteditable="true"><?=$proyecto['fecha_inicio'];?></td>
                        <td class="borde1 espacio05" data-tipo="input" data-title="cabecera1" contenteditable="true"><?=$proyecto['fecha_entrega'];?></td>
                        <td class="borde1 espacio05" data-tipo="input" data-title="cabecera1" contenteditable="true"><?=$proyecto['codigo_estado'];?></td>
                        <td class="borde1 espacio05" data-tipo="input" data-title="opciones">
                            <!-- Boton Editar -->
                            <a href="<?=base_url('index.php/editar_proyecto/'.$proyecto['id']);?>" class="btn btn-warning" type="button">Editar</a>
                            <!-- Boton eliminar Antiguo -->
                            <!-- <a data-bs-id = "<? //=$proyecto['id'];?>" data-bs-toggle="modal" data-bs-target="#deleteModal"  href="<? //=base_url('index.php/borrar_proyecto/'.$proyecto['id']);?>" class="btn btn-danger" type="button">Borrar</a> -->
                            <button data-bs-id ="<?=$proyecto['id'];?>" data-bs-name="<?=$proyecto['nombre_proyecto'];?>" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger" >Eliminar</button>
                            
                        </td>
                        <!-- Boton detalles del pryecto -->
                        <td class="borde1 espacio05" data-tipo="input" data-title="Detalles">
                            <a href="#" class="btn btn-success" type="button">Detalle Proyecto</a>
                        </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Modal eliminar registro -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Eliminar <span></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Estas seguro que deseas eliminar este registro?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <form id ="deleteForm" data-bs-action="<?=base_url('index.php/borrar_proyecto/'.$proyecto['id']);?>" action="" method="POST">  
                            <a data-bs-id ="<?=$proyecto['id'];?>" href="<?=base_url('index.php/borrar_proyecto/'.$proyecto['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</section>

    <script>
        export default{
                var :deleteModal = document.getElementById('deleteModal')
                .deleteModal.addEventListener('show.bs.modal', event => 
                {

                    var button = event.relatedTarget
                    // Consumiendo datos
                    var id = button.getAttribute('data-bs-id')
                    var name = button.getAttribute('data-bs-name')

                    // Mod Titulo
                    var modalTitle = deleteModal.querySelector('.modal-title span')
                    modalTitle.textContent = name 
                    // Mod Formulario
                    var deleteForm = deleteModal.querySelector('#deleteForm')
                    var action = deleteForm.getAttribute("data-bs-action")

                    deleteForm.setAttribute("action",action+id)
                })
        }
    </script>

</div>

