﻿<?phpfunction echoEnter(){    echo '<br />';    //echo '\n';}// open database$db_name = "sqlite:./myDB.sqlite";$db = new PDO($db_name);if ($db){     echo 'connect ok'; }else{     echo 'connect bad'; }echoEnter();$base_table = "baseTable";// translate value to json object$testCaseId = $_POST['testCaseId'];$deviceModel = $_POST['deviceModel'];$baseTableStr = "update $base_table set deviceModel='$deviceModel' WHERE caseID = '$testCaseId'";echo $baseTableStr;//create table$db->exec($baseTableStr);$db = null;include("./showResult.php");echoEnter();echo 'run over'; ?>