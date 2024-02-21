<?php
$con=mysqli_connect("localhost","root","","project");
$sql="SELECT * from staff";
$result=mysqli_query($con,$sql);
?>
<?php
session_start();
$Regno=$_SESSION['Reg'];
$class=$_SESSION['Class'];
?>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewreport" content="width=device-width,initial-scale=1.0">
        <script src="script\jquery-3.7.1.min.js"></script>
        <link rel="icon" href="jmc.png">
    <title>feedback</title>
    </head>
<body>
<?php include "head.php";?>
<form id="myform">
<table>
<input type="hidden" name="regno" class="regno" value="<?php echo $Regno ?>">
<br><br> <center>Staff name <select name="staff" class=staff></center>
        <?php while($rows=mysqli_fetch_array($result)){
            ?>
            <option value="<?php echo $rows[$class]; ?>"><?php echo $rows[$class];} ?>
        </option>
            
</table>
<div class="one">
          <table>
          <br>
                <tr><td>Question</td><td>1</td><td>2</td><td>3</td><td>4</td>
                <tr><td>1.how to knowledgeable was your instructor?</td>
                  <td><input type="radio" name=q1 class="q1" value="1"></td>
            <td><input type="radio" name=q1  class="q1"  value="2"></td>
            <td><input type="radio" name=q1  class="q1"  value="3"></td>
            <td><input type="radio" name=q1  class="q1" value="4"></td></tr>
                    </tr>
                    <tr><td>2.how to clearly did your instructor explain the course matrial?</td>
                    <td><input type="radio" name=q2  class="q2" value="1"></td>
                <td><input type="radio" name=q2  class="q2" value="2"></td>
                <td><input type="radio" name=q2  class="q2" value="3"></td>
                <td><input type="radio" name=q2 class="q2" value="4"></td></tr>
                    <tr><td>3.how would you rate the instructor mastry of the matrial?</td>
                <td><input type="radio" name=q3 class="q3" value="1"></td>
                <td><input type="radio" name=q3 class="q3" value="2"></td>
                <td><input type="radio" name=q3 class="q3" value="3"></td>
                <td><input type="radio" name=q3 class="q3" value="4"></td></tr>
                    <tr><td>4.how easy was it approach the instructor with question?</td>
                    <td><input type="radio" name=q4 class="q4" value="1"></td>
                <td><input type="radio" name=q4 class="q4" value="2"></td>
                <td><input type="radio" name=q4 class="q4" value="3"></td>
                <td><input type="radio" name=q4 class="q4" value="4"></td>
                </tr>
                    <tr><td>5.how well did your instructor answer student question? ?</td>
                    <td><input type="radio" name=q5  class="q5" value="1"></td>
                <td><input type="radio" name=q5  class="q5" value="2"></td>
                <td><input type="radio" name=q5  class="q5" value="3"></td>
                <td><input type="radio" name=q5  class="q5"  value="4"></td>     
                </tr>
                    <tr><td>6.the speed with which your instructor presented the course matrerial too fast,too slow or aboutright?</td>
                    <td><input type="radio" name=q6  class="q6" value="1"></td>
                <td><input type="radio" name=q6  class="q6" value="2"></td>
                <td><input type="radio" name=q6  class="q6" value="3"></td>
                <td><input type="radio" name=q6  class="q6" value="4"></td>      
                </tr>
                    <tr><td>7.the work for this class too esay too hard about right?</td>
                    <td><input type="radio" name=q7  class="q7"  value="1"></td>
                <td><input type="radio" name=q7 class="q7" value="2"></td>
                <td><input type="radio" name=q7 class="q7" value="3"></td>
                <td><input type="radio" name=q7 class="q7" value="4"></td>   
                </tr>
                    <tr><td>8.how helpful were the homework assignment your understanding of the material?</td>
                    <td><input type="radio" name=q8 class="q8" value="1"></td>
                <td><input type="radio" name=q8 class="q8" value="2"></td>
                <td><input type="radio" name=q8 class="q8" value="3"></td>
                <td><input type="radio" name=q8 class="q8" value="4"></td>     
                </tr>
                    <tr><td>9.what was your favorite part of course?</td>
                    <td><input type="radio" name=q9 class="q9" value="1"></td>
                <td><input type="radio" name=q9 class="q9" value="2"></td>
                <td><input type="radio" name=q9 class="q9" value="3"></td>
                <td><input type="radio" name=q9 class="q9" value="4"></td>      
                </tr>
                    <tr><td>10.there anything else you think your instructor should know?</td>
                    <td><input type="radio" name=q10 class="q10" value="1"></td>
                <td><input type="radio" name=q10 class="q10" value="2"></td>
                <td><input type="radio" name=q10 class="q10" value="3"></td>
                <td><input type="radio" name=q10 class="q10"value="4"></td>         
                </tr> 
                <tr><td><br><button type="button"  id="submit">save</button></td></tr> 
            </table>
             </div>
        </fieldset>
        <div class="two">
            <br><table><tr><td>
            <a href="cancel.php"><button>Cancel</a></td>
            <td><a href="finish.php"><button>Finish</td></tr>
            <table>
        </div>
    </form>
    <script>
$(document).ready(function(){
    $("#submit").click(function(){
        if($('input[name^="q"]:checked').length <10) {
                    alert("Please answer all questions.");
                    return;
                }
       $.ajax({
        url:"feedbackdata.php",
        type:"post",
        data:$("#myform").serialize(),
        success:function(data){
            alert(data);
            }
       })
        $("#myform").trigger("reset");
    });
});
</script>
</body>
</html>
