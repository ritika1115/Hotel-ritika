<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HOTEL BOOKING</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="ritika.css">
      
    </head>
    <body>
        
        <!-- header -->
        <header class = "header" id = "header">
        
            <div class = "head-top">
                  
                <div class = "site-name">
                    <div>HOTEL</div>
                    <div class="mo"><img src = "my logo.png" alt="not" ></div>
                    <div class = "site-nav">
                        <span id = "nav-btn">RAJMAHAL<i class = "fas fa-bars"></i></span>
                    </div>
                </div>
                
            </div>

            <div class = "head-bottom flex">
                <h2>WELCOME TO A LUXURIOUS PLACE</h2>
                <p>ENJOY YOU WONDERFUL HOLIDAY WITH LUXURIOUS EXPIRIENCES</p>
                <button type = "button" class = "head-btn">GET STARTED</button>
            </div>
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "#header">home</a></li>
                <li><a href = "#services">services</a></li>
                <li><a href = "#rooms">rooms</a></li>
                <li><a href = "#customers">customers</a></li>
            </ul>
            <button class = "btn sign-up">sign up</button>
            <button class = "btn log-in">log in</button>
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->
        <section id = "services">
        <!-- body content  -->
        <section class = "services sec-width" >
            <div class = "title">
                <h2>services</h2>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Food Service/ Food Runner</h2>
                        <p>Although a great restaurant experience must include great food, a bad restaurant experience can be achieved through bad service alone. Ideally, service is invisible. You notice it only when something goes wrong.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Refreshment</h2>
                        <p>Here is a simple but powerful rule: always give people more than what they expect to get.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Housekeeping</h2>
                        <p>If you're like us, you have a love-hate relationship with cleaning and organizing. Sure, it's nice to have a neat and tidy home, but that requires so much time and effort. </p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-door-closed"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Room Security</h2>
                        <p>The good we secure for ourselves is precarious and uncertain until it is secured for all of us and incorporated into our common life.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>
        </section>
    <section id="books">
        <section class = "book" id="#book-container">
            <form class = "book-form" action=# method=Post>
                <div class = "form-item">
                    <label for = "name">Name: </label>
                    <input type = "text" id = "name" placeholder="Name" name="t1">
                </div>
                <div class = "form-item">
                    <label for = "checkin-date">Check In Date: </label>
                    <input type = "date" id = "chekin-date" name="t2">
                </div>
                <div class = "form-item">
                    <label for = "checkout-date">Check Out Date: </label>
                    <input type = "date" id = "chekout-date" name="t3">
                </div>
                <div class = "form-item">
                    <label for = "adult">Adults: </label>
                    <input type = "number" min = "1" value = "1" id = "adult" name="t4">
                </div>
                <div class = "form-item">
                    <label for = "children">Children: </label>
                    <input type = "number" min = "1" value = "1" id = "children" name="t5">
                </div>
                <div class = "form-item">
                    <label for = "rooms">Rooms: </label>
                    <input type = "number" min = "1" value = "1" id = "rooms" name="t6">
                </div>
                <div class = "form-item">
                    <input type = "submit" class = "btn" value = "Book Now" name="b1">
                </div>
            </form>
        </section>
    </section>
        <section id = "rooms">
        <section class = "rooms sec-width">
            <div class = "title">
                <h2>rooms</h2>
            </div>
            <div class = "rooms-container">
                <?php
                $con=new mysqli("localhost","root","","hotel");
                if($con==true)
                {
                    $q="select * from room";
                    $t=mysqli_query($con,$q);

    while($row =mysqli_fetch_assoc($t)) 
    {
$id=$row['id'];
$name=$row['name'];
$feat=$row['features'];
$dis=$row['discription'];
$price=$row['price'];
$img=$row['img'];
                echo "
                <!-- single room -->
                <article class = 'room'>
                    <div class = 'room-image'>
                        <img src = '$img' alt= 'room image'>
                    </div>
                    <div class = 'room-text'>
                        <h3>$name</h3>
                        <ul>
                            <li>
                                <i class = 'fas fa-arrow-alt-circle-right'></i>
                                $feat
                            </li>
                        </ul>
                        <p>$dis</p>
                        <p class = 'rate'>
                            <span>₹$price/</span> Per Night
                        </p>
                       <a href='payment.php?id=$id'><button type = 'button' class = 'btn'>book now</button></a>
                    </div>
                </article>";}}
                ?>
                <!-- end of single room -->
                <!-- single room -->

                <!-- <article class = "room">
                    <div class = "room-image">
                        <img src = "rooms2.jpeg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Rooms</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                King sized bed
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                attached washroom
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Luxurious sofas
                            </li>
                        </ul>
                        <p>You need to have a home to go back to, whether it's a hotel room or a barn. It's only home when he's there.</p>
                        <p>I do work-related stuff on airplanes. Then, when I'm in the hotel room or just vegging out, I read for pleasure.</p>
                        <p class = "rate">
                            <span>₹15999 /</span> Per Night
                        </p>
                        <a href="#books"><button type = "button" class = "btn">book now</button></a>
                    </div>
                </article> -->
                <!-- end of single room -->
                <!-- single room -->
                <!-- <article class = "room">
                    <div class = "room-image">
                        <img src = "rooms3.jpeg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Rooms</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Single bed
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Attached washroom
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Comfortable sofas
                            </li>
                        </ul>
                        <p>When I'm alone in my hotel room in some foreign place, I feel very lonely. Then I tuck into my favourite chocolate - Chuckles or Whispers - for some comfort.</p>
                        <p>I just want to stay in my hotel room, read my book. I enjoy that private time.</p>
                        <p class = "rate">
                            <span>₹9999 /</span> Per Night
                        </p>
                        <a href="#books"><button type = "button" class = "btn">book now</button></a>
                    </div>
                </article> -->
                <!-- end of single room -->
            </div>
        </section>
    </section>

    <section id="customers">
        <section class = "customers" >
        
            <div class = "sec-width">
                <div class = "title">
                    <h2>customers</h2>
                </div>
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>We Loved it</h3>
                        <p>Great location, really pleasant and clean rooms, but the thing that makes this such a good place to stay are the staff. All of the people are incredibly helpful and generous with their time and advice.</p>
                        <img src = "customer.jpeg" alt = "customer image">
                        <span>Alexender Watson, America</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable Living</h3>
                        <p>The rooms were clean, very comfortable, and the staff was amazing. They went over and beyond to help make our stay enjoyable. I highly recommend this hotel for anyone visiting downtown</p>
                        <img src = "customer3.jpeg" alt = "customer image">
                        <span>Maharanapratap Singh, India</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Place</h3>
                        <p>They were extremely accommodating and allowed us to check in early at like 10am. We got to hotel super early and I didn’t wanna wait. So this was a big plus. The sevice was exceptional as well. Would definitely send a friend there.</p>
                        <img src = "customer2.jpeg" alt = "customer image">
                        <span>Zhoa Lusi,China</span>
                    </div>
                    <!-- end of single customer -->
                </div>
            </div>
        </section>
        
    </section>
       <!-- end of body content -->
        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>Book the flight ticket and hotel with the huge discount. Refer friends and get generous bonuses from theirs orders.</p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "#">Blog</a>
                    <a href = "#books">Booking</a>
                    <a href = "#rooms">Rooms</a>
                    <a href = "#services">Services</a>
                    <a href = "#customers">Customers</a>
                    <a href = "login.php">Login</a>
                    <a href = "signup.php">Sign-up</a>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">Career</a>
                    <a href = "#">About Us</a>
                    <a href = "contact.php">Contact Us</a>
                    <a href = "#">Services</a>
           
                </div>

                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            Phase-1,Dugri,ludhiana,Punjab
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +8288897444
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>s
                            rajmahal12@gmail.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
    </body>

    <?php
if(isset($_POST['b1']))
{
    $con=new mysqli("localhost","root","","hotel");
    if(!empty($_POST['t1'])&&!empty($_POST['t2'])&&!empty($_POST['t3'])&&!empty($_POST['t4'])&&!empty($_POST['t5'])&&!empty($_POST['t6']))
    {
        if(ctype_alpha($_POST['t1']))
        {
            $n=$_POST['t1'];
        }
        else
        {
            echo "Name can only contain alphabets";
        }
        if(ctype_digit($_POST['t4'])&&ctype_digit($_POST['t5'])&&ctype_digit($_POST['t6']))
        {
            $ci_dt=$_POST['t2'];
            $co_dt=$_POST['t3'];
            $adult=$_POST['t4'];
            $child=$_POST['t5'];
            $room=$_POST['t6'];
            if($con==true)
            {
                $q="insert into booking(Name,checkin_dt,checkout_dt,adults,children,rooms) values('$n','$ci_dt','$co_dt',$adult,$child,$room)";
                if($con->query($q))
                {
                    echo "booking success";
                }
                else
                {
                    echo"query prob";
                }
            }
            else
            {
                echo "connection prob";
            }
        }
        else
        {
            echo "Please enter only numeric values";
        }
        
       

    }
    else
    {
        echo "please fill all the fields";
    }
}

    ?>
</html>