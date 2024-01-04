<?php 
include 'header.php';
?>
    <div class="card w-50 my-2 m-auto">
        <div class="card-header" style="text-align:center">
            Student Application Status
        </div>
        <form action="#" method="get" class="m-2">
        <div class="form-group row my-2">
            <label for="usn" class="col-sm-4 col-form-label">Student USN : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="usn" id="usn" placeholder="Enter USN" required>
            </div>
        </div>
        <div class="form-group row my-2">
            <label for="dob" class="col-sm-4 col-form-label">Student DOB : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="date" class="form-control" name="dob" id="dob" required>
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-success" name="submit" value="submit" style="float:right">Check Status</button>
        </div>

        </div>
<?php
include 'footer.php';
?>