<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="fibonacci.css">
    <link
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
      <form action="fibonacci.php" class="input2-form" method="POST">
      <h1>Menghitung Deret Fibonacci</h1>
		
		<div class = "thistxtb">
		<label >Bilangan 1: </label> 
        <br></br>
        <input type="number" name="input1" required>
        <span data-placeholder="Masukkan bilangan pertama"></span>
		</div>

		<div class="thistxtb">
		<label >Bilangan 2: </label>
        <br></br> 
        <input type="number" name="input2" required>
        <span data-placeholder="Masukkan bilangan kedua"></span>
		</div>

		<div class="thistxtb">
		<label >Jumlah Bilangan: </label> 
        <br></br> 
        <br>
        <input type="number" name="jml_bil" required>
        <span data-placeholder="Masukkan jumlah bilangan yg ingin ditampilkan"></span>
		</div>

        <div>
        <input type="submit" class="submitbtn" name ="submit">
		</div>

        <div class="bottom-text">
        <a href="../index.php">Kembali</a>
        </div>

        <br>
		<?php 
        $deret = ""; 
		if (isset($_POST['submit'])){
			$x = $_POST['input1'];
			$y = $_POST['input2'];
			$jml = $_POST['jml_bil'];
			
            $deret = $x . ", " . $y; 
			
			for ($i=0; $i<$jml-2; $i++)
			{

			$output = $x + $y;
			
			$x = $y;  
			$y = $output; 
            $deret = $deret . ", " . $output;
			}

		} 
        echo "<h4>Hasil:</h4> $deret";
	    ?>
	</form>
    <script type="text/javascript">
      $(".thistxtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".thistxtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });
    </script>
  </body>
</html>
