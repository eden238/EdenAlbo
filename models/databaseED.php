<?php 
/**
 * connexion a la bdd
 * @param float 
 * @return pdo
 */ 
function connect_to_bdd(){  
	return new PDO("mysql:host=localhost;port=8080;dbname=resteau;charset=UTF8",'root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
?>
