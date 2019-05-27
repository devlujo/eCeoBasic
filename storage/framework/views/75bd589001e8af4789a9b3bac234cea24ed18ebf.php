

<?php $__env->startSection('title', 'CeoUnidades'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Unidades CEO </h1>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<table class="table" >
    <thead>
        <tr>
            <th>CNES</th>
            <th>Municipio</th>
            <th>Responsável</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>6576400</td>
            <td>Campo Grande</td>
            <td>Márcia</td>
            <td class="text-success" >Ativo</td>
            <td>
                <a href=""><span class="glyphicon glyphicon-pencil"  aria-hidden="true" style="color:orange"></span></a>
                &ensp;
                <a href=""><span class="fa fa-times"  aria-hidden="true" style="color: red"></span></a>
                </td>
            </td>
        </tr>
        <tr>
            <td>6576400</td>
            <td>Três Lagoas</td>
            <td>Luiz Felipe</td>
            <td class="text-success" >Ativo</td>
            <td>
                <a href=""><span class="glyphicon glyphicon-pencil"  aria-hidden="true" style="color:orange"></span></a>
                &ensp;
                <a href=""><span class="fa fa-times"  aria-hidden="true" style="color: red"></span></a>
                </td>
            </td>
        </tr>
        
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>