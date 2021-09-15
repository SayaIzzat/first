<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e(env('APP_NAME')); ?> | Lupa Katalaluan</title>

    <link href="<?php echo e(asset('/')); ?>theme/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>theme/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo e(asset('/theme/inspinia/css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/theme/inspinia/css/style.css')); ?>" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <img src="<?php echo e(asset('/theme/inspinia/img/Jata Negara.png')); ?>" style="width:50%;">
            </div>
            <h3>Selamat Datang ke i-Expert</h3>
            <p>Portal maklumat kepakaran Pegawai Kerajaan.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Sila log masuk.</p>
            <form class="m-t" role="form" action="/verify" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="No MyKad tanpa '-'" required="" name="mykad">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Katalaluan" required="" name="katalaluan">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Log Masuk</button>

                <a href="<?php echo e(route('forgot-password')); ?>"><small>Lupa katalaluan?</small></a>
                <p class="text-muted text-center"><small>Tiada akaun?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Daftar akaun baru</a>
            </form>
            <p class="m-t pb-5"> <small><?php echo e(config('iexpert.app_copyright')); ?> &reg; 2021</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="theme/inspinia/js/jquery-3.1.1.min.js"></script>
    <script src="theme/inspinia/js/popper.min.js"></script>
    <script src="theme/inspinia/js/bootstrap.js"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\i-expert\resources\views/authentication/login_page.blade.php ENDPATH**/ ?>