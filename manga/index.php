<!DOCTYPE html>

<?php include 'header.php'; ?>
<script>
function functionName() {
var text = [
   //[text, x, y, w, h]
     ["ЕПОХА ВІЙН",31,129,230,120]
    ,["text2",10,10,50,50]
	,["text3",10,10,50,50]
];
var img = document.getElementById("image"); //get x and y
var width = img.clientWidth;
var height = img.clientHeight;
var nwidth = img.naturalWidth;
var nheight = img.naturalHeight;
var ch = parseFloat(img.height/nheight).toPrecision(2);
var cw = parseFloat(img.width/nwidth).toPrecision(2);
alert(img.width + 'x' + img.height +' c width'+cw+'c height'+ch);

var div = document.getElementById("imgdiv");
//<div style="z-index:2;position:absolute;">Текст</div>
var newdiv =document.createElement('div');
//newdiv.setAttribute("style","position: absolute; left: "+text[0][1]*0.7+"px; top: "+text[0][2]*0.7+"px; width:"+text[0][3]+"px;height:"+text[0][4]+"px; background-color:white; ");
//newdiv.innerHTML = "<label>Ура!</strong> Вы прочитали это важное сообщение.";


var label =document.createElement("LABEL");
label.setAttribute("for","image");
label.setAttribute("style","position: absolute; left: "+text[0][1]*cw+"px; top: "+text[0][2]*ch+"px; width:"+text[0][3]*cw+"px;height:"+text[0][4]*ch+"px; background-color:white; ");
label.innerHTML = text[0][0];
newdiv.appendChild(label);
div.appendChild(newdiv);
}

</script>
	<main role="main">

<div class="main">
		<!-- section -->
		<section style="background-color:white;">
		
		
		
		<form name="form1"  action="#" method="get">
		  	<div style="float:left; width:15%; background-color:white;height:100%;";>
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
		<button style=" background-color:white;height:100%;width:100%;" onclick="functionName();">Назад</button>
		</div>
		<div style="float:right; width:15%; background-color:white;height:100%;";>
		<!--<form name="form2"  action="#" method="get"> -->
		<select name="page" style="float:right; width:100%;" onChange="form1.submit()">
				<?php foreach($data_page as $opt=>$opt_value): 
				if($opt==$_GET["page"]){
			echo '<option selected value="' . $opt. '">page '.$opt; '</option>'; 
		} else {
			echo '<option value="' . $opt. '">page '.$opt; '</option>';
		}
			//	
			
				endforeach; //https://www.youtube.com/watch?v=rSncrXP0HeU ?>
 
		</select>
		<button style=" background-color:white;height:100%;width:100%;" Onclick="<?php gonext(); ?>">Вперед</button>
		
		</div><!-- -->
		</form>
		
		<div style="margin:10px auto; width:70%; position:relative;" id="imgdiv"  >
		<?php 
		
		 

		
		if(array_key_exists($_GET["page"], $data_page)){
			echo '<img src="'.$data_page[$_GET["page"]].'" style=" width:100%;position: relative;" alt="image" id="image" />'; 
		} else {
			if(!isset($_GET["page"])){
			echo '<img src="'.$data_page[1].'" style=" width:100%;position: relative;" alt="image" id="image" />'; 
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

