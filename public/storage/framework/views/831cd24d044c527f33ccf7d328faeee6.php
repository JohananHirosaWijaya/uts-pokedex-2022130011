

<?php $__env->startSection('content'); ?>
    <div class="container">
        <main>
            <div class="row">
                <div class="col-6">
                    <img src="<?php echo e(Storage::url($pokemon->photo)); ?>" class="img-fluid">
                </div>
                <div class="col-6">
                    <h2><?php echo e($pokemon->name); ?></h2>
                    <p>Species: <?php echo e($pokemon->species); ?></p>
                    <p>Primary Type: <?php echo e($pokemon->primary_type); ?></p>
                    <p>Weight: <?php echo e($pokemon->weight); ?> kg</p>
                    <p>Height: <?php echo e($pokemon->height); ?> m</p>
                    <p>HP: <?php echo e($pokemon->hp); ?></p>
                    <p>Attack: <?php echo e($pokemon->attack); ?></p>
                    <p>Defense: <?php echo e($pokemon->defense); ?></p>
                    <p>Legendary: <?php echo e($pokemon->is_legendary ? 'Yes' : 'No'); ?></p>
                </div>
            </div>

            <div class="mt-4">
                <a href="<?php echo e(route('pokemon.edit', $pokemon)); ?>" class="btn btn-warning">Edit</a>

                <form action="<?php echo e(route('pokemon.destroy', $pokemon)); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger">Delete</button>
                </form>
                <a href="<?php echo e(route('pokemon.index')); ?>">Back to Pokedex</a>
            </div>
        </main>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uts-pokedex-2022130031\resources\views/pokemon/show.blade.php ENDPATH**/ ?>