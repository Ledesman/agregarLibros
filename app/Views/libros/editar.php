<?= $cabecera; ?>

    editar libro
    <div class="card ">
      <div class="card-body">
        <h4 class="card-title">Ingrese datos del libro</h4>
        <p class="card-text">
  <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?=$libro['id'] ?>">
    <div class="form-group">
          <label for="nombre">Nombre Libro:</label>
          <input type="text" value="<?= $libro['nombre'] ?>" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre..." aria-describedby="nombre">
         
        </div>
        <div class="form-group">
          <label for="precio">precio Libro:</label>
          <input type="number" value="<?= $libro['precio'] ?>"" name="precio" id="precio" class="form-control"  aria-describedby="precio">
         
        </div>
        <div class="form-group">
          <label for="imagen">Imagen:</label>
          <br/>
          <img src="<?=base_url()?>/uploads/<?= $libro['imagen']; ?>"
                         class="img-thumbnail" width="100"  alt="Img.jpg">
          <input type="file" class="form-control-file" name="imagen" id="imagen" >
        
        </div>
        <br>
        <button type="submit" class="btn btn-warning">Actualizar</button>
        <a class="btn btn-secondary" href="<?=base_url('listar');?>">Cancelar</a>
    </form>


        </p>
      </div>
    </div>

    <?= $pie; ?>