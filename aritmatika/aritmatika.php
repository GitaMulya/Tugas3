<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="aritmatika.css">
    <link
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
      <form action="aritmatika.php" class="input-form" method="POST">
      <h1>Menghitung Baris Aritmatika</h1>
		
		<div class = "thistxta">
		<label >Suku 1: </label> 
        <br></br>
        <input type="number" name="suku1" required>
        <span data-placeholder="Masukkan suku pertama"></span>
		</div>

		<div class="thistxta">
		<label >Suku 2: </label>
        <br></br> 
        <input type="number" name="suku2" required>
        <span data-placeholder="Masukkan suku kedua"></span>
		</div>

		<div class="thistxta">
		<label >Suku ke-n: </label> 
        <br></br> 
        <br>
        <input type="number" name="suku_n" required>
        <span data-placeholder="Masukkan Suku ke-n yg ingin diketahui"></span>
		</div>

        <div>
        <input type="submit" class="submitbtn" name ="submit">
		</div>

        <div class="bottom-text">
        <a href="../index.php">Kembali</a>
        </div>

		<?php 
        $outputbaris = "";     
        $hasil = "";
        $b ="";
        $n ="";
        if (isset($_POST['submit'])) {   

            $x = $_POST["suku1"];
            $y = $_POST["suku2"];
            $n = $_POST["suku_n"];
        
            $b = $y - $x;
            $hasil = $x + ($n - 1) * $b;
        
            for ($i = 1; $i < $n + 1; $i++) {
                $baris = $x + ($i - 1) * $b;
                $outputbaris .= $baris . " ";
            }
        }
        ?>
        <div class="thistxta">
         <h5> <b>Beda yang diperoleh:</b> </h5>
         <?php echo $b; ?> 
         </div>
         
        <div class="thistxta">
         <h5> <b>Suku Ke- <?php echo $n?>: </b> </h5>
         <?php echo $hasil; ?> 
         </div>
         
        <div class="thistxta">
         <h5> <b>Baris Aritmatika: </b> </h5>
         <?php echo $outputbaris; ?> 
         </div>

	</form>
    <script type="text/javascript">
      $(".thistxta input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".thistxta input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });
    </script>
  </body>
</html>
