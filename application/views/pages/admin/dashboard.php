<section class="content">
      <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    	<h3 class="card-title">Dashboard</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-3">

                                <div class="small-box bg-outline-success" style="background-color: #4dff4d;height:160px;">

                                    <div class="inner">

                                        <h3>6</h3>



                                        <a href=" <?= base_url('home/adduser') ?>">
                                            <p style="color: #262673; font-weight: bold;">Total Menu</p>
                                        </a>

                                    </div>

                                    <div class="icon">

                                        <i class="fas fa-users" aria-hidden="true"></i>

                                    </div>

                                </div>

                            </div>
                            <div class="col-md-3">

                                <div class="small-box bg-outline-success" style="background-color: #ff531a;height:160px;">

                                    <div class="inner">

                                        <h3>5</h3>



                                        <a href=" <?= base_url('home/enquarylist') ?>">
                                            <p style="color: #262673; font-weight: bold;">Total Today News</p>
                                        </a>

                                    </div>

                                    <div class="icon">

                                        <i class="fas fa-users" aria-hidden="true"></i>

                                    </div>

                                </div>

                            </div>
                            <div class="col-md-3">

                                <div class="small-box bg-outline-success" style="background-color: #00ffff;height:160px;">

                                    <div class="inner">

                                        <h3><?php echo count($total_news) ;?></h3>



                                        <a href=" <?= base_url('home/followup') ?>">
                                            <p style="color: #262673; font-weight: bold;">Total News</p>
                                        </a>

                                    </div>

                                    <div class="icon">

                                        <i class="fa fa-check-circle" aria-hidden="true"></i>

                                    </div>

                                </div>

                            </div>
                            <div class="col-md-3">

                                <div class="small-box bg-outline-success" style="background-color: #a64dff;height:160px;">

                                    <div class="inner">

                                        <h3><?php echo count($reporters); ?></h3>



                                        <a href=" <?= base_url('home/customerlist') ?>">
                                            <p style="color: #262673; font-weight: bold;">Reporters</p>
                                        </a>

                                    </div>

                                    <div class="icon">

                                        <i class="fa fa-check-circle" aria-hidden="true"></i>

                                    </div>

                                </div>

                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>