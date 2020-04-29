<!DOCTYPE html> <html>
 <head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Solar Data Web Tool</title>



    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!-- syntax highlighting CSS -->
    <link rel="stylesheet" href="/static/css/syntax.css">
    <!-- Bootstrap core CSS -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/static/css/super-search.css">
    <link rel="stylesheet" href="/static/css/thickbox.css">
    <link rel="stylesheet" href="/static/css/projects.css">
    <link rel="stylesheet" href="/static/css/main.css">







<!-- -->



</head>


<!-- ***********************-->
<!-- ***********************-->
<!-- ***********************-->
<!-- ***********************-->
<!-- ***********************-->
<body>
  <div class="container">
    <div class="col-sm-3">
      <div class="fixed-condition text-center">
        <a href="/"><img class="profile-avatar" src="/static/img/me.png" height="75px" width="75px" /></a>
        <h4 class="author-name" style="color:rgb(60, 128, 214);"><b>Solar Data Tool</b></h4>

        <hr />
        <ul class="sidebar-nav text-left">
          <strong>Menu</strong>
          <li><a href="/index.html">Home</a></li>
          <li><a class="about" href="/SSN.html">Solar Spot Number</a></li>
          <li><a class="about" href="/SFS.html">Solar Field Strenght</a></li>
          <li><a class="about" href="/Tilt.html">Tilt Angle</a></li>
          <li><a class="about" href="/SolarSmoothed.html">SSN Smoothed & Monthly</a></li>
<li><a class="about" href="/Resources.html">Resources</a></li>         
 <li><a class="about" href="/Neutron.html">Neutron Monitor</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-8 col-offset-1 main-layout">

<!-- INSERIRE QUI IL CODICE-->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<center><h3 style="color:rgb(60, 128, 214);"><b>Stations</b></h3></center>

<!-- $line =<?php echo $_POST["name"]; ?> 
echo $line;
$stations = explode(" ", $line);
$result = sizeof($stations);

$myfile = fopen("NM_Set1.txt", "w") or die("Unable to open file!");
for ($i = 0; $i < $result; $i++) {
 $txt = $stations[$i];
 fwrite($myfile, $txt);
 fwrite($myfile, "\n");
}

-->
<?php
$line = $_POST["name"];
echo $line;
$stations = explode(" ", $line);                                                
$result = sizeof($stations);                                                    
                                                                            
$myfile = fopen("NM_Set1.txt", "w") or die("Unable to open file!");             for ($i = 0; $i < $result; $i++) {                                              
 $txt = $stations[$i];                                                          
 fwrite($myfile, $txt);                                                         
 fwrite($myfile, "\n");                                                         
}
echo $message;
echo "\n COMPLETED"; 
exec("sudo  mkdir DAVID346");
?>                                                                 
<!-- $stations = explode(" ", $line);                                               
$result = sizeof($stations);                                                                                                                                
$myfile = fopen("NM_Set1.txt", "w") or die("Unable to open file!");            
for ($i = 0; $i < $result; $i++) {                                             
 $txt = $stations[$i];                                                         
 fwrite($myfile, $txt);                                                       
 fwrite($myfile, "\n");      
?> -->

<!-- fine codice e inizio del Footer-->
      <footer>
        <!--  &copy; {{ site.author }} -->
         <a href="mailto:david.53211@gmail.com">David Pelosi</a> - Build by JSROOT.
      </footer>
    </div>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>

</html>
   
