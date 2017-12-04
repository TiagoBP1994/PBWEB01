<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Welcome!</h3>
                </div>
                    <div class="panel-body">
                    <p>You were succesfully Logged-in</p>
                </div>
            </div>
            <div class="panel panel-default">
                
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                    </br>
                    
                    <?php
                    use App\job;
                    $json = file_get_contents('http://epico.dk/umbraco/surface/home/AllAdvertising');
                    $data = json_decode($json,false); // false gives object / true associative array
                    
                    foreach ($data as $data){
                        $jb = new job($data);
                        print_r ($jb->Id. '</br>');
                        print_r ($jb->Description. '</br>');
                        print_r ($jb->HeadLine. '</br>');
                        print_r ($jb->Location. '</br>');
                        print_r ('Job Begin Date ' . date( 'Y-m-d', (filter_var($jb->JobBeginDate, FILTER_SANITIZE_NUMBER_INT) / 1000)) . '</br>');
                        print_r ('Application deadline ' . date( 'Y-m-d', (filter_var($jb->Applicationdeadline, FILTER_SANITIZE_NUMBER_INT) / 1000)) . '</br>');
                        print_r ($jb->Duration. '</br>');
                        print_r ($jb->Country. '</br>');
                        print_r ($jb->ExternalAdIsPublished. '</br>');
                        print_r ($jb->AdvertisingType. '</br>');
                        print_r ($jb->SearchEmail. '</br>');
                        print_r ($jb->Footer. '</br>');     
                        print_r('</br>' . 'END OF JOB ' . $jb->Id . '</br>'. '</br>'. '</br>'); 
                    }
                    ?>
                    
                    <!--<div class="panel-heading">
                        Change your employment status.
                        <input type="checkbox" name="employment_status"/> Employed
                        <input type="checkbox" name="employment_status"/> Unemployed
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>