<?php

echo $_POST["nome"];
echo "<br>";
echo $_POST["cognome"];
echo "<br>";
echo $_POST["mail"];
echo "<br>";
echo $_POST["pwd"];
echo "<br>";
echo $_POST["d_nascita"];

echo"<br>";

/*if (strtolower($_POST["nome"]) == "pasquale"){
    echo "Puoi entrare";
}else{
    echo "Non puoi entrare";
} */

echo"<br>";

//Verifico se la mail e la password sono corrette
if(strtolower($_POST["mail"])=="uno@mail.it" && md5($_POST["pwd"]) == "202cb962ac59075b964b07152d234b70"){
    echo "Benvenuto";
}else{
    echo "Nome o Password errati";
}
?>