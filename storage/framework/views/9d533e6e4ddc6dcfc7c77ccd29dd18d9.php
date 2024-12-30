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
<?php $component->withAttributes([]); ?>About <?php echo $__env->renderComponent(); ?>
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
        <div class="py-3">
            <div class="d-flex align-items-start">
                <div class="flex-shrink-0">
                    <i class="ti ti-hash text-hash align-text-top me-2"></i>
                </div>
                <div>
                    <h6 class="form-title mb-3">Copyright</h6>
                    <p>© 2024 - <a href="https://pustakakoding.com/" target="_blank" class="text-brand fw-semibold text-decoration-none">Pustaka Koding</a> - Indra Styawantoro. All rights reserved.</p>
                </div>
            </div>
        </div>

        <div class="py-3">
            <div class="d-flex align-items-start">
                <div class="flex-shrink-0">
                    <i class="ti ti-hash text-hash align-text-top me-2"></i>
                </div>
                <div>
                    <h4 class="form-title mb-3">Permissions</h4>
                    <p><i class="ti ti-circle text-brand me-2"></i> Private use</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> Modification</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> Distribution</p>
                </div>
            </div>
        </div>

        <div class="py-3">
            <div class="d-flex align-items-start">
                <div class="flex-shrink-0">
                    <i class="ti ti-hash text-hash align-text-top me-2"></i>
                </div>
                <div>
                    <h4 class="form-title mb-3">Limitations</h4>
                    <p><i class="ti ti-circle text-brand me-2"></i> Commercial use</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> Liability</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> Warranty</p>
                </div>
            </div>
        </div>

        <div class="py-3">
            <div class="d-flex align-items-start">
                <div class="flex-shrink-0">
                    <i class="ti ti-hash text-hash align-text-top me-2"></i>
                </div>
                <div>
                    <h4 class="form-title mb-3">Requirements</h4>
                    <p><i class="ti ti-circle text-brand me-2"></i> Framework Laravel 11</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> PHP 8.3.<small>x</small></p>
                    <p><i class="ti ti-circle text-brand me-2"></i> MySQL 8.0.<small>x</small></p>
                    <p><i class="ti ti-circle text-brand me-2"></i> Bootstrap 5.3.<small>x</small></p>
                    <p><i class="ti ti-circle text-brand me-2"></i> jQuery v3.7.1</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> Tabler Icons 3.6.0</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> flatpickr v4.6.13</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> Select2 4.1.0</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> jQuery Mask Plugin v1.14.16</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> SweetAlert2</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> Bootstrap Notify v3.1.3</p>
                    <p><i class="ti ti-circle text-brand me-2"></i> laravel-dompdf v2.2.0</p>
                </div>
            </div>
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
<?php endif; ?><?php /**PATH C:\laragon\www\aplikasi-pos-apotek\resources\views/about/index.blade.php ENDPATH**/ ?>