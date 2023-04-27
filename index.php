<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lil Paws</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>Lil</strong>paws </a>

    <nav class="navbar" style="display: flex;">
        <span>
            <a href="#home">home</a>
            <div class="nav-underline"></div>
       </span>
        <span><a href="#about">about</a></span>
        <!-- <span><a href="#services">services</a></span> -->
        <span class="dropDown-menu">
                    <a href="#services">Services</a>
                    <ul>
                        <li class="dropDown-menu">
                            <a href="#services">Free checkups</a>
                            <a href="#services">24/7 Ambulance</a>
                            <a href="#services">Expert doctors</a>
                            <a href="#services">Medicines</a>
                            <a href="#services">Pharmacies</a>
                            <a href="#services">Total care</a>
                        </li>
                  </ul> 
        </span> 
        <span><a href="#doctors">doctors</a></span>
        <span><a href="#appointment">appointment</a></span>
        <span><a href="#review">review</a></span>
        <span><a href="#blogs">blogs</a></span>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="./image/home-img.svg" alt="">
    </div>

    <div class="content">
             <div class="hero-section-heading">We're Lil Paws</div>
                   <div class="hero-section-heading hero-section-sub-heading">
                       We give your friend <span class="moto"></span>
                   </div>
        <a href="login.php" ><div class="btn-pink" id="btn">Login or Sign up</div></a>




    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3><span id="count-doctor">150</span>+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3><span id="satisfied-patients">1030</span>+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons ">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="40" height="52" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; margin: 0;" xml:space="preserve" class=""><g><path d="M472.196 39.468c-52.654-52.625-138.301-52.625-190.955 0L169.915 150.794l126.394 126.394c26.014-21.663 58.995-35.227 95.412-35.227 20.888 0 40.765 4.339 58.851 12.087l21.624-23.624c52.639-52.64 52.639-138.301 0-190.956zM275.27 298.577 148.7 172.008 39.742 281.073c-52.639 52.639-52.639 138.301 0 190.955 52.653 52.622 139.3 53.626 191.955.999l22.088-22.194c-7.748-18.086-12.087-37.963-12.087-58.851.001-35.482 12.901-67.691 33.572-93.405zM271.703 391.983c0 61.144 45.893 111.045 105.015 118.504V273.478c-59.122 7.459-105.015 57.358-105.015 118.505zM406.722 273.478v237.009c59.122-7.459 105.015-57.36 105.015-118.505s-45.892-111.045-105.015-118.504z" fill="#2b84ea" data-original="#000000" class="" style="font-size: 20px;"></path></g></svg>
        <h3><span id="pharmacy">490</span>+</h3>
        <p>pharmacies</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3><span id="avail-hospital">70</span>+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
             <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="40" height="52" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; margin: 0;" xml:space="preserve" class=""><g><path d="M472.196 39.468c-52.654-52.625-138.301-52.625-190.955 0L169.915 150.794l126.394 126.394c26.014-21.663 58.995-35.227 95.412-35.227 20.888 0 40.765 4.339 58.851 12.087l21.624-23.624c52.639-52.64 52.639-138.301 0-190.956zM275.27 298.577 148.7 172.008 39.742 281.073c-52.639 52.639-52.639 138.301 0 190.955 52.653 52.622 139.3 53.626 191.955.999l22.088-22.194c-7.748-18.086-12.087-37.963-12.087-58.851.001-35.482 12.901-67.691 33.572-93.405zM271.703 391.983c0 61.144 45.893 111.045 105.015 118.504V273.478c-59.122 7.459-105.015 57.358-105.015 118.505zM406.722 273.478v237.009c59.122-7.459 105.015-57.36 105.015-118.505s-45.892-111.045-105.015-118.504z" fill="#2b84ea" data-original="#000000" class="" style="font-size: 20px;"></path></g></svg>
            <h3>pharmacies</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>Doctor</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Doctor</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>Doctor</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>Doctor</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>Doctor</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>Doctor</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="image/doc-7.jpg" alt="">
            <h3>Doctor</h3>
            <span>intern doctor</span>
            <div class="share">
                
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>Doctor</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-9.jpg" alt="">
            <h3>Doctor</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREBsWqqjRyfslv1kRwTazUL72_b7fPIUsl9g&usqp=CAU" alt="">
            <h3>Client1</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREBsWqqjRyfslv1kRwTazUL72_b7fPIUsl9g&usqp=CAU" alt="">
            <h3>Client2</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREBsWqqjRyfslv1kRwTazUL72_b7fPIUsl9g&usqp=CAU" alt="">
            <h3>Client3</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->
<?php
 include_once('./connection.php');

 $sql = "SELECT * from blogs";
 $result = $database -> query($sql);

 if($result ->num_rows >0){
    
    while($row = $result -> fetch_assoc()){

    }
 }


?>

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

 <div class="box-container">
    <?php 
            $j=0;
            $result = $database->query("SELECT * FROM blogs order by id desc limit 8");
            if($result->num_rows > 0){
                while($row = $result->fetch_array()){
                    $title  = $row['title'];
                    $content        = $row['content'];
                    // $star        = convertstar($row['star']);
                    $img        = $row['image'];
                    $date        = $row['date'];
                    $post_by        = $row['post_by'];
                    $j++;
                    
          ?>   
        
        <div class="box">
            <div class="image">
                <img src="<?php echo $img;?>" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i><?php echo $date;?> </a>
                    <a href="#"> <i class="fas fa-user"></i> <?php echo $post_by;?> </a>
                </div>
                <h3><?php echo $title;?></h3>
                <p><?php echo substr($content, 0, 50)." ...."; ?></p>
                <a href="blog.php?title=<?php echo urlencode($title); ?>&img=<?php echo urlencode($img); ?>&date=<?php echo urlencode($date); ?>" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <?php
            }
          }
          ?>
        

    </div>
</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> wincoder9@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> sujoncse26@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> sylhet, bangladesh </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>


</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://kit.fontawesome.com/58a810656e.js" crossorigin="anonymous"></script>
<script>
        var typeData = new Typed(".moto", {
          strings: [
            "Care",
            "Compassion",
            "Strength"
          ],
          loop: true,
          typeSpeed: 100,
          backSpeed: 80,
          backDelay: 1000,
        });
      </script>

</body>
</html>

