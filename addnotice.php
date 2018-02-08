<div class="container">
  <!-- Modal -->
      <div class="modal fade" id="addnotice" role="dialog">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background:url('images/formbackground.jpg')">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 style='font-family:verdana;font-size:25;text-align:center;font-weight:bold;color:black'>Publish Notices</h4>
                </div>

                <div class="modal-body" style="background:url('images/formbackground.jpg')">

                  <div  class="row">  
                    <div class="col-sm-12">
                      <form data-toggle="validator" class="form-horizontal" method="post" action="" enctype='multipart/form-data'>
                        
                        <div class="form-group">
                          <label class="control-label col-sm-4" for="title">Title</label>
                            <div class="col-sm-6">          
                              <input type="text" class="form-control input-sm" name="notice_title" data-error="You cant leave this empty or invalid" required>
                              <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-4" for="description">Description</label>
                            <div class="col-sm-6">          
                              <textarea class="form-control" rows="5" name="notice_description" data-error="You cant leave this empty or invalid"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                         <div class="form-group">
                         <label class="control-label col-sm-4" for="image">Add Image</label>
                            <div class="col-sm-6">
                              <input type="file" class="form-control input-sm" name="image">
                            </div>
                          </div>

                        <div class="form-group">        
                          <div class="col-sm-offset-5">
                            <button type="submit" name="add-notice" class="btn btn-success btn-sm" style="width:30%"><subtitle>Submit</subtitle></button>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>  

                  <div class="modal-footer" style="background:url('images/formbackground.jpg')">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
          </div>
        </div>
    </div>
</div>

<?php
        //$postid = mysql_escape_string(@$_GET['view_sassign']);
        include ("includes/db.php");
        if(isset($_POST['add-notice'])){
            $n_title = mysql_real_escape_string($_POST['notice_title']);
            $n_description = mysql_real_escape_string($_POST['notice_description']);
            $img_name   = $_FILES['image']['name'];
            $tmp    = $_FILES['image']['tmp_name'];
            $org_path   = "images/" . $img_name;
            move_uploaded_file($tmp,$org_path);
            
            $que="INSERT INTO notice_board (title,description,image) VALUES ('$n_title','$n_description','$org_path')";

        if(mysql_query($que)){
              echo "<script>swal('Congratulations! Notice has been Published Successfully!')</script>";  
            }else{
              echo "<script>swal('Unable To Published Notice!')</script>"; 
            }
    }
?>