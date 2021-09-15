<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e(env('APP_NAME')); ?> | Login</title>

    <link href="<?php echo e(asset('/')); ?>theme/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>theme/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo e(asset('/theme/inspinia/css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/theme/inspinia/css/style.css')); ?>" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="passwordBox animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <div class="ibox-content">

                    <h2 class="font-bold">Set semula katalaluan</h2>

                    <div class="row">

                        <div class="col-lg-12">
                            <form class="m-t" role="form" action="<?php echo e(route('password.update')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Emel" required="">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Katalaluan" required="" name="katalaluan">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Pengesahan Katalaluan" required="" name="password_confirmation">
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">Simpan</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <small><?php echo e(config('iexpert.app_copyright')); ?> </small>
            </div>
            <div class="col-md-6 text-right">
               <small>&reg; <?php echo e(date('Y')); ?></small>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\laragon\www\i-expert\resources\views/authentication/reset-password.blade.php ENDPATH**/ ?>