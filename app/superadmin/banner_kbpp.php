<?php
include("../../conf/config.php");
$query = mysqli_query($koneksi,"SELECT count(id)AS jmlkbpp FROM tabel_kbpp");
$view = mysqli_fetch_array($query);?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p>Ibu Hamil</p>
              </div>
              <div class="icon">
                <i class=""></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $view['jmlkbpp']; ?><sup style="font-size: 20px"></sup></h3>

                <p>Data KBPP</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>