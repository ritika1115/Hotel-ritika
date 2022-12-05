<form action="#" method="post">
    Category<input type="text" name="t1"><br>
    Brand<input type="text" name="t2"><br>
    Price<input type="text" name="t3" id=" "><br>
    <input type="submit" name="b1" value="insert">
</form>
<?php
if(isset($_POST['b1']))
{
    $a=$_POST['t1'];
    $b=$_POST['t2'];
    $c=$_POST['t3'];
    $con= new mysqli("localhost","root","","electronics");
    $q="insert into products(Category,Brand,Price) values('$a','$b','$c')";
        if($con->query($q)==true)
        {
            echo "record inserted";
        }
        else
        {
            echo"query prob";
        }
        
        }
        ?>
    }
    