<?php include('templates/header.php') ?>
<section id="middle"> 
	<?php include('templates/navigation.php') ?>
	<article id="main">
		<canvas id="canvas" width="" height=""><p class="fallback">We are truely sorry but your browser does not support HTML5 canvas, which is what this website uses to create the memes. If you open this back up in Google Chrome or Mozilla Firefox it works like a charm and you will be able to create your masterpiece!</p></canvas>
		<div id="create-form">
			<img src="img/blank_loader.png" alt="loader" id="my_image" width="220px" height="19px" />
			<p class="itemLine">Meme Name:<br/><input type="textbox" name="memename" id="memename" size="40" /></p>
			<p class="itemLine">Font Style: 
				<select id="text_style">
					<option value="'Bowlby One SC'">Bowlby One SC</option>
					<option value="'Candal'">Candal</option>
					<option value="'Coda Caption'">Coda Caption</option>
					<option value="'Carter One'">Carter One</option>
					<option value="'Days One'">Days One</option>
					<option value="'Oswald'">Oswald</option>
				</select>
			</p>
			<p class="section_title">Top Text</p>
			<p class="itemLine">Color: 
				<select id="tcolor">
					<option value="#FFFFFF">White</option>
					<option value="#000000">Black</option>
					<option value="red">Red</option>
					<option value="blue">Blue</option>
					<option value="green">Green</option>
					<option value="pink">Pink</option>
				</select>
				&nbsp;Size: 
				<select id="top_size">
					<option value="34pt">34</option>
					<option value="32pt">32</option>
					<option value="30pt">30</option>
					<option value="28pt">28</option>
					<option value="26pt">26</option>
					<option value="24pt">24</option>
					<option value="22pt">22</option>
					<option value="20pt">20</option>
					<option value="18pt">18</option>
				</select>
			</p>
			<p><div class="label">Line One: </div><input type="text" id="topText1_" size="40" value=""/></p>
			<p><div class="label">Line Two: </div><input type="text" id="topText2_" size="40" value=""/></p><br/>
			<p class="section_title">Bottom Text</p>
			<p class="itemLine">Color: 
				<select id="bcolor">
					<option value="#FFFFFF">White</option>
					<option value="#000000">Black</option>
					<option value="red">Red</option>
					<option value="blue">Blue</option>
					<option value="green">Green</option>
					<option value="pink">Pink</option>
				</select>
				&nbsp;Size: 
				<select id="bottom_size">
					<option value="28pt">28</option>
					<option value="26pt">26</option>
					<option value="24pt">24</option>
					<option value="22pt">22</option>
					<option value="20pt">20</option>
					<option value="18pt">18</option>
					<option value="16pt">16</option>
					<option value="14pt">14</option>
					<option value="12pt">12</option>
				</select>
			</p>
			<p><div class="label">Line One: </div><input type="text" id="bottomText1_" size="40" value=""/></p>
			<p><div class="label">Line Two: </div><input type="text" id="bottomText2_" size="40" value=""/></p><br/>
			<p class="atext">Allow others to create a meme<br/>using this image: 
				<input type="radio" name="allow" id="allow" value="1" /> Yes
				<input type="radio" name="allow" id="allow" value="0" checked /> No</p>
			<button onclick="saveViaAJAX();" class="button primary" id="sMeme">Save Meme</button>
		</div>
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript">
			var timer;var path=document.URL.split("=")[1];
			if(path==undefined){path=""}if(path!=""){var fileName=path;$("#image").attr("src","photos/"+fileName)}window.onload=function(){var b=document.getElementById("canvas");
			var c=b.getContext("2d");
			var a=document.getElementById("image");
			a.onload=function(){b.width=a.width;b.height=a.height; $("#form").attr("height",a.height)};
			a.src="photos/"+fileName;
			timer=setInterval("changeScene()",50)};
			function changeScene(){
				var f=document.getElementById("canvas");
				var g=f.getContext("2d");
				var o=$("#text_style").val();
				var m=$("#top_size").val();
				var w=$("#tcolor").val();
				var s=$("#bcolor").val();
				var n=$("#bottom_size").val();
				var d=$("#topText2_").val();
				var e=$("#topText1_").val();
				var a=$("#bottomText2_").val();
				var b=$("#bottomText1_").val();
				width=$("canvas").width();
				height=$("canvas").height();
				var c=document.getElementById("image");
				g.drawImage(c,0,0,width,height);
				g.textAlign="center";
				g.font= m+o;
				g.lineWidth=2;
				g.strokeStyle="#000000";
				g.fillStyle=w;
				g.fillText(e,width/2,40);
				g.strokeText(e,width/2,40);
				g.fillText(d,width/2,75);
				g.strokeText(d,width/2,75);
				g.font= n+o;
				g.strokeStyle="#000000";
				g.fillStyle=s;
				g.fillText(b,width/2,height-50);
				g.strokeText(b,width/2,height-50);
				g.fillText(a,width/2,height-20);
				g.strokeText(a,width/2,height-20)};
		</script>
		<script type="text/javascript">
			function saveViaAJAX(){
				var c=document.getElementById("canvas");
				var b=c.toDataURL("image/png");
				var e=document.URL.split("=")[1];
				$("#my_image").attr("src","img/loader.gif");
				var aa=$("#memename").val();
				var bb=$("#allow").val();
				
				if(e==undefined){e=""}
				if(e!=""){var f=e}
				var a="canvasData="+b;
				var d=new XMLHttpRequest();
				d.open("POST","library/process.php?file="+f+"&name="+aa+"&allow="+bb,true);
				d.setRequestHeader("Content-Type","canvas/upload");
				d.send(a);
				d.onreadystatechange=function(){
					if(d.readyState==4){
						window.location.href="meme.php?file="+d.responseText
			}}};
			
		</script>
		<img src="" alt="Hidden Image" id="image" class="hidden"/>
	</article>
	<!-- make the middle region's background color expand -->
	<div class="clear"></div>
</section>
<?php include('templates/footer.php') ?>
