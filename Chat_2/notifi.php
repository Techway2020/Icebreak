<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Side Menu</title>
  <link rel="stylesheet" href="stylemenu.css">
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

   .table_dark {
     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
     font-size: 14px;
     width: 640px;
     text-align: center;
     border-collapse: collapse;
     background: #252F48;  
     margin: 10px;
     margin-left:auto; 
     margin-right:auto;
    }
    .table_dark th {
      color: #EDB749;
      border-bottom: 1px solid #37B5A5;
      padding: 12px 17px;
    }
    .table_dark td {
      color: #CAD4D6;
      border-bottom: 1px solid #37B5A5;
      border-right:1px solid #37B5A5;
      padding: 7px 17px;
    }
    .table_dark tr:last-child td {
      border-bottom: none;
    }
    .table_dark td:last-child {
      border-right: none;
    }
    .table_dark tr:hover td {
      text-decoration: underline;
    }

    .tableid 
    {
        text-align: center;
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
    <a href="search.php">Search</a>
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




</body>
</html>