<?= $cabecera ?>
<a class="btn btn-success" href="<?= base_url('crear')?>">Crear un Libro</a>
<br/>
<br/>

<div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">precio</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach($libros as $libro): ?>
                    <tr class="">
                        <td scope="row"><?= $libro['id']; ?></td>
                        <td><img src="<?=base_url()?>/uploads/<?= $libro['imagen']; ?>"
                         class="img-thumbnail" width="100"  alt="Img.jpg">
                           
                    </td>
                        <td><?= $libro['precio']; ?></td>
                        <td><?= $libro['nombre']; ?></td>
                        <td>
                        <a href="<?=base_url('editar/'.$libro['id']); ?>" type="button" class="btn btn-info">Editar</a>    
                        <a href="<?=base_url('borrar/'.$libro['id']); ?>" type="button" class="btn btn-danger">Borrar</a>    
                        </td>

                    </tr>
                   <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <?= $pie ?>