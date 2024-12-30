<div class="d-flex flex-column flex-lg-row mb-2">
    
    <div class="flex-grow-1">
        <h5 class="page-title"><?php echo e($slot); ?></h5>
    </div>
    
    <div class="pt-lg-1">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://pustakakoding.com/" class="text-breadcrumb text-decoration-none">
                        <i class="ti ti-home fs-6"></i>
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <?php echo e($slot); ?>

                </li>
            </ol>
        </nav>
    </div>
</div><?php /**PATH D:\laragon\www\Pustaka-Koding\Project-Laravel\Laravel-11\aplikasi-pos-apotek-laravel11\resources\views/components/page-title.blade.php ENDPATH**/ ?>