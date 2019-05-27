

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
          <input class="form-control" id="ex1" type="number" value="Usuário">
        </div>
        <div class="col-sm-2">
          <label for="ex2">Mês:</label>
          <select class="form-control" >
            <option value="">Janeiro</option>
            <option value="">Fevereiro</option>
            <option value="">Março</option>
            <option value="">Abril</option>
            <option value="">Maio</option>
            <option value="">Junho</option>
            <option value="">Julho</option>
            <option value="">Agosto</option>
            <option value="">Setembro</option>
            <option value="">Outubro</option>
            <option value="">Novembro</option>
            <option value="">Dezembro</option>
          </select>
        </div>
        <div class="col-sm-2">
          <label for="ex2">Ano:</label>
          <select class="form-control">
            <option value="">2019</option>
            <option value="">2018</option>
            <option value="">2017</option>
          </select>
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
          <input disabled value="Paranaíba" class="form-control" type="text">
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
        <div class="col-sm-2 ">
          <input disabled value="Aparecida do Taboado" class="form-control" type="text">
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
        <div class="col-sm-2 ">
          <input disabled value="Inocência" class="form-control" type="text">
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
        <div class="col-sm-2 text-center ">
          <label for="">TOTAL</label>
        </div>
        <div class="col-sm-1 ">
          <input disabled class="form-control text-center text-bold"  value="50" >
        </div>
        <div class="col-sm-1 ">
          <input disabled class="form-control text-center text-bold"  value="50" >
        </div>
        <div class="col-sm-1 ">
          <input disabled class="form-control text-center text-bold"  value="50" >
        </div>
        <div class="col-sm-1 ">
          <input disabled class="form-control text-center text-bold"  value="50" >
        </div>
        <div class="col-sm-1">
          <input disabled class="form-control text-center text-bold"  value="50" >
        </div>
        <div class="col-sm-1 ">
          <input disabled class="form-control text-center text-bold"  value="50" >
        </div>
        <div class="col-sm-1 ">
          <input disabled class="form-control text-center text-bold"  value="50" >
        </div>
        <div class="col-sm-1 ">
          <input disabled class="form-control text-center text-bold"  value="50" >
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