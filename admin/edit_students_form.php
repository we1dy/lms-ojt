   <div class="row-fluid">
       <a href="employees.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add employee</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add employee</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysqli_query($conn,"select * from employee LEFT JOIN class ON class.class_id = employee.class_id where employee_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="cys" class="" required>
                                             	<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from class order by class_name");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="un" value="<?php echo $row['username']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn"  value="<?php echo $row['firstname']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln"  value="<?php echo $row['lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
		
	      <?php
                            if (isset($_POST['update'])) {
                               
                                $un = $_POST['un'];
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                                $cys = $_POST['cys'];
                      

								mysqli_query($conn,"update employee set username = '$un' , firstname ='$fn' , lastname = '$ln' , class_id = '$cys' where employee_id = '$get_id' ")or die(mysqli_error());

								?>
 
								<script>
								window.location = "employees.php"; 
								</script>

                       <?php     }  ?>
	