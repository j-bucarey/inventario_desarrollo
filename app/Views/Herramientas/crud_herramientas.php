
<a href="crearHerr" class="btn btn-success">Crear Herramienta</a>
<br/>
<br/>

<table class="table table-light">
    <thead class= "thead-light">
        <tr class="centrar-texto fondo-ws">
            <th class="borde1 espacio05" >#</th>
            <th class="borde1 espacio05" >Nombre</th>
            <th class="borde1 espacio05" >Código</th>
            <th class="borde1 espacio05" >Stock</th>
    <th class="borde1 espacio05" >Opciones</th>
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
        <a href="<?=base_url('editarHerr/'.$herramienta['id']);?>" class="btn btn-warning" type="button">Editar</a>
        <button data-bs-id ="<?=$herramienta['id'];?>" data-bs-name="<?=$herramienta['nombre'];?>" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger" >Eliminar</button>        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

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
                        <form id ="deleteForm" data-bs-action="<?=base_url('index.php/borrarHerr/'.$herramienta['id']);?>" action="" method="POST">  
                            <a data-bs-id ="<?=$herramienta['id'];?>" href="<?=base_url('index.php/borrarHerr/'.$herramienta['id']);?>" class="btn btn-danger" type="button">Borrar</a>
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