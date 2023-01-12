<h1>Welcome to <?php echo $_settings->info('name') ?></h1>
<hr class="border-info">
<?php
function duration($dur = 0){
    if($dur == 0){
        return "00:00";
    }
    $hours = floor($dur / (60 * 60));
    $min = floor($dur / (60)) - ($hours*60);
    $dur = sprintf("%'.02d",$hours).":".sprintf("%'.02d",$min);
    return $dur;
}
?>
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-tasks"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">New Projects</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `project_list` where delete_flag=0 and `status` = 0 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
   
</div>
<hr>
