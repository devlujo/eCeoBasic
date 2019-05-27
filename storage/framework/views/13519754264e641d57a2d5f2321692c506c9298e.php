<?php $__env->startSection('title', 'CeoProducoes'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Cadastrar Produção (tela do usuário) </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-sm-12">
    <div class="box">
      <br>
      <form action="">
      <div class="form-group row">
        <div class="col-sm-2 col-sm-offset-3">
          <label for="ex1">Municipio:</label>
          <input class="form-control" id="ex1" type="number">
        </div>
        <div class="col-sm-2">
          <label for="ex2">Mês:</label>
          <input class="form-control" id="ex2" type="text">
        </div>
        <div class="col-sm-2">
          <label for="ex2">Ano:</label>
          <input class="form-control" id="ex2" type="text">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-2">
          <label for="">Procedimentos:</label>
        </div>
        <div class="col-sm-2 text-center bg-aqua">
          <label for="">Endodontia</label>
        </div>
        <div class="col-sm-2 text-center bg-light-blue">
          <label for="">Periodontia</label>
        </div>
        <div class="col-sm-2 text-center bg-aqua">
          <label for="">Cirurgia</label>
        </div>
        <div class="col-sm-2 text-center bg-light-blue">
          <label for="">Atenção Básica *PE</label>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-2  ">
          <label for="">Município</label>
        </div>
        <div class="col-sm-1 ">
          <label for="">Mínimos</label>
        </div>
        <div class="col-sm-1">
          <label for="">Portaria</label>
        </div>
        <div class="col-sm-1 ">
          <label for="">Mínimos</label>
        </div>
        <div class="col-sm-1 ">
          <label for="">Portaria</label>
        </div>
        <div class="col-sm-1">
          <label for="">Mínimos</label>
        </div>
        <div class="col-sm-1">
          <label for="">Portaria</label>
        </div>
        <div class="col-sm-1 ">
          <label for="">Mínimos</label>
        </div>
        <div class="col-sm-1 ">
          <label for="">Portaria</label>
        </div>
      </div>
      <!-- Aqui será o foreach de municipios -->
      <div class="form-group row">
        <div class="col-sm-2 ">
          <input value="municipio" class="form-control" type="text">
        </div>
        <div class="col-sm-1 ">
          <input class="form-control" type="number">
        </div>
        <div class="col-sm-1 ">
          <input class="form-control" type="number">
        </div>
        <div class="col-sm-1 ">
          <input class="form-control" type="number">
        </div>
        <div class="col-sm-1 ">
          <input class="form-control" type="number">
        </div>
        <div class="col-sm-1">
          <input class="form-control" type="number">
        </div>
        <div class="col-sm-1 ">
          <input class="form-control" type="number">
        </div>
        <div class="col-sm-1 ">
          <input class="form-control" type="number">
        </div>
        <div class="col-sm-1 ">
          <input class="form-control" type="number">
        </div>
      </div>
      
      <div class="form-group row">
        <div class="col-sm-2 col-sm-offset-5">
          <button  class="btn btn-success" type="submit">Cadastrar</button>
        </div>
      </div>
      </form>
      <br>
    </div>
  </div>
</div>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>