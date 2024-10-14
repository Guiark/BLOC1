<div>
    <a href='?nb=1&msg=Test'>Test (1x)</a>
</div>
<div>
    <a href='?nb=5&msg=Test'>Pas Test (5x)</a>
</div>
<?php
$i=0;
$nb=$_GET['nb']??1;
$msg=$_GET['msg']??'Hello all!';
$isImg=isset($_GET['img']);
echo "<h1>";

do{
    if($isImg){
        echo "<img src='$msg'>";
    }else{
        echo "$msg<br>";
    }
    $i++;
}while($i<$nb);
echo"</h1>";





