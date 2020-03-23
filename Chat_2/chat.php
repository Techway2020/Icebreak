<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Icebreak </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="stylemenu.css">

<?php
include('config.php');
if(!isset($_SESSION)){ 
    session_start();}
if(isset($_SESSION['uname'])) {}
else{
	header('location:http://localhost/Chat_2');
	}
?>
<style>
*{margin:0px; padding:0px;font-family: Helvetica, Arial, sans-serif;}
#logout{width:60px; height:20px; position:absolute; top:6px; right:20px; margin-bottom:40px; text-align:center; color:#fff}
#notifi{width:60px; height:20px; position:absolute; top:6px; right:120px; margin-bottom:40px; text-align:center; color:#fff}
#container{width:75%; height:auto; position:relative; top:8px; margin:auto;}

#session-name{width:100%; height:36px; margin-bottom:30px; font-size:20px}
.session-text{width:300px; height:30px;padding:6px 10px;margin: 8px 0;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box; font-size:24px}

#result-wrapper{width:100%; margin:auto; height:450px;}
#result{height:450px; overflow:scroll;overflow-x: hidden;}

#form-container{width:100%; margin:auto; height:80px;}
.form-text{float:left; width:85%; height:80px;}
#comment{width:100%; height:79px; resize:none;}
.form-btn{float:left; width:15%; height:80px;}
#btn{border:none; height:80px; width:100%; background:tomato; color:#fff; font-size:22px}

.chats{width:100%; margin-bottom:6px;}
.chats strong{color:#6d84b4}
.chats p{ font-size:14px; color:#aaa; margin-right:10px}

#uno
{ 
  background-color:grey;
  width:20%;
  height:150px;
  float:left;
}

#due
{
  background-color:red;
  width:20%;
  height:150px;
  float:right;
}
#tre
{ 
  background-color:green;
  width:20%;
  height:150px;
  float:left;
}

#quattro
{
  background-color:#FF00FF;
  width:20%;
  height:150px;
  float:right;
}
#cinque
{
  background-color:#FF8C00;
  width:20%;
  height:150px;
  float:right;
}

.randomm
{
  width: 60%;
}




</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function()
    {
        $(document).bind('keypress', function(e) {
            if(e.keyCode==13){
                 $('#my_form').submit();
				 $('#comment').val("");
             }
        });
	});
</script>
<script type="text/javascript">
function post()
{
  var comment = document.getElementById("comment").value;
  var name = document.getElementById("username").value;
  if(comment && name)
  {
    $.ajax
    ({
      type: 'post',
      url: 'commentajax.php',
      data: {user_comm: comment, user_name: name},
      success: function (response) 
      {
	    document.getElementById("comment").value="";
      }
    });
  }
  
  return false;
}
</script>
<script>
 function autoRefresh_div()
 {
      $("#result").load("load.php").show();// a function which will load data from other file after x seconds
  }
 
  setInterval('autoRefresh_div()', 2000);
</script>
</head>

<body>

  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="chat.php">Home</a>
    <a href="#">Random Chat</a>
    <a href="search.php">Search</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Contact</a>
  </div>


  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>


<div id="logout">
	<a href="logout.php" style="color:white"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
</div>

<div id="notifi">
  <a href="notifi.php" style="color:white"><i class="fa fa-sign-out" aria-hidden="true"></i>Notifications</a>
</div>


<div id="container">

<div id="session-name">
	Your Name: <input type="text" value="<?= $_SESSION['uname'] ?>" class="session-text" disabled>
</div>

<div id="result-wrapper">
	<div id="result">
		<?php
			include("load.php");
		?>
	</div>			
</div>

<form method='post' action="#" onsubmit="return post();" id="my_form" name="my_form">
<div id="form-container">
	  <div class="form-text">
    	<input type="text" style="display:none" id="username" value="<?= $_SESSION['uname'] ?>">
    	<textarea id="comment"></textarea>
    </div>
    <div class="form-btn">
    	<input type="submit" value="Send" id="btn" name="btn"/>
    </div>
</div>   
</form>
<br><br>
<div id="uno">  
    <script>

    var song1 = Array("Politica italiana", "Globalizzazione", "Inquinamento", "Immigrazione", "Trump", "Colonizzare pianeti");

    function randomTopic() {
      var randomTopic = song1[Math.floor(Math.random() * song1.length)];
      document.getElementById('randomTopic').value = randomTopic;
    }
    </script>

    <div>
      <button type="randomTopic" onclick="randomTopic()"> Attualità </button>
      <input class="randomm" name="randomTopic" id="randomTopic">
    </div>
  
</div>

<div id="due">
      <div>
      <button class="random" type="randomTopic2" onclick="randomTopic2()"> Relazioni </button>
      <input name="randomTopic2" id="randomTopic2">
    </div>

    <script>

    var song2 = Array("Rapporti con gli amici", "Fidanzato/a ?", "Ragazzo/a ideale", "Asociale o Festaiolo?", "Chi è per te un vero amico?");

    function randomTopic2() {
      var randomTopic2 = song2[Math.floor(Math.random() * song2.length)];
      document.getElementById('randomTopic2').value = randomTopic2;
    }
    </script>
     </div>
     <div id="tre">
      <div>
      <button class="random" type="randomTopic3" onclick="randomTopic3()"> Progetti Futuri </button>
      <input class="randomm" name="randomTopic3" id="randomTopic3">
    </div>

    <script>

    var song3 = Array("Cosa vorresti studiare?", "Come ti vedi tra 10 anni?", "Vorresti continuare a vivere nel tuo paese?");

    function randomTopic3() {
      var randomTopic3 = song3[Math.floor(Math.random() * song3.length)];
      document.getElementById('randomTopic3').value = randomTopic3;
    }
    </script>
     </div>
     <div id="quattro">
      <div>
      <button class="random" type="randomTopic4" onclick="randomTopic4()"> About you </button>
      <input class="randomm" name="randomTopic4" id="randomTopic4">
    </div>

    <script>

    var song4 = Array("Hobby", "Cantante preferito", "Film preferito", "Colore preferito", "Serie tv preferita", "Come ti descriveresti in poche parole?");

    function randomTopic4() {
      var randomTopic4 = song4[Math.floor(Math.random() * song4.length)];
      document.getElementById('randomTopic4').value = randomTopic4;
    }
    </script>
    </div>
    <div id="cinque">
     <div>
      <button class="random" type="randomTopic5" onclick="randomTopic5()"> Hai mai...?</button>
      <input class="randomm" name="randomTopic5" id="randomTopic5">
     </div>

    <script>

      var song5 = Array("Bevuto fino a stare male?", "Infranto la legge?", "Usato la violenza contro qualcuno?", "Desiderato la donna d'altri?", "Barato durante un esame?");

      function randomTopic5() {
        var randomTopic5 = song5[Math.floor(Math.random() * song5.length)];
        document.getElementById('randomTopic5').value = randomTopic5;
      }
    </script>
    </div>

</div>



</body>
</html>