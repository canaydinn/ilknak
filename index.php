<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>İlknak Su Ürünleri A.Ş. Üst Yönetim Rapor Uygulaması</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>

<style type="text/css">
@import url(font-awesome.min.css);
@import url("https://fonts.googleapis.com/css?family=Raleway:400,500,700");
@font-face { font-family: JaapokiRegular; src: url('http://localhost/font/Museo500-Regular.otf'); }

body{
text-align: center;
vertical-align: middle;
	font-family:JaapokiRegular;
}
#ust{
width:1024px;
height:100px;
vertical-align: middle;
text-align: center;
margin-left:auto; margin-right:auto;


}
#container{
width:1024px;
height:100px;
margin-left:auto; margin-right:auto;
}
#logo{
float:left;
}
#iletisim{
padding-top:40px;
list-style: none;
width:1024px;
height:250px;
}
#sekmeler{
background-color:#20a7ce;
width:100%;
height:150px;
}
#sekmelerRow{
width:1024px;
height:150px;
background-color:#098ed1;
margin-left:auto; margin-right:auto;
}
#sekmelerIlkKutu{
width:250px;
height:150px;
background-color:#20a7ce;
margin-left:auto; margin-right:auto;
float:left;
margin-left:70px;
}
#sekmelerIkinciKutu{
width:250px;
height:150px;
background-color:#20a7ce;
margin-left:auto; margin-right:auto;
float:left;
margin-left:70px;

}
#sekmelerUcuncuKutu{
width:250px;
height:150px;
background-color:#20a7ce;
margin-left:auto; margin-right:auto;
float:left;
margin-left:70px;
}
#alt{
margin-top:50px;
width:100%;
height:700px;
}
#altContainer{
width:1024px;
height:200px;
margin-left:auto; margin-right:auto;
}
#GrafikContainer{
width:1024px;
height:400px;
margin-left:auto; margin-right:auto;
}
#altRight{
float:left;
background-color:#e3e9ea;
height:200px;
margin-right:20px;
}
#altRight2{
float:left;
background-color:#e3e9ea;
height:200px;
}
#altLeft{
float:left;
background-color:#e3e9ea;
height:200px;
margin-right:20px;
margin-left:40px;
}
#contactUs{
width:100%;
height:100%;
}
#socialMedia{
background-color:#098ed1;
width:1024px;
height:50px;
padding-top:20px;
margin-left:auto; margin-right:auto;

}
#footer{
background-color:#19242a;
color:white;
width:1024px;
height:50px;
padding-top:20px;
margin-left:auto; margin-right:auto;

}
table.satisRaporuResult{
margin-left:35px;
border-style: solid;
background-color:0057af;
}
</style>
<script>


$(document).ready(function()
{
$.post("hamRapor.php",{},function(response)
		{
			
			
		//$( "#altLeftResult" ).html( response );
		var deneme=JSON.parse(response);
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "Aylık Çipura ve Levrek Satış Tutarları"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "doughnut",
			dataPoints: deneme
		}
		]
	});
	chart.render();
		});	
	
$("#satisGonder").click(function()
	{
		var satisTarihBa=$('#satisTarihBa').val();
		var satisTarihBi=$('#satisTarihBi').val();
		var balikTuru=$('#balikTuru').val();
		var alimMiktari=$('#alimMiktari').val();
		var alimTutar=$('#alimTutar').val();
		$.post("satisRaporu.php",{satisTarihBa:satisTarihBa,satisTarihBi:satisTarihBi,balikTuru:balikTuru,alimMiktari:alimMiktari,alimTutar:alimTutar},function(response)
		{
		$( "#altLeftResult" ).html( response );

		});	
	});
	
	
$("#giderRapor").click(function()
	{

			
	});
});
</script>
<body>
<div id="ust">
<div id="container">
	<img src="images/marine-logo.png" id="logo"/>
	<ul>
	<li id="iletisim"><a href="mailto:info@ilknak.com">Bize Ulaşın: info@ilknak.com</a></li>
	</ul>
</div>
</div>
<div id="orta">
    <img src="images/background.png" style="width:1024px;height:300px"/>
</div>
</div>
<div id="alt">
<div id="altContainer"> 

<div id="altLeft" align="left">
<label><b>Tarihsel Satış Raporu </b></label></br></br>
<div id="altLeftLabel" style="float:left">
<label>Tarih Aralığı</label></br></br></br>
<label>Satılan Balık Türü</label></br>
<label>Satılan Balık Miktarı</label></br>
<label>Satılan Balık Tutarı</label></br></br>
<input id="satisGonder" type="submit" value="Gönder"/></br>
</div>
<div id="altLeftInput" style="float:left">
<input id="satisTarihBa" type="date" step="7" min="2001-01-01"></br>
<input id="satisTarihBi" type="date" step="7" min="2001-01-01"></br>
<select id="balikTuru">
  <option value="Cipura">Çipura</option>
  <option value="Orkinos">Orkinos</option>
  <option value="Levrek">Levrek</option>
</select></br>
<input type="text" id="alimMiktari"/></br>
<input type="text" id="alimTutar"/>
<br/></br>


</div>
</div>

<div id="altRight" align="left">
<div  id="myPieChart"></div>

</div>

<div id="altRight2" align="left"> 
<label><b>Amortisman Giderleri Raporu</b></label></br></br>
<div style="float:left">
<label>Tarih Aralığı</label></br>
<label>Departman İsmi</label></br>
<label>Hammadde Türü</label> </br>
<label>Alım Miktarı</label></br>
<label>Alım Tutarı</label></br></br>
<input id="giderRapor" type="submit" value="Gönder"/></br>
</div>
<div style="float:left">
<input type="date" step="7" id="giderTarih" min="2001-01-01"></br>
<input type="text" id="giderDepartman" /></br>
<select id="amorTur">
  <option value="500">Çipura</option>
  <option value="300">Orkinos</option>
  <option value="600">Levrek</option>
</select></br>
<input type="text" id="miktar"/></br>
<input type="text" id="amorTutar"/></br>
 <br/></br>
</div>

</div>

</div></br>
<div id="GrafikContainer">
<div id="altLeftResult" style="float:left;"></div>
<div style="float:left;"><div id="piechart"></div></div>

<div style="float:left;"><div id="chartContainer" width="100px" height="100px;"></div></div>
</div>
</div>
<div id="contactUs">
	<img src="images/contactUs.png" style="width:1024px;height:250px"/>
</div>
<div></div>
<div id="socialMedia"></div>
<div id="footer">
<span>Bu çalışma İlknak Su Ürünleri A.Ş. tarafından 2016 yılında geliştirilmiştir.<strong> 2016&copy;</strong></span>
</div>
</body>
</html>
