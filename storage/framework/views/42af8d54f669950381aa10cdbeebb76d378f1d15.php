<?php $__env->startSection('title', 'CeoProducoes'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Ceo Ambulatorial 2018</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="box ">
        <div class="box-header">
            <div class="box-title">Filtros</div>
        </div>
        <form class="form-inline" action="<?php echo e(route('ambulatorial.store')); ?>" method="post" >
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
            <label for="">Codigo da Unidade</label>
            <select class="form-control" name="codigo_unidade">
                <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($unidade->codigo_unidade); ?>"><?php echo e($unidade->codigo_unidade); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            </div>
        <div class="form-group">
            <label for="">Mês</label>
            <select class="form-control" name="mes">
            <option value="01">Janeiro</option>
            <option value="02">Fevereiro</option>
            <option value="03">Março</option>
            <option value="04">Abril</option>
            <option value="05">Maio</option>
            <option value="06">Junho</option>
            <option value="07">Julho</option>
            <option value="08">Agosto</option>
            <option value="09">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Ano</label>
            <select class="form-control" name="ano">
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            </select>
        </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>
        <br>
        </div>
    </div>
</div>





















































<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>