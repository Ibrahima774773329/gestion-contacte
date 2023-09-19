



<?php $__env->startSection('content'); ?>

    <h1>Gestion de Tache</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom Complet:</th>
            <td><?php echo e($contact->nomComplet); ?></td>
        </tr>

        <tr>

            <th>Telephone:</th>
            <td><?php echo e($contact->telephone); ?></td>

        </tr>

        <tr>

            <th>Email:</th>
            <td><?php echo e($contact->email); ?></td>

        </tr>

        <tr>

            <th>Salaire:</th>
            <td>$ <?php echo e($contact->salaire); ?></td>

        </tr>

    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\gestion-contacte\resources\views/contact/show.blade.php ENDPATH**/ ?>