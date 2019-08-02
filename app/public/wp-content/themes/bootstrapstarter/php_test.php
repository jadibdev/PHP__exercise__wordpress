<?php 
/* Template Name: php_test */ 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=ABeeZee&display=swap" rel="stylesheet">
    <title>php_test</title>
  </head>
  <body style="font-family: 'ABeeZee', sans-serif;">
		
		
		<div class="mx-auto" style="width: 200px;margin-top:50px;">
			<h6 style="color:blue; margin-bottom:50px; line-height: 1.6;">Enter a start date, an end date, a total budget, a minimum per day and get your daily budget not including weekends.</h6>
			<form action="" method="get">
				<label for="startDate"></label>
				<input style="border-top:none; border-right:none; border-left:none;" type="text" name="startDate" placeholder="start: Y-m-d" id="startDate" value="" />
				<br>
				<br>
				<label for="endDate"></label>
				<input style="border-top:none; border-right:none; border-left:none;" type="text" name="endDate" placeholder="end: Y-m-d" id="endDate" value="" />
				<br>
				<br>
				<label for="total"></label>
				<input style="border-top:none; border-right:none; border-left:none;" type="text" name="total" placeholder="Total Budget: $" id="total" value="" />
				<br>
				<br>
				<label for="baseline"></label>
				<input style="border-top:none; border-right:none; border-left:none;" type="text" name="baseline" placeholder="Minimum per day: $" id="baseline" value="" />
				<br>
				<br>
				<button style="background:lightblue; margin-left:50px; margin-top:20px" type="submit" value="Submit" id="moveRight">Submit</button>
			</form>
		</div>

		<?php

			$start_date=$_GET["startDate"];
			$end_date=$_GET["endDate"];
			$total=$_GET["total"];
			$baseline=$_GET["baseline"];
			$min_num = $baseline / 5;
			$max_num = $total / 5;

			$begin = new DateTime( $start_date );
			$end = new DateTime( $end_date );
			$end = $end->modify( '+1 day' ); 

			$interval = new DateInterval('P1D');
			$daterange = new DatePeriod($begin, $interval ,$end);

			
		?>
		<div class="mx-auto" style="color:blue; width:320px; margin-top: 50px; margin-bottom:100px">
			
			<?php
			if( empty( $_GET[ 'submit' ] ) ) {

      $error = 'Please enter a user name';
 }
				function isWeekend($date) {
    			return (date('N', strtotime($date)) >= 6);
				}
				 	 $final_array = Array();
					 foreach($daterange as $date){
						 if(isWeekend($date->format("Y-m-d"))) {
							 
							 $final_array[$date->format("D M d Y")] = "Daily Budget: $"."0";
							 
						} else {
							
							$final_array[$date->format("D M d Y")] = "Daily Budget : $".rand(2, 89);
						}
						
				 }
				 foreach ($final_array as $key => $value) {
						echo "$key => $value"."<br>";
						?><hr><?php
					}
				?>
		</div>


					<script> 
            if (isset($_GET['submit'])) { 
                echo "GeeksforGeeks"; 
            } 
        </script> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>