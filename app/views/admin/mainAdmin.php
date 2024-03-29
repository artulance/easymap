<?php defined('ROOT_PATH') or exit('Direct access forbidden'); ?>
<h1 class="h2 body__text">Dashboard</h1>
<p class="body__text">Panel de administración general</p>
<div class="row my-4">
    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <div class="card">
            <h5 class="card-header">Mapas</h5>
            <div class="card-body text-center">
            <h5 class="card-title"></h5>
              <p class="card-text"><a href="">Crear mapa</a></p>
              <p class="card-text"><a href="<?php echo COMPLETE_WEB_PATH_ADMIN; ?>mapas">Listar mapas</a></p>
              <p class="card-text"><a href="">Agregar filtros</a></p>
            </div>
       
          </div>
    </div>
    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
        <div class="card">
            <h5 class="card-header">Configuracion</h5>
            <div class="card-body text-center">
              <h5 class="card-title"></h5>
              <p class="card-text"><a href="">Pagina principal</a></p>
              <p class="card-text"><a href="">Codigo Header</a></p>
              <p class="card-text"><a href="">Código Footer</a></p>
            </div>
          </div>
    </div>
    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
        <div class="card">
            <h5 class="card-header">Páginas</h5>
            <div class="card-body text-center">
              <h5 class="card-title"></h5>
              <p class="card-text"><a href="">Crear página</a></p>
              <p class="card-text"><a href="">Categorias</a></p>
              <p class="card-text"><a href="">Listar páginas</a></p>
            </div>
          </div>
    </div>
    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
        <div class="card">
            <h5 class="card-header">Usuarios</h5>
            <div class="card-body text-center">
              <h5 class="card-title"></h5>
              <p class="card-text"><a href="">Crear usuario</a></p>
              <p class="card-text"><a href="<?php echo COMPLETE_WEB_PATH_ADMIN; ?>users">Listar usuarios</a></p>
             <!-- <p class="card-text"><a href="">Roles</a></p>-->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-lg-0">
        <div class="card">
            <h5 class="card-header">Mapas actuales</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Fecha de creación</th>   
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php  
                          if(!$this->maps->isEmpty()){
                            foreach ($this->maps as $value) {
                              echo '<tr>
                              <th scope="row">'.htmlspecialchars($value->title).'</th>
                              <th scope="row">'.htmlspecialchars($value->description).'</th>
                              <td><p class="card-text text-success">'.$value->created_at.'</p></td>
                              <td><a class="btn btn-secondary" noprefetch href="'
                              .Helper::$urlGeneration->route('edit_map', ['id' => $value->id_map]).'">Editar</a></td>
                              </tr>
                              ';
                            } 
                          }
                         ?>
                        </tbody>
                      </table>
                </div>
                <a href="<?php echo Helper::$urlGeneration->route('list_maps');?>" class="btn btn-block btn-light float-end">Ver todos</a>
            </div>
        </div>
    </div>

</div>