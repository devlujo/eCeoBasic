<?php $__env->startSection('title', 'ProducaoUnidade'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Produção da unidade: </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        Resultado: <?php echo e($unidade->tipo_id); ?> Teste Municipio: <?php echo e($unidade->municipio->nome); ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-solid box-info">
                            <div class="box-header">
                                <div class="box-title">
                                    Endodontia
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Prodecimentos Minimos: <input type="text" value="<?php echo e($unidade->tipo->endodontia); ?>" >
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Portaria 1464: <input value="<?php echo e($endodontiaUnidade); ?>" type="text">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-solid box-info">
                            <div class="box-header">
                                <div class="box-title">
                                    Periodontia
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Prodecimentos Minimos: <input value="<?php echo e($unidade->tipo->periodontia); ?>" type="text">
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Portaria 1464: <input value=" <?php echo e($periodontiaUnidade); ?> " type="text">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-solid box-info">
                            <div class="box-header">
                                <div class="box-title">
                                    Cirurgia
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Prodecimentos Minimos: <input value="<?php echo e($unidade->tipo->cirurgia); ?>" type="text">
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Portaria 1464: <input value="<?php echo e($cirurgiaUnidade); ?>" type="text">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-solid box-info">
                            <div class="box-header">
                                <div class="box-title">
                                    Atenção Básica (Pacientes Especiais)
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Prodecimentos Minimos: <input value="<?php echo e($unidade->tipo->basico); ?>" type="text">
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Portaria 1464: <input value="<?php echo e($basicoUnidade); ?>" type="text">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        Resultado:
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-solid box-primary">
                            <div class="box-header">
                                <div class="box-title">
                                    Atenção Básica Pacientes Especiais
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Total Procedimentos: <input type="text" class="text-center" value=" <?php echo e($basicoUnidade); ?> ">
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Total Proc. Restauradores <input type="text" class="text-center" value=" <?php echo e($restauradorUnidade); ?> ">
                                        </label>
                                    </div>
                                </div>
                                <br>

                                <!-- RETIRAR O LABEL DE TODOS OS CAMPOS ENGLOBANDO TODO O INPUT-->

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <label for="">
                                            META:</label> <input type="text" class="text-center " value="<?php echo e($metaAtencao); ?>">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-solid box-primary">
                            <div class="box-header">
                                <div class="box-title">
                                    Endodontia
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Total Procedimentos: <input class="text-center" type="text" value="<?php echo e($endodontiaUnidade); ?>">
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Total Proc. Molares <input  class="text-center" type="text" value="<?php echo e($molarUnidade); ?>">
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <label for="">
                                            META:</label> <input type="text" class="text-center " value="<?php echo e($metaEndo); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>