<?php $__env->startSection('content'); ?>
    <div class="container">
        <main>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('pokemon.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-12">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="name"
                            id="name" value="<?php echo e(old('name', $pokemon->name)); ?>">
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="species">Species</label>
                        <input class="form-control <?php $__errorArgs = ['species'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" species="species"
                            id="species" value="<?php echo e(old('species', $pokemon->species)); ?>">
                    </div>

                    <div class="col-6">
                        <label class="form-label" for="primary_type">Primary Type</label>
                        <select class="form-select <?php $__errorArgs = ['primary_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="primary_type"
                            id="primary_type">
                            <option value="">Choose a type...</option>
                            <?php $__currentLoopData = ['Grass', 'Fire', 'Water', 'Bug', 'Normal', 'Poison', 'Electric', 'Ground', 'Fairy', 'Fighting', 'Psychic', 'Rock', 'Ghost', 'Ice', 'Dragon', 'Dark', 'Steel', 'Flying']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($type); ?>" <?php echo e(old('primary_type', $pokemon->primary_type) == $type ? 'selected' : ''); ?>>
                                    <?php echo e($type); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-6">
                        <label class="form-label" for="weight">Weight</label>
                        <input class="form-control <?php $__errorArgs = ['weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="weight"
                            id="weight" value="<?php echo e(old('weight', $pokemon->weight)); ?>">
                    </div>

                    <div class="col-6">
                        <label class="form-label" for="height">Height</label>
                        <input class="form-control <?php $__errorArgs = ['height'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="height"
                            id="height" value="<?php echo e(old('height', $pokemon->height)); ?>">
                    </div>

                    <div class="col-6">
                        <label class="form-label" for="hp">HP</label>
                        <input class="form-control <?php $__errorArgs = ['hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="hp"
                            id="hp" value="<?php echo e(old('hp', $pokemon->hp)); ?>">
                    </div>

                    <div class="col-6">
                        <label class="form-label" for="attack">Attack</label>
                        <input class="form-control <?php $__errorArgs = ['attack'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="attack"
                            id="attack" value="<?php echo e(old('attack', $pokemon->attack)); ?>">
                    </div>

                    <div class="col-6">
                        <label class="form-label" for="defense">Defense</label>
                        <input class="form-control <?php $__errorArgs = ['defense'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="defense"
                            id="defense" value="<?php echo e(old('defense', $pokemon->defense)); ?>">
                    </div>

                    <div class="col-6">
                        <label for="is_legendary">
                            <input class="form-check-input" type="checkbox" name="is_legendary" id="is_legendary"
                                <?php echo e(old('is_legendary', $pokemon->is_legendary) ? 'checked' : ''); ?>>
                            Is Legendary
                        </label>
                    </div>

                    <div class="col-6">
                        <label class="form-label" for="photo">Photo</label>
                        <input class="form-control <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" name="photo"
                            id="photo">
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">New Pokemon</button>
                </div>
            </form>
            <a href="<?php echo e(route('pokemon.index')); ?>" class="btn btn-info mt-3">Back Pokedex</a>
        </main>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uts-pokedex-2022130011\resources\views/pokemon/edit.blade.php ENDPATH**/ ?>