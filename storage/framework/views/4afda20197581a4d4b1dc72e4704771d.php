<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal8b54caccbdedc8030792c13949386bbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b54caccbdedc8030792c13949386bbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Dashboard <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8b54caccbdedc8030792c13949386bbd)): ?>
<?php $attributes = $__attributesOriginal8b54caccbdedc8030792c13949386bbd; ?>
<?php unset($__attributesOriginal8b54caccbdedc8030792c13949386bbd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8b54caccbdedc8030792c13949386bbd)): ?>
<?php $component = $__componentOriginal8b54caccbdedc8030792c13949386bbd; ?>
<?php unset($__componentOriginal8b54caccbdedc8030792c13949386bbd); ?>
<?php endif; ?>

    <div class="bg-white rounded-2 shadow-sm p-4 mb-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-3">
                <img src="<?php echo e(asset('images/logoRsUmmi.png')); ?>" class="img-fluid opacity-85" style="width: 200px; height: 200px;" alt="images" loading="lazy">
            </div>
            <div class="col-lg-9">
                <h4 class="text-primary mb-2">
                    Selamat datang di <span class="fw-semibold">Apotek RS Ummi</span>!
                </h4>
                <p class="lead-dashboard mb-4">Kami siap melayani kebutuhan kesehatan Anda dengan berbagai obat-obatan berkualitas dan layanan yang ramah. Percayakan kesehatan Anda kepada kami, dan kami akan selalu berusaha memberikan pelayanan terbaik untuk Anda dan keluarga.</p>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6 col-xl-3">
            <div class="bg-white rounded-2 shadow-sm p-4 mb-4">
                <div class="d-flex align-items-center justify-content-start">
                    <div class="me-4">
                        <i class="ti ti-category fs-1 bg-primary-2 text-white rounded-2 p-2"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-1">Categories</p>
                        <h5 class="fw-bold mb-0"><?php echo e($totalCategory); ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3">
            <div class="bg-white rounded-2 shadow-sm p-4 p-lg-4-2 mb-4">
                <div class="d-flex align-items-center justify-content-start">
                    <div class="me-4">
                        <i class="ti ti-copy fs-1 bg-success text-white rounded-2 p-2"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-1">Products</p>
                        <h5 class="fw-bold mb-0"><?php echo e($totalProduct); ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3">
            <div class="bg-white rounded-2 shadow-sm p-4 p-lg-4-2 mb-4">
                <div class="d-flex align-items-center justify-content-start">
                    <div class="text-muted me-4">
                        <i class="ti ti-users fs-1 bg-warning text-white rounded-2 p-2"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-1">Customers</p>
                        <h5 class="fw-bold mb-0"><?php echo e($totalCustomer); ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3">
            <div class="bg-white rounded-2 shadow-sm p-4 p-lg-4-2 mb-4">
                <div class="d-flex align-items-center justify-content-start">
                    <div class="text-muted me-4">
                        <i class="ti ti-folders fs-1 bg-info text-white rounded-2 p-2"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-1">Transactions</p>
                        <h5 class="fw-bold mb-0"><?php echo e($totalTransaction); ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2 shadow-sm pt-4 px-4 pb-3 mb-5">
        <h6 class="mb-0">
            <i class="ti ti-folder-star fs-5 align-text-top me-1"></i> 
            5 Best selling products.
        </h6>

        <hr class="mb-4">

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" style="width:100%">
                <thead>
                    <th class="text-center">Image</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Sold</th>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td width="50" class="text-center">
                            <img src="<?php echo e(asset('/storage/products/'.$transaction->product->image)); ?>" class="img-thumbnail rounded-4" width="80" alt="Images">
                        </td>
                        <td width="200"><?php echo e($transaction->product->name); ?></td>
                        <td width="100" class="text-end"><?php echo e('Rp ' . number_format($transaction->product->price, 0, '', '.')); ?></td>
                        <td width="80" class="text-center"><?php echo e($transaction->transactions_sum_qty); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="ti ti-info-circle fs-5 me-2"></i>
                                <div>No data available.</div>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\aplikasi-apotek-rs-ummi-bogor\resources\views/dashboard/index.blade.php ENDPATH**/ ?>