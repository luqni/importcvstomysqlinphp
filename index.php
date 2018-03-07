<!DOCTYPE html>
<html>
<head>
	<title>Migrasi SIAK</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
	function get_all_records(){
	    $con = getdb();
	    $Sql = "SELECT * FROM employeeinfo";
	    $result = mysqli_query($con, $Sql);  


	    if (mysqli_num_rows($result) > 0) {
	     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
	             <thead><tr><th>EMP ID</th>
	                          <th>First Name</th>
	                          <th>Last Name</th>
	                          <th>Email</th>
	                          <th>Registration Date</th>
	                        </tr></thead><tbody>";


		    while($row = mysqli_fetch_assoc($result))
			    {

			         echo "<tr><td>" . $row['emp_id']."</td>
			                   <td>" . $row['firstname']."</td>
			                   <td>" . $row['lastname']."</td>
			                   <td>" . $row['email']."</td>
			                   <td>" . $row['reg_date']."</td></tr>";        
			    }
    
    	echo "</tbody></table></div>";
     
		} else {
     	echo "you have no records";
		}
	}
?>	 
	<div id="wrap">
        <div class="container">
            <div class="row">
 
                <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
 
                        <!-- Form Name -->
                        <legend>Form Name</legend>
 
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
 
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
 
                    </fieldset>
                </form>
 
            </div>
            <?php
               get_all_records();
            ?>
        </div>
    </div>
     <div>
            <form class="form-horizontal" action="functions.php" method="post" name="upload_excel"   
                      enctype="multipart/form-data">
                  <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                            </div>
                   </div>                    
            </form>           
 </div>
</body>
</html>