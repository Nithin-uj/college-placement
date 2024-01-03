<?php 
include 'header.php';
?>
<style>
    #csard{
        border:1px solid black;
        border-radius:4px;
        background-color:red;
    }
</style>
<div class="d-flex p-5 mx-auto">

<div class="rounded-start border-start border-top border-bottom w-50">
image
</div>

<div class="card sm-w-50 rounded-0 rounded-end"  id="card">
<div class="card-header" style="text-align:center">
    Admin Login
  </div>
  <div class="card-body ">
<form action="adminlogin.php" method="post">
    <?php
    if(isset($_POST['submit'])){
        echo "invalid login id or pass";
    }
    ?>
    <!--

-->
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password" required>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me !</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
</form>
</div>
</div>
</div>

<?php 
include 'footer.php';
?>