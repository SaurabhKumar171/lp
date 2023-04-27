<?php
 include_once('./connection.php');

//  $sql = "SELECT * from blogs";
//  $result = $database -> query($sql);

//  if($result ->num_rows >0){
    
//     while($row = $result -> fetch_assoc()){

//     }
//  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="./css/blog.css">
</head>
<body>


 <div class="wrapper">

    <div class="container">
    

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>
        
        <div class="box-container">
        <?php 

                $title = isset($_GET['title']) ? $_GET['title'] : '';
                $img = isset($_GET['img']) ? $_GET['img'] : '';
                $date = isset($_GET['date']) ? $_GET['date'] : '';
                
                $j=0;
                $result = $database->query("SELECT * FROM blogs where title='$title' and image='$img' and date='$date' order by id desc limit 1");
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
                    <p><?php echo $content; ?></p>
                    <!-- <a href="history.back()" class="btn"> Back <span class="fas fa-chevron-right"></span> </a> -->
                    <button onclick="history.back()" class="btn">Back</button>
                </div>
            </div>
            <?php
                }
              }
              ?>
            
        
        </div>
        </section>


         
    </div>

 </div>
     
    
</body>
</html>