<?php
   ob_start(); // needs to be added here
   ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Smart Methods | First Task</title>
      <!-- Icon Fonts -->
      <link
         href="https://fonts.googleapis.com/icon?family=Material+Icons"
         rel="stylesheet"
         />
      <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap"
         rel="stylesheet"
         />
      <!-- CSS Files -->
      <link
         rel="stylesheet"
         href="./dist/css/style.css"
         type="text/css"
         media="all"
         />
   </head>
   <body class="home">
      <nav class="navbar navbar-light bg-light">
         <a class="navbar-brand" href="index.php" style="border-bottom:none">
         <img src="dist/images/logo.png" width="170" class="d-inline-block align-top" alt="" style="display:block; margin:0 auto!important;">
         </a>
      </nav>
      <section class="mt-5 mb-3">
      </section>
      <div class="site-wrapper">
         <section class="article-wrapper">
            <div class="article-container">
               <div class="article-block">
                  <div class="entry-content">
                     <br/>
                     <h1 style="color: #0d829c">لوحة التحكم</h1>
                  </div>
               </div>
            </div>
         </section>
         <section class="range-slider-wrapper">
            <div class="range-slider-container">
               <div class="range-slider-block">
                  <?php  
                     $dbhost = "localhost";
                     $dbuser = "root";
                     $dbpass = "admin123";
                     $db = "smartmethods_tasks";
                     
                     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) ;
                        $sql="SELECT * FROM motors where id =1;";
                        $result = mysqli_query($conn,$sql);
                      
                        if (mysqli_num_rows($result)>0) { while($row =
                     mysqli_fetch_assoc($result)) { ?>
                  <form action="index.php" method="post" style="border:2px solid #4cb4c4">
                     <div id="range-sliders" class="range-sliders">
                        <div class="range-slider-group range-slider-group-red">
                           <h2 class="range-label range-label-red">Engine 1</h2>
                           <input
                              type="range"
                              min="0"
                              max="200"
                              value="<?php echo $row['engine1']; ?>"
                              data-color="#9d1148"
                              class="range-slider range-slider-red"
                              id="range-slider-red"
                              name="eng1"
                              />
                           <input
                              type="number"
                              min="0"
                              max="200"
                              value="<?php echo $row['engine1']; ?>" oninput="updateInput()"
                              class="input-slider input-slider-red"
                              id="input-slider-red"
                              />
                        </div>
                        <div class="range-slider-group range-slider-group-green">
                           <h2 class="range-label range-label-green">Engine 2</h2>
                           <input
                              type="range"
                              min="0"
                              max="200"
                              value="<?php echo $row['engine2']; ?>"
                              data-color="#0d829c"
                              class="range-slider range-slider-green"
                              id="range-slider-green"
                              name="eng2"
                              />
                           <input
                              type="number"
                              min="0"
                              max="200"
                              value="<?php echo $row['engine2']; ?>" oninput="updateInput()"
                              class="input-slider input-slider-green"
                              id="input-slider-green"
                              />
                        </div>
                        <div class="range-slider-group range-slider-group-blue">
                           <h2 class="range-label range-label-blue">Engine 3</h2>
                           <input
                              type="range"
                              min="0"
                              max="200"
                              value="<?php echo $row['engine3']; ?>"
                              data-color="#9d1148"
                              class="range-slider range-slider-blue"
                              id="range-slider-blue"
                              name="eng3"
                              />
                           <input
                              type="number"
                              min="0"
                              max="200"
                              value="<?php echo $row['engine3']; ?>" oninput="updateInput()"
                              class="input-slider input-slider-blue"
                              id="input-slider-blue"
                              />
                        </div>
                        <!--  -->
                        <div class="range-slider-group range-slider-group-yellow">
                           <h2 class="range-label range-label-yellow">Engine 4</h2>
                           <input
                              type="range"
                              min="0"
                              max="200"
                              value="<?php echo $row['engine4']; ?>"
                              data-color="#0d829c"
                              class="range-slider range-slider-yellow"
                              id="range-slider-yellow"
                              name="eng4"
                              />
                           <input
                              type="number"
                              min="0"
                              max="200"
                              value="<?php echo $row['engine4']; ?>" oninput="updateInput()"
                              class="input-slider input-slider-yellow"
                              id="input-slider-yellow"
                              />
                        </div>
                        <!--  -->
                        <div class="range-slider-group range-slider-group-purple">
                           <h2 class="range-label range-label-purple">Engine 5</h2>
                           <input
                              type="range"
                              min="0"
                              max="200"
                              value="<?php echo $row['engine5']; ?>"
                              data-color="#9d1148"
                              class="range-slider range-slider-purple"
                              id="range-slider-purple"
                              name="eng5"
                              />
                           <input
                              type="number"
                              min="0"
                              max="200"
                              value="<?php echo $row['engine5']; ?>" oninput="updateInput()"
                              class="input-slider input-slider-purple"
                              id="input-slider-purple"
                              />
                        </div>
                     </div>
                     <div class="clr"></div>
                     <div class="center justify-content-center">
                        <button class="btn btn-primary" type="submit" name="submit">حفظ</button>
                     </div>
                     <div class="center justify-content-center">
                   
                        <button class="btn btn-info" id="BackButton1" name="BackButton1" type="button" onClick="document.location.href='../HW2/index.html'">التحكم بالموتور</button>
                     </div>
                  </form>
               </div>
            </div>
            <?php  }  }  ?>
         </section>
         <?php
            if(isset($_POST['submit'])){
            $e1= mysqli_real_escape_string($conn, $_POST['eng1']);
            $e2= mysqli_real_escape_string($conn, $_POST['eng2']);
            $e3= mysqli_real_escape_string($conn, $_POST['eng3']);
            $e4= mysqli_real_escape_string($conn, $_POST['eng4']);
            $e5= mysqli_real_escape_string($conn, $_POST['eng5']);
        
            $sql = "UPDATE motors SET engine1 = $e1, engine2 = $e2, engine3 = $e3, engine4 = $e4, engine5 = $e5 WHERE id=1;";
            $result = $conn->query($sql);
            header("Location:index.php");
            exit();
              
            }
            ?>
         <script>
            var eng1 = document.getElementById("range-slider-red");
            var lbl1 = document.getElementById("input-slider-red");
            lbl1.innerHTML = eng1.value;
            
            var eng2 = document.getElementById("range-slider-green");
            var lbl2 = document.getElementById("input-slider-green");
            lbl2.innerHTML = eng2.value;
            
            var eng3 = document.getElementById("range-slider-blue");
            var lbl3 = document.getElementById("input-slider-blue");
            lbl3.innerHTML = eng3.value;
            
            var eng4 = document.getElementById("range-slider-yellow");
            var lbl4 = document.getElementById("input-slider-yellow");
            lbl4.innerHTML = eng4.value;
            
            var eng5 = document.getElementById("range-slider-purple");
            var lbl5 = document.getElementById("input-slider-purple");
            lbl5.innerHTML = eng5.value;
            
            function updateInput() {
                
            lbl1.innerHTML = eng1.value;
            lbl2.innerHTML = eng2.value;
            lbl3.innerHTML = eng3.value;
            lbl4.innerHTML = eng4.value;
            lbl5.innerHTML = eng5.value;            
            }
            
         </script>
         <footer>
         </footer>
      </div>
      <!-- Javascript Files -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="./dist/js/app.js"></script>
   </body>
</html>