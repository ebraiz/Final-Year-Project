<div class="container">
  <!-- Modal -->
      <div class="modal fade" id="obtmarks" role="dialog">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background:url('images/formbackground.jpg')">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 style='font-family:verdana;font-size:25;text-align:center;font-weight:bold;color:black'>Submit Marks</h4>
                </div>

                <div class="modal-body" style="background:url('images/formbackground.jpg')">

                  <div  class="row">  
                    <div class="col-sm-12">
                      <form data-toggle="validator" class="form-horizontal" method="post" action="">
                        
                        <div class="form-group">
                          <label class="control-label col-sm-4" for="s_name">Obtained Marks:</label>
                            <div class="col-sm-6">          
                              <input type="number" class="form-control input-sm" name="obt_marks" maxlength="3" data-error="You cant leave this empty or invalid" placeholder="25" required>
                              <input type="hidden" id="uniqid" name="uniqid" value="">
                              <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">        
                          <div class="col-sm-offset-5">
                            <button type="submit" name="submit-obtmarks" class="btn btn-success btn-lg" style="width:30%"><subtitle>Submit</subtitle></button>
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
        if(isset($_POST['submit-obtmarks'])){
            include_once ("includes/db.php");       
                  
            $assignid = mysql_real_escape_string($_POST['uniqid']);
            $obt_marks = mysql_real_escape_string($_POST['obt_marks']);
            
            $que="UPDATE sassignment SET obt_marks='$obt_marks' WHERE sa_id='$assignid';";
          
            if(mysql_query($que)){
              echo "<script>swal('Congratulations! Obtained Marks Submitted Successfully!')</script>";  
            }
            else {
              echo "<script>swal('Sorry Unable To Submit Marks')</script>";    
            }
    }
?>