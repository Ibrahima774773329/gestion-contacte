


<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-11">

            <h2>Gestion de Tache</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="<?php echo e(url('contact/create')); ?>">Ajouter</a>
        </div>

    </div>



    <?php if($message = Session::get('success')): ?>

        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>

    <?php endif; ?>



    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Nom Complet</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Salaire</th>
            <th>Actions</th>

        </tr>

        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($index); ?></td>
                <td><?php echo e($contact->nomComplet); ?></td>
                <td><?php echo e($contact->email); ?></td>
                <td><?php echo e($contact->telephone); ?></td>
                <td><?php echo e($contact->salaire); ?></td>
                <td>

                    <form action="<?php echo e(url('contact/'. $contact->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <a class="btn btn-info" href="<?php echo e(url('contact/'. $contact->id)); ?>">Voir</a>
                        <a class="btn btn-primary" href="<?php echo e(url('contact/'. $contact->id .'/edit')); ?>">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\gestion-contacte\resources\views/contact/index.blade.php ENDPATH**/ ?>