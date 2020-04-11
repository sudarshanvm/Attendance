<!-- footer -->
<div class="row footer">

        <div class="col-md-2 box">
        	<a href="#" data-toggle="modal" data-target="#login" style="color:lightyellow">Admin Login</a>
        </div>

        <div class="col-md-6 box">
        	<span href="#" data-target="#login" style="color:lightyellow">Organized by Dept. Of ISE,<a href="https://rvce.edu.in/" style='color:white'>R.V. College Of Engineering, Bengaluru</a> <br><br></span>
        </div>

        
        <div class="col-md-2 box">
        	<a s style="color:lightyellow;" href="#" data-toggle="modal" data-target="#about">About Project</a>
        </div>

</div>



<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to Admin</span></h4>
      </div>
      <div class="modal-body title1">
        <div class="row">
        	<div class="col-md-3">
        	</div>
        <div class="col-md-6">
            <form role="form" method="post" action="admin.php?q=index.php">
            <div class="form-group">
                  <input type="text" name="uname" maxlength="20"  placeholder="Username" class="form-control"/> 
            </div>
            <div class="form-group">
                    <input type="password" name="password" maxlength="30" placeholder="Password" class="form-control"/>
            </div>
            <div class="form-group" align="center">
                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
            </div>
            </form>
        </div>
       <div class="col-md-3">
       </div>
       </div>
      </div>
    </div>
  </div>
</div>

<!-- 
for "about project" section -->
<div class="modal fade" id="about">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <h3 class="modal-title"><span style="color:darkblue;font-size:12px;font-weight: bold">About The Project</span></h3>
         <?php
    $file = fopen("about.txt", "r");
    while (!feof($file)) {
    $string = fgets($file);
    $num    = strlen($string) - 1;
    $c      = str_split($string);
    for ($i = 0; $i < $num; $i++) {
        $last = $c[$i - 1];
        if ($c[$i] == ' ' && $last == ' ') {
            echo '&nbsp;';
        } else {
            echo $c[$i];
        }
    }
    echo "<br />";
}

fclose($file);
?>
      </div>
    </div>
  </div>
 </div>

      
</div>


<!-- footer end -->
