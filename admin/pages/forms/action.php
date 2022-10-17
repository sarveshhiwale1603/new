<?php
include("include.php");
?>
<?php
//ticket comment
if(isset($_POST['dnkk'])){
    $id=$_POST['dnkk'];
    $query=mysqli_query($conn,"select * from appointment where id='$id'");
    $row=mysqli_fetch_array($query);
	
	echo '   
    
    <div class="row">
    <div class="col-md-12">
      <label for="">Patient Name:</label>
      <label for="">'.$row['name'].'</label>
    </div>
<input type="hidden" value="'.$row['id'].'" name="id">

  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">Phone Number:</label>
      <label for="">'.$row['phone'].'</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">Branch:</label>
      <label for="">'.$row['branch'].'</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">Message:</label>
      <label for="">'.$row['message'].'</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">Date:</label>
      <label for="">'.$row['date'].'</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">Time</label>
      <label for="">'.$row['time'].'</label>
    </div>
  </div>

  <div class="row">

    <div class="col-md-12">
      <label>Status</label>
      <span class="select2-selection__arrow" role="presentation">
        <select class="form-control select2 select2-hidden-accessible" value="'.$row['status'].'style="width: 100%;" data-select2-id="1"
          tabindex="-1" aria-hidden="true" name="status">
          <option selected="selected" data-select2-id="3">Select</option>
          <option value="Came">Came</option>
          <option value="In Progress">In Progress</option>
          <option value="dont call">Don&#39;t call</option>

        </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">Last Remark</label>
      <textarea class="form-control" value="'.$row['remark'].'"name="remark" id="">'.$row['remark'].'</textarea>
    </div>
  </div>

</div>';
}



if(isset($_POST['car'])){
    $id=$_POST['car'];
    $query=mysqli_query($conn,"select * from carrers where id='$id'");
    $row=mysqli_fetch_array($query);
	
	echo '   
    
    <div class="row">
    <div class="col-md-12">
      <label for="">Applicant Name:</label>
      <label for="">'.$row['name'].'</label>
    </div>
<input type="hidden" value="'.$row['id'].'" name="id">

  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="">Email:</label>
    <label for="">'.$row['email'].'</label>
  </div>
</div>
  <div class="row">
    <div class="col-md-12">
      <label for="">Phone Number:</label>
      <label for="">'.$row['phone'].'</label>
    </div>
  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="">Mesage:</label>
    <label for="">'.$row['message'].'</label>
  </div>
</div>


  <div class="row">

    <div class="col-md-12">
      <label>Status</label>
      <span class="select2-selection__arrow" role="presentation">
        <select class="form-control select2 select2-hidden-accessible" value="'.$row['status'].'style="width: 100%;" data-select2-id="1"
          tabindex="-1" aria-hidden="true" name="status">
          <option selected="selected" data-select2-id="3">Select</option>
          <option value="Came">Came</option>
          <option value="In Progress">In Progress</option>
          <option value="dont call">Don&#39;t call</option>

        </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">Last Remark</label>
      <textarea class="form-control" value="'.$row['remark'].'"name="remark" id="">'.$row['remark'].'</textarea>
    </div>
  </div>

</div>';
}


if(isset($_POST['con'])){
    $id=$_POST['con'];
    $query=mysqli_query($conn,"select * from contactus where id='$id'");
    $row=mysqli_fetch_array($query);
	
	echo '   
    
    <div class="row">
    <div class="col-md-12">
      <label for="">First Name:</label>
      <label for="">'.$row['first_name'].'</label>
    </div>
    <div class="col-md-12">
    <label for="">Last Name:</label>
    <label for="">'.$row['last_name'].'</label>
  </div>
<input type="hidden" value="'.$row['id'].'" name="id">

  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="">Email:</label>
    <label for="">'.$row['email'].'</label>
  </div>
</div>
  <div class="row">
    <div class="col-md-12">
      <label for="">Phone Number:</label>
      <label for="">'.$row['phone'].'</label>
    </div>
  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="">Mesage:</label>
    <label for="">'.$row['message'].'</label>
  </div>
</div>


  <div class="row">

    <div class="col-md-12">
      <label>Status</label>
      <span class="select2-selection__arrow" role="presentation">
        <select class="form-control select2 select2-hidden-accessible" value="'.$row['status'].'style="width: 100%;" data-select2-id="1"
          tabindex="-1" aria-hidden="true" name="status">
          <option selected="selected" data-select2-id="3">Select</option>
          <option value="Came">Came</option>
          <option value="In Progress">In Progress</option>
          <option value="dont call">Don&#39;t call</option>

        </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">Last Remark</label>
      <textarea class="form-control" value="'.$row['remark'].'"name="remark" id="">'.$row['remark'].'</textarea>
    </div>
  </div>

</div>';
}

if(isset($_POST['call'])){
    $id=$_POST['call'];
    $query=mysqli_query($conn,"select * from call_back where id='$id'");
    $row=mysqli_fetch_array($query);
	
	echo '   
    
    <div class="row">
    <div class="col-md-12">
      <label for="">Phone Number:</label>
      <label for="">'.$row['phone'].'</label>
      <input type="hidden" value="'.$row['id'].'" name="id">
      </div>
</div>


  <div class="row">

    <div class="col-md-12">
      <label>Status</label>
      <span class="select2-selection__arrow" role="presentation">
        <select class="form-control select2 select2-hidden-accessible" value="'.$row['status'].'style="width: 100%;" data-select2-id="1"
          tabindex="-1" aria-hidden="true" name="status">
          <option selected="selected" data-select2-id="3">Select</option>
          <option value="Came">Came</option>
          <option value="In Progress">In Progress</option>
          <option value="dont call">Don&#39;t call</option>
        </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">Last Remark</label>
      <textarea class="form-control" value="'.$row['remark'].'"name="remark" id="">'.$row['remark'].'</textarea>
    </div>
  </div>

</div>';
}
?>
