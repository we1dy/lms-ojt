			
						
						<ul	 id="da-thumbs" class="da-thumbs">
										<?php $query = mysqli_query($conn,"select * from admin_class
										LEFT JOIN class ON class.class_id = admin_class.class_id
										LEFT JOIN course ON course.course_id = admin_class.course_id
										where admin_id = '$session_id' and school_year = '$school_year' ")or die(mysqli_error());
										$count = mysqli_num_rows($query);
										
										if ($count > 0){
										while($row = mysqli_fetch_array($query)){
										$id = $row['admin_class_id'];
				
										?>
											<li id="del<?php echo $id; ?>">
												<a href="my_employees.php<?php echo '?id='.$id; ?>">
														<img src ="<?php echo $row['thumbnails'] ?>" width="124" height="140" class="img-polaroid" alt="">
													<div>
													<span><p><?php echo $row['class_name']; ?></p></span>
													</div>
												</a>
												<p class="class"><?php echo $row['class_name']; ?></p>
												<p class="course"><?php echo $row['course_code']; ?></p>
												<a href="#<?php echo $id; ?>" data-toggle="modal"><i class="icon-trash"></i> Remove</a>	
											
											</li>
										<?php include("delete_class_modal.php"); ?>
									<?php } }else{ ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i> No Class Currently Added</div>
									<?php  } ?>
									</ul>