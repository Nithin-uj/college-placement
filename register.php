<?php 
include 'header.php';
?>
    <div class="card w-50 my-2 m-auto">
        <div class="card-header" style="text-align:center">
            Student Register
        </div>
        <form action="cregister.php" method="post" class="m-2">
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
        <div class="form-group row my-2">
            <label for="sdob" class="col-sm-4 col-form-label">Student DOB : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="date" class="form-control" name="sdob" id="sdob" required>
            </div>
        </div>
        <div class="form-group row my-2">
            <label for="sbranch" class="col-sm-4 col-form-label">Student Branch : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <select class="form-control" name="sbranch" id="sbranch" required>
                <option>-- select --</option>
                <option>AIML</option>
                <option>CSE</option>
                <option>CV</option>
                <option>ECE</option>
                <option>EEE</option>
                <option>ISE</option>
                <option>ME</option>
            </select>
            </div>
        </div>
        <div class="form-group row my-2">
            <label for="syear" class="col-sm-4 col-form-label">Year : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <select class="form-control" name="syear" id="syear" required>
                <option>-- select --</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            </div>
        </div>
        <div class="form-group row my-2">
            <label for="ssem" class="col-sm-4 col-form-label">Semester : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <select class="form-control" name="ssem" id="ssem" required>
                <option>-- select --</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
            </select>
            </div>
        </div>
        <div class="form-group row my-2">
            <label for="ssec" class="col-sm-4 col-form-label">Section : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <select class="form-control" name="ssec" id="ssec" required>
                <option>-- select --</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
            </select>
            </div>
        </div>
        <div class="form-group row my-2">
            <label for="sphno" class="col-sm-4 col-form-label">Student Phone no. : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="number" class="form-control" name="sphno" id="sphno" required>
            </div>
        </div>
        <div class="form-group row my-2">
            <label for="scgpa" class="col-sm-4 col-form-label">Current CGPA : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="decimal" class="form-control" name="scgpa" id="scgpa" required>
            </div>
        </div>

        <div class="form-group row my-2">
            <label for="email" class="col-sm-4 col-form-label">Student E-mail : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="email" class="form-control" name="email" id="email" required>
            </div>
        </div>

        <div class="form-group row my-2">
            <label for="spass" class="col-sm-4 col-form-label">Create Password : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="password" class="form-control" name="spass" id="spass" required>
            </div>
        </div>

        <div class="form-group row my-2">
            <label for="cpass" class="col-sm-4 col-form-label">Confirm Password : <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="password" class="form-control" oninput="validate()" name="cpass" id="cpass" required>
            <div class="form-text text-danger" id="pnm">Password Not Maching</div>
            <div class="form-text text-success" id="pm">Password Maching</div></div>

            </div>
        
        

        <div>
            <button type="reset" class="btn btn-danger" name="cancel" value="cancel" onclick="window.location.href='index.php'">Cancel</button>
            <button type="reset" class="btn btn-warning" name="reset" value="reset">Reset</button>
            <button type="submit" id="sub" disabled class="btn btn-success disable" name="submit" value="submit" style="float:right">Submit</button>
        </div>
        </div>
        </div>
        <script>
            document.getElementById('pm').style.display = 'none';
            document.getElementById('pnm').style.display = 'none';
            function validate(){
                let p1 = document.getElementById('spass').value;
                let p2 = document.getElementById('cpass').value;

                if(p1===p2){
                    document.getElementById('pnm').style.display = 'none';
                    document.getElementById('pm').style.display = 'block';
                    document.getElementById('sub').disabled =false;
                }
                else{
                    document.getElementById('pm').style.display = 'none';
                    document.getElementById('pnm').style.display = 'block';
                    document.getElementById('sub').disabled =true;
                }
            }
        </script>
<?php
include 'footer.php';
?>