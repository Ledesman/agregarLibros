<?= $cabecera ?>

    Crear libros


    <div class="card ">
      <div class="card-body">
        <h4 class="card-title">Ingrese datos del libro</h4>
        <p class="card-text">
  <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
 
    <div class="form-group">
          <label for="nombre">Nombre Libro:</label>
          <input type="text" value="<?=old('nombre') ?>" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre..." aria-describedby="nombre">
         
        </div>
        <div class="form-group">
          <label for="precio">precio Libro:</label>
          <input type="number" value="<?=old('precio') ?>" name="precio" id="precio" class="form-control"  aria-describedby="precio">
         
        </div>
        <div class="form-group">
          <label for="imagen">Imagen:</label>
          <br/>
          <input type="file" value="<?=old('imagen') ?>" class="form-control-file" name="imagen" id="imagen" >
        
        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a class="btn btn-light" href="<?=base_url('listar');?>">Cancelar</a>
    </form>


        </p>
      </div>
    </div>
  

    <?= $pie ?>