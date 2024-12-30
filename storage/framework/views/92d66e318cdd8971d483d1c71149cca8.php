

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi POS Apotek dengan Laravel 11">
    <meta name="author" content="Indra Styawantoro">

    
    <title>Aplikasi POS Apotek dengan Laravel 11</title>

    
    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>" type="image/x-icon">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.css" rel="stylesheet">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100">
    
    <header>
        
        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    
    <main class="flex-shrink-0">
        <div class="container">
            <div class="page-content">
                
                <?php echo e($slot); ?>

            </div>
        </div>
    </main>

    
    <footer class="footer bg-white shadow mt-auto py-3">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center align-items-md-left">
                
                <div class="copyright text-center mb-2 mb-md-0">
                    &copy; 2024 - <a href="https://pustakakoding.com/" target="_blank" class="fw-semibold">Pustaka Koding</a>. All rights reserved.
                </div>
                
                <div class="link ms-md-auto">
                    <a href="https://pustakakoding.com/" target="_blank">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.js"></script>
    <!-- Select2 JS -->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- jQuery Mask Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-notify@3.1.3/bootstrap-notify.min.js"></script>

    
    <script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('js/image-preview.js')); ?>"></script>

    <script>
        // menampilkan pesan dengan sweetalert
        <?php if(session('success')): ?>
            Swal.fire({
                icon: "success",
                title: "Success!",
                text: "<?php echo e(session('success')); ?>",
                showConfirmButton: false,
                timer: 2000
            });
        <?php elseif(session('error')): ?>
            Swal.fire({
                icon: "error",
                title: "Failed!",
                text: "<?php echo e(session('error')); ?>",
                showConfirmButton: false,
                timer: 2000
            });
        <?php endif; ?>
    </script>
</body>

</html><?php /**PATH D:\laragon\www\Pustaka-Koding\Project-Laravel\Laravel-11\aplikasi-pos-apotek-laravel11\resources\views/layouts/app.blade.php ENDPATH**/ ?>