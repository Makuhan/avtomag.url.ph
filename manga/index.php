<!DOCTYPE html>

<?php include 'header.php'; ?>

	<main role="main">

<div class="main">
		<!-- section -->
		<section style="background-color:white;">
		
		<div style="float:left; width:15%; background-color:white;height:100%;";>
		
		<form name="form1"  action="#" method="get">
		  		
		<select onChange="form1.submit()" name="chapter" style="width:100%;">
				<?php foreach($data_chapt as $opt): 
					if($opt==$_GET["chapter"]){
						echo '<option selected value="' . $opt. '">Ch. '.$opt; '</option>'; 
					} else {
						echo '<option value="' . $opt. '">Ch. '.$opt; '</option>';
					}
			//	
				endforeach; //https://www.youtube.com/watch?v=rSncrXP0HeU ?>
		</select>
		
		<!--</form>-->
		<button style=" background-color:white;height:100%;width:100%;">Назад</button>
		</div>
		<div style="float:right; width:15%; background-color:white;height:100%;";>
		<!--<form name="form2"  action="#" method="get"> -->
		<select name="page" style="float:right; width:100%;" onChange="form2.submit()">
				<?php foreach($data_page as $opt=>$opt_value): 
				if($opt==$_GET["page"]){
			echo '<option selected value="' . $opt. '">page '.$opt; '</option>'; 
		} else {
			echo '<option value="' . $opt. '">page '.$opt; '</option>';
		}
			//	
			
				endforeach; //https://www.youtube.com/watch?v=rSncrXP0HeU ?>
 
		</select>
		</div><!-- -->
		</form>
		<button style=" background-color:white;height:100%;width:100%;">Вперед</button>
		
		<div style="margin:10px auto; width:70%";>
		<?php 
		
		 

		
		if(array_key_exists($_GET["page"], $data_page)){
			echo '<img src="'.$data_page[$_GET["page"]].'" style=" width:100%;" alt="image" />'; 
		} else {
			if(!isset($_GET["page"])){
			echo '<img src="'.$data_page[1].'" style=" width:100%;" alt="image" />'; 
		} else{
			echo 'no images';}
		}
		 
?>
		
	
		</div>
		
		
		
		</section>
		<!-- /section -->
</div>
	</main>

<?php include 'footer.php'; ?> 

