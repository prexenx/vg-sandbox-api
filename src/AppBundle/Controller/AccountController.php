<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\MaAccount;

class AccountController extends FOSRestController
{
	/**
	 * @Rest\Get("/account/{key}")
	*/
	public function getAction($key)
	{
		$userPass=base64_decode($key);
		$tmp=explode(":", $userPass);
		$user=$tmp[0];
		if(count($tmp)>1)
		{	
		$pass=$tmp[1];
		}
		$userObj = $this->getDoctrine()
		->getRepository('AppBundle:MaAccount')
		->findOneBy(array("accountName" => $user));
		if ($userObj === null) {
			return new View("there are no users exist", Response::HTTP_NOT_FOUND);
		}
		$factory = $this->get('security.encoder_factory');
		$encoder = $factory->getEncoder($userObj);
		$password = $encoder->encodePassword($pass, $userObj->getSalt());
		if($userObj->getPassword() == $password)
		{
			return $userObj;
		}
		else 
		{
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}
		
	}
	/**
	 * @Rest\Post("/account/")
	 */
	public function postAction(Request $request)
	{
		$newAccount = new MaAccount();
		$key = $request->get('key');
		$userPass=base64_decode($key);
		$tmp=explode(":", $userPass);
		$user=$tmp[0];
	    if(count($tmp)>1)
		{	
		$pass=$tmp[1];
		}
		$userObj = $this->getDoctrine()
		->getRepository('AppBundle:MaAccount')
		->findOneBy(array("accountName" => $user));
		if ($userObj === null) {
			return new View("there are no users exist", Response::HTTP_NOT_FOUND);
		}
		$factory = $this->get('security.encoder_factory');
		$encoder = $factory->getEncoder($userObj);
		$password = $encoder->encodePassword($pass, $userObj->getSalt());
		if($userObj->getPassword() == $password)
		{
			$accountName = $request->get('accountName');
			$newPassword =  $request->get('password');
			$passToken = $request->get('token');
			$email = $request->get('email');
			if(empty($accountName) || empty($newPassword) || empty($passToken) || empty($email))
			{
				return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
			}
			else 
			{
				$newAccount->setAccountName($accountName);
				$newAccount->setPassword($encoder->encodePassword($newPassword, $userObj->getSalt()));
				$newAccount->setPasswordToken($passToken);
				$newAccount->setEmail($email);
				$em = $this->getDoctrine()->getManager();
				$em->persist($newAccount);
				$em->flush();
				return $newAccount;
			}
		}
		else
		{
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}
	
	}
	/**
	 * @Rest\Put("/account/")
	 */
	public function putAction(Request $request)
	{
		$key = $request->get('key');
		$userPass=base64_decode($key);
		$tmp=explode(":", $userPass);
		$user=$tmp[0];
	    if(count($tmp)>1)
		{	
		$pass=$tmp[1];
		}
		$userObj = $this->getDoctrine()
		->getRepository('AppBundle:MaAccount')
		->findOneBy(array("accountName" => $user));
		if ($userObj === null) {
			return new View("there are no users exist", Response::HTTP_NOT_FOUND);
		}
		$factory = $this->get('security.encoder_factory');
		$encoder = $factory->getEncoder($userObj);
		$password = $encoder->encodePassword($pass, $userObj->getSalt());
		if($userObj->getPassword() == $password)
		{
			$accountName =  $request->get('accountName');
			$newPassword =  $request->get('password');
			$passToken = $request->get('token');
			$email = $request->get('email');
			if(!empty($accountName))
			{
				$userObj = $this->getDoctrine()
				->getRepository('AppBundle:MaAccount')
				->findOneBy(array("accountName" => $accountName));
			}
			if(!empty($newPassword))
			{
				$userObj->setPassword($encoder->encodePassword($newPassword, $userObj->getSalt()));
			}
			if(!empty($passToken))
			{
				$userObj->setPasswordToken($passToken);
			}
			if(!empty($passToken))
			{
				$userObj->setEmail($email);
			}
			$em = $this->getDoctrine()->getManager();
			$em->persist($userObj);
			$em->flush();
			return $userObj;
		}
		else
		{
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}
	
	}
	/**
	 * @Rest\Delete("/account/")
	 */
	public function deleteAction(Request $request)
	{
		$key = $request->get('key');
		$userPass=base64_decode($key);
		$tmp=explode(":", $userPass);
		$user=$tmp[0];
		if(count($tmp)>1)
		{
			$pass=$tmp[1];
		}
		$userObj = $this->getDoctrine()
		->getRepository('AppBundle:MaAccount')
		->findOneBy(array("accountName" => $user));
		if ($userObj === null) {
			return new View("there are no users exist", Response::HTTP_NOT_FOUND);
		}
		$factory = $this->get('security.encoder_factory');
		$encoder = $factory->getEncoder($userObj);
		$password = $encoder->encodePassword($pass, $userObj->getSalt());
		if($userObj->getPassword() == $password)
		{
			$accountName =  $request->get('accountName');
			if(!empty($accountName))
			{
				$userObj = $this->getDoctrine()
				->getRepository('AppBundle:MaAccount')
				->findOneBy(array("accountName" => $accountName));
			
			if($userObj)
			{	
				$em = $this->getDoctrine()->getManager();
				$em->remove($userObj);
				$em->flush();
				
				return new View("deleted successfuly", Response::HTTP_OK);
			}
			else 
			{
				return new View("there are no users exist", Response::HTTP_NOT_FOUND);
			}
			}
			else
			{
				return new View("there are no users exist", Response::HTTP_NOT_FOUND);
			}
			
		}
		else
		{
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}
	
	}
}
?>