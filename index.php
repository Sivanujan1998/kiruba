<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>

    
    <div class="bg-img">
        <form action="result.php" class="container" method="POST">
          <h1 >EXAM</h1>
         
          <label for="index"><b>Index No</b></label>
          <input type="text" placeholder="Enter Index No" name="index" required>
          <button type="submit" class="btn">submit</button>
          <?php
          if(isset($_GET['message'])){
          if($_GET['message']=='in'){
              echo "<b> <font color=red>invalid!!!! indexnumber try again....</font></b>";
          }
        }
          ?>
        </form>
        
      </div>
      

</body>
</html>