<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar/sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Numbers</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								$query_reg_admin = mysqli_query($conn,"select * from admin where admin_status = 'Registered' ")or die(mysqli_error());
								$count_reg_admin = mysqli_num_rows($query_reg_admin);
								?>
								
                                <!-- <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_admin; ?>"><?php echo $count_reg_admin; ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered admin</strong>

                                    </div>
                                </div> -->
								
								<?php 
								$query_admin = mysqli_query($conn,"select * from admin")or die(mysqli_error());
								$count_admin = mysqli_num_rows($query_admin);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_admin; ?>"><?php echo $count_admin ?></div>
                                    <div class="chart-bottom-heading"><strong>Admins</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_employee = mysqli_query($conn,"select * from employee where status='Registered'")or die(mysqli_error());
								$count_employee = mysqli_num_rows($query_employee);
								?>
								
                                <!-- <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_employee ?>"><?php echo $count_employee ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered employees</strong>

                                    </div>
                                </div> -->
								
								
										<?php 
								$query_employee = mysqli_query($conn,"select * from employee")or die(mysqli_error());
								$count_employee = mysqli_num_rows($query_employee);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_employee ?>"><?php echo $count_employee ?></div>
                                    <div class="chart-bottom-heading"><strong>Employee</strong>

                                    </div>
                                </div>
								
								
								
								
							
								
									<?php 
								$query_class = mysqli_query($conn,"select * from class")or die(mysqli_error());
								$count_class = mysqli_num_rows($query_class);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_class; ?>"><?php echo $count_class; ?></div>
                                    <div class="chart-bottom-heading"><strong>Department</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_file = mysqli_query($conn,"select * from files")or die(mysqli_error());
								$count_file = mysqli_num_rows($query_file);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_file; ?>"><?php echo $count_file; ?></div>
                                    <div class="chart-bottom-heading"><strong>Downloadable File</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_course = mysqli_query($conn,"select * from course")or die(mysqli_error());
								$count_course = mysqli_num_rows($query_course);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_course; ?>"><?php echo $count_course; ?></div>
                                    <div class="chart-bottom-heading"><strong>Courses</strong>

                                    </div>
                                </div>
						
						
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                
                 
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>

</html>