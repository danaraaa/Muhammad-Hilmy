<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/styles.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="<?php echo e(url('contoh')); ?>">Home</a></li>
            <li><a href="<?php echo e(url('produk')); ?>">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Main Content -->
        <header style="display: flex; justify-content:space-between">
            <div>
                <h1>Daftar Produk</h1>
                <p>Temukan produk terbaik untuk kebutuhan anda</p>
            </div>
            <div>
                <button class="card-button"><a class="text-decoration-none text-white" href="<?php echo e(url('produk/add')); ?>">Add Button</a></button>
            </div>
        </header>

        <!-- Product Grid -->
        <div class="product-grid">
            <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product-card">
                    <img src="<?php echo e($item->image); ?>" alt="Produk 1">
                    <h3><?php echo e($item->nama_produk); ?></h3>
                    <p class="price"><?php echo e($item->harga); ?></p>
                    <p class="description"><?php echo e($item->deskripsi); ?></p>
                    <div style="display: flex; justify-content:center">
                        <a class="btn btn-success mr-2" href="<?php echo e(url('produk/edit/' . $item->kode_produk)); ?>">Edit</a>
                        
                        
                        <form action="<?php echo e(url('produk/delete/' . $item->kode_produk)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <footer class="footer">
            <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
        </footer>
    <!-- Optional JS -->
    <!--<script src="script.js"></script>-->
</body>

</html>
<?php /**PATH C:\MERCU BUANA - Materi & Tugas\project\syadam\Pemgrograman Web Enterprise (PWE)\project_laravel\resources\views/produk.blade.php ENDPATH**/ ?>