<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-US</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="shortcut icon" href="favicon.ico">
</head>


<body>
    <nav id="navbar">
        <div id="logo">
            <img src="my logo.png" alt="Physical fitness.com">
        </div>
        <ul>
        <ul>
            <li class="item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        </ul>
    </nav>

    <section>
        <div class="container">
            <div class="ContactInfo">
                <div>

                    <h2>Contact Info</h2>


                    <ul class="info">
                        <li>
                            <span> <img src="location.png" alt="location"></span>
                            <span>
                                243-J Akash Nagar<br> Ludhiana
                            </span>
                        </li>
                        <li>
                            <span> <img src="mail.png" alt="Email"></span>
                            <span>
                            rajmahal12@gmail.com
                            </span>
                        </li>
                        <li>
                            <span> <img src="call.png" alt="Phone No"></span>
                            <span>
                                5984621110
                            </span>
                        </li>
                    </ul>

                </div>

                <ul class="sci">
                    <li><a href="#"><i class="fa fa-facebook-f fa-2x"></i></a></li>
                    <li> <a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                    <li> <a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li> <a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
                </ul>

            </div>
            <div class="Contactform">

                <h2>Send Feedback</h2>
                <form action="#" method="post">
                <div class="formbox">
                    <div class="inputbox w50">
                        <input type="text" name=t1>
                        <span>First name</span>
                    </div>
                    <div class="inputbox w50">
                        <input type="text" name=t2>
                        <span>Last name</span>
                    </div>
                    <div class="inputbox w50">
                        <input type="email" name=t3>
                        <span>Email Address</span>
                    </div>
                    <div class="inputbox w50">
                        <input type="text" name=t4>
                        <span>Mobile No</span>
                    </div>
                    <div class="inputbox w100">
                        <textarea name=t5></textarea>
                        <span>Write your message</span>
                    </div>

                </div>
                <div class="inputbox w100">
                    <input type="submit" name=b1 value="Send">
                </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="center">
            Copyright &copy; www.rajmahal.com. All rights reserved!
        </div>
    </footer>
</body>
<?php
    if(isset($_POST['b1']))
    {
        $t=0;
        if(!empty($_POST['t1']))
        {
            $name=$_POST['t1'];  
        }
        else
        {
            $t++;
            echo "First Name cannot be empty";
        }
        if(!empty($_POST['t2']))
        {
            $ln=$_POST['t2'];   
        }
        else
        {
            $t++;
            echo "Last Name cannot be empty";
        }
        if(!empty($_POST['t3']))
        {
            $e=$_POST['t3'];   
        }
        else
        {
            $t++;
            echo "Email cannot be empty";
        }
        if(!empty($_POST['t4']))
        {
            $n=$_POST['t4'];    
        }
        else
        {
            $t++;
            echo "Mobile cannot be empty";
        }
        if(!empty($_POST['t5']))
        {
            $m=$_POST['t5'];    
        }
        else
        {
            $t++;
            echo "Mobile cannot be empty";
        }
        if($t==0)
        {
            $con=new mysqli("localhost","root","","hotel");
            if($con==true)
            {
                $q="insert into contact(fname,lname,email,phone,message) values('$name','$ln','$e',$n,'$m')";
                if($con->query($q)==true)
                {
                    echo "feedback submitted";
                }
                else
                {
                    echo "query problem";
                }
            }
            else
            {
                echo"connection problem";
            }
        }
    }
    ?>
</html>