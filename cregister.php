<?php

    if(isset($_POST['submit'])){
        include 'connection.php';
        include 'header.php';
        $usn = $_POST['usn'];
        $sname = $_POST['sname'];
        $ssem = $_POST['ssem'];
        $syear = $_POST['syear'];
        $sbranch = $_POST['sbranch'];
        $ssec = $_POST['ssec'];
        $sdob = $_POST['sdob'];
        $scgpa = $_POST['scgpa'];
        $sphno = $_POST['sphno'];
        $semail = $_POST['email'];
        $scpass = $_POST['cpass'];

       //y $query1 = "SELECT usn from student where usn=$usn";
       // $result1 = mysqli_query($con,$query1);
        if(true || $result1){
            if(false /*mysqli_num_rows($result1)>0*/){
                echo "<div class='alert alert-warning m-3' role='alert'>
                USN Already Registered
                </div>";
            }
            else{
                //$query2 = "INSERT INTO table_name values()";
                //$result2 = mysqli_query($con,$query2);


        


        if(true || $result2){
?>
<div class="alert alert-success m-3" role="alert">
  Registered Successfully Please Check Status
</div>

<table class="table border rounded table-striped m-5 mt-0 mx-auto w-50">
  <thead>
    <tr>
      <th scope="col" style="text-align: center;" colspan="2">Student Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">USN : </th>
      <td><?php echo $usn; ?></td>
    </tr>
    <tr>
      <th scope="row">Name : </th>
      <td><?php echo $sname; ?></td>
    </tr><tr>
      <th scope="row">Date of Birth : </th>
      <td><?php echo date("d-m-Y", strtotime($sdob));; ?></td>
    </tr><tr>
      <th scope="row">Year : </th>
      <td><?php echo $syear; ?></td>
    </tr><tr>
      <th scope="row">Semester : </th>
      <td><?php echo $ssem; ?></td>
    </tr><tr>
      <th scope="row">Branch : </th>
      <td><?php echo $sbranch; ?></td>
    </tr><tr>
      <th scope="row">Section : </th>
      <td><?php echo $ssec; ?></td>
    </tr><tr>
      <th scope="row">Current CGPA : </th>
      <td><?php echo $scgpa; ?></td>
    </tr><tr>
      <th scope="row">Phone No. : </th>
      <td><?php echo $sphno; ?></td>
    </tr><tr>
      <th scope="row">E-mail : </th>
      <td><?php echo $semail; ?></td>
    </tr>
  </tbody>
</table>

<?php
        }
        else{
            ?>
            <div class="alert alert-danger m-3" role="alert">
            Registered Failed Please Try again
            </div>
            <?php
            echo "sql error 2";
        }
    }
}
else{
    echo "sql error 1";
    echo(mysqli_error($con));
}
        include 'footer.php';
    }
?>