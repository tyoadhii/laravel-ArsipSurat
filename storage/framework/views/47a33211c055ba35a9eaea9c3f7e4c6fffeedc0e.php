<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="#"><h3>Sistem Informasi Pengarsipan Dokumen</h3></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item <?php echo e(Request::segment(1) === 'surat' || Request::segment(2) === 'surat' ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('surat.index')); ?>" class='sidebar-link'>
                        <i class="bi bi-star-fill"></i>
                        <span>Arsip</span>
                    </a>
                </li>

                <li class="sidebar-item <?php echo e(Request::segment(1) === 'about' ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('about.index')); ?>" class='sidebar-link'>
                        <i class="bi bi-exclamation-circle-fill"></i>
                        <span>Info</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel-ArsipSurat\resources\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>