<?php

// echo "The Total Number of trees in Masaka and Kabale are ".$totalTrees." trees.<br>";

 if (isset($_COOKIE["theTrees"])){
    echo "<br>The cookie set is ".$_COOKIE["theTrees"];
}else{
    echo "<br>No cookie set.<br>";
}

 //echo $_COOKIE["theTrees"];

echo "<br>The total number of masabu trees are ".$totMasabuTrees." trees<br>";


if (isset($_SESSION["$totMasabuTrees"])){
    echo "<br>The session set is ".$_SESSION["$totMasabuTrees"];
}else{
    echo "<br>A session is not set<br>."

}

echo "The total number of trees in masaka are ".$totalTrees1." trees.<br>";

echo "The total number of trees in kabale are ".$totalTrees2." trees.<br>";

?>