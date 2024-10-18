<?php $__env->startSection('content'); ?>
    <div class="container">
        <a class="btn btn-primary" href="<?php echo e(route('pokemon.create')); ?>">New Pokemon</a>
        <main>
            <table class="table table-striped">
                <thead>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Species</th>
                    <th>Primary Type</th>
                    <th>Actions</th>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($pokemon->id); ?></td>
                            <td><?php echo e($pokemon->name); ?></td>
                            <td><?php echo e($pokemon->species); ?></td>
                            <td><?php echo e($pokemon->primary_type); ?></td>
                            <td>
                                <a href="<?php echo e(route('pokemon.show', $pokemon->id)); ?>" class="btn btn-info">View</a>
                                <a href="<?php echo e(route('pokemon.edit', $pokemon->id)); ?>" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('pokemon.destroy', $pokemon->id)); ?>" method="POST"
                                    style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($pokemons->links()); ?>

        </main>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uts-pokedex-2022130011\resources\views/pokemon/index.blade.php ENDPATH**/ ?>