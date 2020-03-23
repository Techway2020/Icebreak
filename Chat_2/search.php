<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Icebreak</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <style>
   body{
    background: #202a3f;
   }
   .container{
    margin-top: 200px;
   }
   .glyphicon-search{
    font-size: 20px;
   }
   .btn-default{
    background: #008B8B;
    width: 100px;
    padding: 12.5px;
   }
   .form-control{
    padding: 25px;
    font-size: 20px;
   }
   body{
    font-family:"Arial", Serif;
    overflow-x:hidden;
  }

  .navbar{
    background-color:#3b5998;
    overflow:hidden;
    height:63px;
  }

  .navbar a{
    float:left;
    display:block;
    color:#f2f2f2;
    text-align:center;
    padding:14px 16px;
    text-decoration:none;
    font-size:17px;
  }

  .navbar ul{
    margin:8px 0 0 0;
    list-style:none;
  }

  .navbar a:hover{
    background-color:#ddd;
    color:#000;
  }

  .side-nav{
    height:100%;
    width:0;
    position:fixed;
    z-index:1;
    top:0;
    left:0;
    background-color:#111;
    opacity:0.9;
    overflow-x:hidden;
    padding-top:60px;
    transition:0.5s;
  }

  .side-nav a{
    padding:10px 10px 10px 30px;
    text-decoration:none;
    font-size:22px;
    color:#ccc;
    display:block;
    transition:0.3s;
  }

  .side-nav a:hover{
    color:#fff;
  }

  .side-nav .btn-close{
    position:absolute;
    top:0;
    right:22px;
    font-size:36px;
    margin-left:50px;
  }



  @media(max-width:568px){
    .navbar-nav{display:none}
  }

  @media(min-width:568px){
    /*.open-slide{display:none}*/
  }



  </style>
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
    <a href="#">About</a>
    <a href="#">Random Chat</a>
    <a href="#">Search</a>
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



   <div class="container">
    <form>
     <div class="input-group">
      <input type="text" class="form-control" placeholder="Search Users" name="search">
      <div class="input-group-btn">
       <button class="btn btn-default" type="submit" formaction="searching.php">
       <i class="glyphicon glyphicon-search"></i></button>
      </div>
     </div>
    </form>
   </div>


</body>
</html>