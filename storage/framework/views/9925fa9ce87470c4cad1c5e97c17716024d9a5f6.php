



<?php $__env->startSection('content'); ?>


    <h1>Modifier Tache</h1>


    <?php if($errors->any()): ?>

        <div class="alert alert-danger">

            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

        </div>

    <?php endif; ?>

    <form method="post" action="<?php echo e(url('contact/'. $contact->id)); ?>" >
        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>


        <div class="form-group mb-3">

            <label for="nomComplet">Nom:</label>
            <input type="text" class="form-control" id="nomComplet" placeholder="Entrer Nom" name="nomComplet" value="<?php echo e($contact->nomComplet); ?>">

        </div>

        <div class="form-group mb-3">

            <label for="telephone">Telephone:</label>
            <input type="text" class="form-control" id="telephone" placeholder="Entrer Telephone" name="telephone" value="<?php echo e($contact->telephone); ?>">

        </div>

        <div class="form-group mb-3">

            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Entrer Email" name="email" value="<?php echo e($contact->email); ?>">

        </div>

        <div class="form-group mb-3">

            <label for="salaire">Salaire ($):</label>
            <input type="number" class="form-control" id="salaire" placeholder="Salaire" name="salaire" value="<?php echo e($contact->salaire); ?>">

        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\gestion-contacte\resources\views/contact/edit.blade.php ENDPATH**/ ?>