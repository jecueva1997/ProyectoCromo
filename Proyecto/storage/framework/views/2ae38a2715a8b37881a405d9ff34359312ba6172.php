

<?php $__env->startSection('content'); ?>
<section class="tematicas">
    <section class="sectionTitulo">
        <h1>Temáticas</h1>
    </section>
    <section class="articulos">
        <?php $__currentLoopData = $tematicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tematica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('juego.edit', $tematica->id)); ?>" class="navTematicas">
                <article class="articulosTematica">
                    <img src="<?php echo e(asset('storage').'/'.$tematica->imgTematica); ?>" width="342px" height="172px" alt="tematica">
                    <h5 class="nombreTematica"><?php echo e($tematica->nombretematica); ?></h5>
                    <h6 class="h6Parte1">Album:</h6>
                    <h6 class="h6Parte2"><?php echo e($tematica->nombreAlbum); ?></h6>
                </article>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\ProyectoCromos\Proyect\resources\views/usuario/juego.blade.php ENDPATH**/ ?>