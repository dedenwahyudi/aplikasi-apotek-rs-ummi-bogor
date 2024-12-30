<nav class="navbar navbar-top fixed-top bg-primary text-white">
    <div class="container">
        <a class="d-inline navbar-brand text-white" href="#">
            <img src="<?php echo e(asset('images/logoRsUmmi.png')); ?>" alt="Logo" width="36" class="align-text-bottom me-2 bg-white rounded-circle border border-3 border-white">
            <span class="fs-4 text-uppercase">Apotek RS Ummi Kota Bogor</span>
        </a>
    </div>
</nav>

<nav class="navbar navbar-menu fixed-top navbar-expand-lg bg-light shadow-lg-sm">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => ''.e(route('dashboard')).'','active' => request()->routeIs('dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('dashboard')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('dashboard'))]); ?>
                        <i class="ti ti-home align-text-top me-1"></i> Dashboard
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => ''.e(route('categories.index')).'','active' => request()->routeIs('categories.*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('categories.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('categories.*'))]); ?>
                        <i class="ti ti-category align-text-top me-1"></i> Categories
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => ''.e(route('products.index')).'','active' => request()->routeIs('products.*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('products.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('products.*'))]); ?>
                        <i class="ti ti-copy align-text-top me-1"></i> Products
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => ''.e(route('customers.index')).'','active' => request()->routeIs('customers.*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('customers.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('customers.*'))]); ?>
                        <i class="ti ti-users align-text-top me-1"></i> Customers
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => ''.e(route('transactions.index')).'','active' => request()->routeIs('transactions.*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('transactions.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('transactions.*'))]); ?>
                        <i class="ti ti-folders align-text-top me-1"></i> Transactions
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => ''.e(route('report.index')).'','active' => request()->routeIs('report.*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('report.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('report.*'))]); ?>
                        <i class="ti ti-file-text align-text-top me-1"></i> Report
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\laragon\www\aplikasi-apotek-rs-ummi-bogor\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>