<html>
<head>
  <title>Your Result is</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
   <header>
         <div class="title">
<h1>YOUR RESULT IS</h1>
</div><div class="main">
<ul>
<li> <a href="home.html">Back to home page</a></li>
<li> <a href="tests.html">Attend other tests</a></li>
</ul>
</div>
<div class="sub">
<h1>
<?php
$count=0;
$total1=0;
if(isset($_POST["a"]))
{
if($_POST["a"]=="b.monday")
  $count=$count+10;
}
if(isset($_POST["b"]))
{
if($_POST["b"]=="b.leaf")
  $count=$count+2;
}
if(isset($_POST["c"]))
{
if($_POST["c"]=="d.eating")
  $count=$count+2;
else
  echo " ";
}
if(isset($_POST["d"]))
{
if($_POST["d"]=="a.Brass")
  $count=$count+2;
}
if(isset($_POST["e"]))
{
if($_POST["e"]=="c.snake")
  $count=$count+2;

}
if(isset($_POST["f"]))
{
if($_POST["f"]=="a.1")
  $count=$count+5;

}
if(isset($_POST["g"]))
{
if($_POST["g"]=="b.2")
  $count=$count+5;

}
if(isset($_POST["h"]))
{
if($_POST["h"]=="a.10")
  $count=$count+5;

}
if(isset($_POST["i"]))
{
if($_POST["i"]=="c.718")
  $count=$count+10;

}
if(isset($_POST["j"]))
{
if($_POST["j"]=="a.true")
  $count=$count+5;

}
if(isset($_POST["k"]))
{
if($_POST["k"]=="b.false")
  $count=$count+5;

}
if(isset($_POST["l"]))
{
if($_POST["l"]=="c.23")
  $count=$count+10;

}
if(isset($_POST["name"]))
{
$total=$count/$_POST["name"];
$total1=$total*100;
}
if (($total1>=0) && ($total1<=50))
echo  "I'm afraid you have a very poor IQ score...keep practicing..I'm sure you will get better soon";

if (($total1>=51) && ($total1<=100))
echo "Congratulations!! Your IQ score is average... your a good thinker and can act smartly.";

if (($total1>=101) && ($total1<=200))
echo "Congratulations!!!! You have secured a high score....You have high capabilities to achieve great heights...You have good
presence of mind and can handle situations smartly.";

if ($total1>200)
echo "Congratulations Your score is brilliant....you have achieved a score which very few will achieve...
You have a fantaboulous thinking capacity and are capable of solving the impossibles..";
 


?>
</h1>

</header>
</body>
</html>


