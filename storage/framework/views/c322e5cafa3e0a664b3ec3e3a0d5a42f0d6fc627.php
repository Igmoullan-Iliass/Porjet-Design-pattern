<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion RV</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
           <h1>Liste des RendezVous</h1>
            <table border=1>
                <tr>
                    
                    <th>Date</th>
                    <th>Time</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
                <?php $__currentLoopData = $rvs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($rv->date); ?></td>
                    <td><?php echo e($rv->time); ?></td>
                    <td><?php echo e($rv->username); ?></td>
                    <td>
                        <a href="" class="btn btn-primary">Details</a>
                        <a href="" class="btn btn-default">Modifier</a>
                        <a href="" class="btn btn-danger">Supprimer</a>
                    </td>
                
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp5\htdocs\Porjet-Design-pattern\resources\views/index.blade.php ENDPATH**/ ?>