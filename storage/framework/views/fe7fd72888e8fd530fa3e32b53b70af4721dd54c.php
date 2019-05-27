<?php $__env->startSection('title', 'Ceo Manual'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Produção Manual </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<p>Total de procedimentos mínimos. <input type="date"></p>


<table class="table" >
    <thead>
        <tr>
            <th>Ceo</th>
            <th>Status</th>
            <th>Total Endodontia </th>
            <th>Total Periodontia</th>
            <th>Total Cirurgia</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Paranaíba</td>
            <td class="bg-danger text-danger" >Não Cadastrado</td>
            <td>65</td>
            <td>104</td>
            <td>138</td>
        </tr>
        <tr>
            <td>Tres Lagoas</td>
            <td class="bg-success text-success" >Completo</td>
            <td>65</td>
            <td>104</td>
            <td>138</td>
        </tr>
        <tr>
            <td>CG / Cidade Morena</td>
            <td class="bg-success text-success" >Completo</td>
            <td>65</td>
            <td>104</td>
            <td>138</td>
        </tr>
        <tr>
            <td>CG / Cidade Guanandy</td>
            <td class="bg-success text-success" >Completo</td>
            <td>65</td>
            <td>104</td>
            <td>138</td>
        </tr>
        <tr>
            <td>Cassilândia/td>
            <td class="bg-success text-success" >Completo</td>
            <td>65</td>
            <td>104</td>
            <td>138</td>
        </tr>
    </tbody>
</table>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>