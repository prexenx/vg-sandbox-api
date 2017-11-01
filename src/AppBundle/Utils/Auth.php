<?php
namespace AppBundle\Utils;
use AppBundle\Entity\MaAccount;
class Auth {
	function isAuth($key){
		$userPass=base64_decode($key);
		$tmp=explode(":", $userPass);
		if(count($tmp)>1)
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	function getUser($key){
		$userPass=base64_decode($key);
		$tmp=explode(":", $userPass);
		$user=$tmp[0];
		return $user;
	}
	function getPassword($key) {
		$userPass=base64_decode($key);
		$tmp=explode(":", $userPass);
		if(count($tmp)>1)
		{
			$pass=$tmp[1];
		}
		else 
		{
			$pass = null;
		}
		return $pass;
	}
}

?>