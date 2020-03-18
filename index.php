<?php include 'header.php';?>

<style>
.bod{
	background:#fff;
	padding:0px;
	margin:13px 13px 13px 13px;
	box-shadow:0 0 4px rgba(0,0,0,0.5);
}
.title{
	background:#db9c27;
	margin:0px;
	padding:5px;
	color:#fff;
	font-weight:bold;
	font-size:18px;
}
.sel{
	background:#fff;
	border:2px solid gray;
	padding:7px;
	font-size:large;
	border-radius:6px;
	outline:none;
}
.btn{
	background: #db9c27;
	padding:10px;
	border:0px;
	font-size:large;
	color:#fff;
	border-radius:6px;
	margin:10px;
	font-weight:bold;
}
.btn:hover{
	box-shadow:0 0 8px rgba(0,0,0,0.5);
}
.result{
	font-size:large;
	background:#dadada;
	padding:8px;
}
.quote{
	margin-bottom:-15px;
	padding:25px;
}
</style>


<center>

<script>
	if(screen.width>700){
		alert("Open this site in your mobile phone to get better experience");
	}
</script>

<div class='quote'><i>
<i class="fa fa-quote-left"></i>
<?php include 'quote.php';?>
<i class="fa fa-quote-right"></i><br></i>
<b>- বঙ্গবন্ধু শেখ মুজিবুর রহমান</b>
</div>
	
<div class='bod'>
	<div class='title'>মুজিববর্ষ তারিখ ও সময়</div>
	<div style='padding:20px'>
    <?php include 'mujibDate.php';?>
    </div>
</div>

<div class='bod'>
	<div class='title'>ইংরেজি থেকে মুজিববর্ষ তারিখ নির্ণয়</div>
	<div style='padding:20px'>
    <?php include 'convertDate.php';?>
    </div>
</div>

</center>


<?php include 'footer.php';?>










