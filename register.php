<?php 
include 'header.php';
?>
    <div class="card w-50 my-2 m-auto">
        <div class="card-header" style="text-align:center">
            Student Register
        </div>
        <form action="#" method="get" class="m-2">
        <div class="form-group row my-2">
            <label for="usn" class="col-sm-4 col-form-label">Student USN : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="usn" id="usn" required>
            </div>
        </div>
        <div class="form-group row my-2">
            <label for="sname" class="col-sm-4 col-form-label">Student Name : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="sname" id="sname" required>
            </div>
        </div>

            <div class="my-3">
            * Further Entries
            </div>
        

        <div>
            <button type="reset" class="btn btn-danger" name="cancel" value="cancel" onclick="window.location.href='index.php'">Cancel</button>
            <button type="reset" class="btn btn-warning" name="reset" value="reset">Reset</button>
            <button type="submit" class="btn btn-success" name="submit" value="submit" style="float:right">Submit</button>
        </div>

        </div>
<?php
include 'footer.php';
?>