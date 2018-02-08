<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="sassignment" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:url('images/formbackground.jpg')">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style='font-family:verdana;font-size:25;text-align:center;font-weight:bold;color:black'>Submit Your Assignment</h4>
        </div>
        <div class="modal-body" style="background:url('images/formbackground.jpg')">

<div  class="row">  
    <div class="col-sm-12">

    <form data-toggle="validator" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        
    <!--    
    <div class="form-group">
          <label class="control-label col-sm-4" for="s_name">Student Name:</label>
          <div class="col-sm-5">          
            <input type="text" class="form-control input-sm" name="s_name" maxlength="30" data-error="You cant leave this empty or invalid" placeholder="Umair Khan" required>
          <div class="help-block with-errors"></div>
        </div></div>

    <div class="form-group">
          <label class="control-label col-sm-4" for="batch_no">Batch No:</label>
          <div class="col-sm-5">          
            <input type="text" class="form-control input-sm" name="batch_no" maxlength="2" pattern="[0-9]{1,2}" data-error="You cant leave this empty or invalid" placeholder="12" required>
          <div class="help-block with-errors"></div>
        </div></div>

        <div class="form-group">
          <label class="control-label col-sm-4" for="satitle">College No:</label>
          <div class="col-sm-5">          
            <input type="text" class="form-control input-sm" name="colno" maxlength="6" pattern="[0-9]{2,6}" data-error="You cant leave this empty or invalid" placeholder="10890" required>
          <div class="help-block with-errors"></div>
    	  </div></div>

    <div class="form-group">
          <label class="control-label col-sm-4" for="submit-to">Submitted To:</label>
        <div class="col-sm-5"> 
        <select class="form-control" name="submit-to">
          <option>Naveed Ali</option>
          <option>Changez Khan</option>
          <option>Abdul Hameed</option>
          <option>Abdul Mudassar</option>
          <option>Ali Raza</option>
        </select></div></div>

        <div class="form-group">
          <label class="control-label col-sm-4" for="subject">Subject Name:</label>
          <div class="col-sm-5"> 
            <select class="form-control" name="subject">
                <option>Compiler Contruction</option>
                <option>Algorithms</option>
                <option>Database</option>
                <option>Computer Graphics</option>
                <option>Data Communication</option>
                <option>Network Strategies</option>
                <option>Tele Communication</option>
                <option>Programming</option>
                <option>Natural Language Processing</option>
                <option>Datawarehouse</option>
                <option>Physics</option>
            </select>
          </div>
        </div>

       

        <div class="form-group">
          <label class="control-label col-sm-4" for="sadesc">Student Assignment Description:</label>
          <div class="col-sm-5">          
            <textarea class="form-control input-sm" name="sadesc" rows="10" maxlength="1000" data-error="You cant leave this empty or invalid"></textarea>
               <div class="help-block with-errors"></div>
      	  </div>
        </div>
 -->
    	  <div class="form-group">
          <label class="control-label col-sm-4" for="safile">Attach File:</label>
          <div class="col-sm-5">          
            <input type="file" class="form-control input-sm" name="safile">
          </div>
        </div>

        <div class="form-group">        
              <div class="col-sm-offset-5">
                <button type="submit" name="submit-sassign" class="btn btn-success btn-lg" style="width:30%"><subtitle>Submit</subtitle></button>
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

    include ("includes/db.php");
    if(isset($_POST['submit-sassign']))
        {
          $s_name    = $_SESSION['sname'];
          $batch_no  = $_SESSION['batch_no'];
          $colno     = $_SESSION['college_no'];
          $submit_to = $_SESSION['teacher'];
          $subject   = $_SESSION['subject'];
          $atitle    = $_SESSION['title'];
          
          $file_name = $_FILES['safile']['name'];
          $tmp = $_FILES['safile']['tmp_name'];
          $org_path = "sassignment/" . $file_name;
          move_uploaded_file($tmp,$org_path);

          $que = "INSERT INTO sassignment(s_name,submit_to,subject,college_no,batch_no,atitle,file_upload) VALUES('$s_name','$submit_to','$subject','$colno','$batch_no','$atitle','$org_path')";

                if(mysql_query($que)){
                echo "<script>swal('Congratulations! You Have Submitted The Form Successfully!')</script>";
                    //exit();
                }
        }
?>