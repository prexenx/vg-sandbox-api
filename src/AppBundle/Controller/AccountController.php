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
use AppBundle\Entity\MaInApiEvents;
use AppBundle\Utils\Auth;
use Symfony\Component\Validator\Constraint;
use \DateTime;
class AccountController extends FOSRestController
{
	/**
	 * @Rest\Get("/account/{accountName}")
	*/
	public function getAction($accountName, Request $request)
	{
		$key=$request->headers->get('auth');
		$auth = new Auth();
		if($auth->isAuth($key))
		{
			$authUser = $this->getDoctrine()
			->getRepository('AppBundle:MaAccount')
			->findOneBy(array("accountName" => $auth->getUser($key)));
			if(!$authUser)
			{
				$event = new MaInApiEvents();
				$event->setAccount($authUser);
				$event->setAction("GET /account/");
				$eDate = new DateTime();
				$event->setDate($eDate);
				$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
				$event->setResult("Auth fail - HTTP_FORBIDDEN");
				$em = $this->getDoctrine()->getManager();
				$em->persist($event);
				$em->flush();
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
			$factory = $this->get('security.encoder_factory');
			$encoder = $factory->getEncoder($authUser);
			$password = $encoder->encodePassword($auth->getPassword($key), $authUser->getSalt());
			
			if($password == $authUser->getPassword())
			{	
				//IF AUTH SUCCESS MAKE YOUR STUFF
				$userObj = $this->getDoctrine()
				->getRepository('AppBundle:MaAccount')
				->findOneBy(array("accountName" => $accountName));
				$event = new MaInApiEvents();
				$event->setAccount($authUser);
				$event->setAction("GET /account/");
				$eDate = new DateTime();
				$event->setDate($eDate);
				$event->setPayload("{ user :".$auth->getUser($key).", password : ***, accountName : ".$accountName." }");
				$event->setResult("Success - HTTP_OK");
				$em = $this->getDoctrine()->getManager();
				$em->persist($event);
				$em->flush();
				return $userObj;
			}
			else
			{
				$event = new MaInApiEvents();
				$event->setAccount($authUser);
				$event->setAction("GET /account/");
				$eDate = new DateTime();
				$event->setDate($eDate);
				$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
				$event->setResult("Auth fail - HTTP_FORBIDDEN");
				$em = $this->getDoctrine()->getManager();
				$em->persist($event);
				$em->flush();
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}	
		}
		else 
		{
			$event = new MaInApiEvents();
			$event->setAccount($authUser);
			$event->setAction("GET /account/");
			$eDate = new DateTime();
			$event->setDate($eDate);
			$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
			$event->setResult("Auth fail - HTTP_FORBIDDEN");
			$em = $this->getDoctrine()->getManager();
			$em->persist($event);
			$em->flush();
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}
	
	}
	/**
	 * @Rest\Post("/account/")
	 */
	public function postAction(Request $request)
	{
		$key=$request->headers->get('auth');
		$auth = new Auth();
		if($auth->isAuth($key))
		{
			$authUser = $this->getDoctrine()
			->getRepository('AppBundle:MaAccount')
			->findOneBy(array("accountName" => $auth->getUser($key)));
			if(!$authUser)
			{
				$event = new MaInApiEvents();
				$event->setAccount($authUser);
				$event->setAction("POST /account/");
				$eDate = new DateTime();
				$event->setDate($eDate);
				$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
				$event->setResult("Auth fail - HTTP_FORBIDDEN");
				$em = $this->getDoctrine()->getManager();
				$em->persist($event);
				$em->flush();
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
			$factory = $this->get('security.encoder_factory');
			$encoder = $factory->getEncoder($authUser);
			$password = $encoder->encodePassword($auth->getPassword($key), $authUser->getSalt());
				
			if($password == $authUser->getPassword())
			{
				//IF AUTH SUCCESS MAKE YOUR STUFF
				$accountName = $request->get('accountName');
				$newPassword =  $request->get('password');
				$passToken = $request->get('token');
				$email = $request->get('email');
				if(empty($accountName) || empty($newPassword) || empty($passToken) || empty($email))
				{
					$event = new MaInApiEvents();
					$event->setAccount($authUser);
					$event->setAction("POST /account/");
					$eDate = new DateTime();
					$event->setDate($eDate);
					$event->setPayload("{ user :".$auth->getUser($key).", password : ***},{ accountName : ".$accountName.", password : ".$newPassword.", token : ".$passToken.", email :".$email."}");
					$event->setResult("NULL VALUES ARE NOT ALLOWED - HTTP_NOT_ACCEPTABLE");
					$em = $this->getDoctrine()->getManager();
					$em->persist($event);
					$em->flush();
					return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
				}
				else 
				{
				$newAccount = new MaAccount();
				$newAccount->setAccountName($accountName);
				$newAccount->setPassword($encoder->encodePassword($newPassword, $authUser->getSalt()));
				$newAccount->setPasswordToken($passToken);
				$newAccount->setEmail($email);
				$em = $this->getDoctrine()->getManager();
				$em->persist($newAccount);
				$em->flush();
				
				$event = new MaInApiEvents();
				$event->setAccount($authUser);
				$event->setAction("POST /account/");
				$eDate = new DateTime();
				$event->setDate($eDate);
				$event->setPayload("{ user :".$auth->getUser($key).", password : ***},{ accountName : ".$newAccount->getUsername().", password : ".$newAccount->getPassword().", token : ".$newAccount->getPasswordToken().", email :".$newAccount->getEmail()."}");
				$event->setResult("Success - HTTP_OK");
				$em = $this->getDoctrine()->getManager();
				$em->persist($event);
				$em->flush();
				return $newAccount;
				}
			}
			else
			{
				$event = new MaInApiEvents();
				$event->setAccount($authUser);
				$event->setAction("POST /account/");
				$eDate = new DateTime();
				$event->setDate($eDate);
				$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
				$event->setResult("Auth fail - HTTP_FORBIDDEN");
				$em = $this->getDoctrine()->getManager();
				$em->persist($event);
				$em->flush();
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
		}
		else
		{
			$event = new MaInApiEvents();
			$event->setAccount($authUser);
			$event->setAction("POST /account/");
			$eDate = new DateTime();
			$event->setDate($eDate);
			$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
			$event->setResult("Auth fail - HTTP_FORBIDDEN");
			$em = $this->getDoctrine()->getManager();
			$em->persist($event);
			$em->flush();
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}
	}
	/**
	 * @Rest\Put("/account/")
	 */
	public function putAction(Request $request)
	{
		$key=$request->headers->get('auth');
		$auth = new Auth();
		if($auth->isAuth($key))
		{
			$authUser = $this->getDoctrine()
			->getRepository('AppBundle:MaAccount')
			->findOneBy(array("accountName" => $auth->getUser($key)));
			if(!$authUser)
			{
				$event = new MaInApiEvents();
				$event->setAccount($authUser);
				$event->setAction("PUT /account/");
				$eDate = new DateTime();
				$event->setDate($eDate);
				$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
				$event->setResult("Auth fail - HTTP_FORBIDDEN");
				$em = $this->getDoctrine()->getManager();
				$em->persist($event);
				$em->flush();
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
			$factory = $this->get('security.encoder_factory');
			$encoder = $factory->getEncoder($authUser);
			$password = $encoder->encodePassword($auth->getPassword($key), $authUser->getSalt());
				
			if($password == $authUser->getPassword())
			{
				//IF AUTH SUCCESS MAKE YOUR STUFF
				$accountName =  $request->get('accountName');
				$newPassword =  $request->get('password');
				$passToken = $request->get('token');
				$email = $request->get('email');
				if(!empty($accountName))
				{
					$userObj = $this->getDoctrine()
					->getRepository('AppBundle:MaAccount')
					->findOneBy(array("accountName" => $accountName));
				    if($userObj)
				    {	
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
						
						$event = new MaInApiEvents();
						$event->setAccount($authUser);
						$event->setAction("PUT /account/");
						$eDate = new DateTime();
						$event->setDate($eDate);
						$event->setPayload("{ user :".$auth->getUser($key).", password : ***},{ accountName : ".$userObj->getUsername().", password : ".$userObj->getPassword().", token : ".$userObj->getPasswordToken().", email :".$userObj->getEmail()."}");
						$event->setResult("Success - HTTP_OK");
						$em = $this->getDoctrine()->getManager();
						$em->persist($event);
						$em->flush();
						
						return $userObj;
				    }
				    else 
				    {
				    	$event = new MaInApiEvents();
				    	$event->setAccount($authUser);
				    	$event->setAction("PUT /account/");
				    	$eDate = new DateTime();
				    	$event->setDate($eDate);
				    	$event->setPayload("{ user :".$auth->getUser($key).", password : ***},{ accountName : ".$accountName."}");
				    	$event->setResult("Invalid parameters - HTTP_NOT_FOUND");
				    	$em = $this->getDoctrine()->getManager();
				    	$em->persist($event);
				    	$em->flush();
				    	return new View("Invalid parameters", Response::HTTP_NOT_FOUND);
				    }
				}
				else 
				{
					$event = new MaInApiEvents();
					$event->setAccount($authUser);
					$event->setAction("PUT /account/");
					$eDate = new DateTime();
					$event->setDate($eDate);
					$event->setPayload("{ user :".$auth->getUser($key).", password : ***},{ accountName : ".$accountName."}");
					$event->setResult("Invalid parameters - HTTP_NOT_FOUND");
					$em = $this->getDoctrine()->getManager();
					$em->persist($event);
					$em->flush();
					return new View("Invalid parameters", Response::HTTP_NOT_FOUND);
				}
			}
			else
			{
				$event = new MaInApiEvents();
				$event->setAccount($authUser);
				$event->setAction("PUT /account/");
				$eDate = new DateTime();
				$event->setDate($eDate);
				$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
				$event->setResult("Auth fail - HTTP_FORBIDDEN");
				$em = $this->getDoctrine()->getManager();
				$em->persist($event);
				$em->flush();
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
		}
		else
		{
			$event = new MaInApiEvents();
			$event->setAccount($authUser);
			$event->setAction("PUT /account/");
			$eDate = new DateTime();
			$event->setDate($eDate);
			$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
			$event->setResult("Auth fail - HTTP_FORBIDDEN");
			$em = $this->getDoctrine()->getManager();
			$em->persist($event);
			$em->flush();
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}	
	}
	/**
	 * @Rest\Delete("/account/")
	 */
	public function deleteAction(Request $request)
	{
		$key=$request->headers->get('auth');
		$auth = new Auth();
		if($auth->isAuth($key))
		{
			$authUser = $this->getDoctrine()
			->getRepository('AppBundle:MaAccount')
			->findOneBy(array("accountName" => $auth->getUser($key)));
			if(!$authUser)
			{
				$event = new MaInApiEvents();
				$event->setAccount($authUser);
				$event->setAction("DELETE /account/");
				$eDate = new DateTime();
				$event->setDate($eDate);
				$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
				$event->setResult("Auth fail - HTTP_FORBIDDEN");
				$em = $this->getDoctrine()->getManager();
				$em->persist($event);
				$em->flush();
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
			$factory = $this->get('security.encoder_factory');
			$encoder = $factory->getEncoder($authUser);
			$password = $encoder->encodePassword($auth->getPassword($key), $authUser->getSalt());
				
			if($password == $authUser->getPassword())
			{
				//IF AUTH SUCCESS MAKE YOUR STUFF
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
				
						$event = new MaInApiEvents();
						$event->setAccount($authUser);
						$event->setAction("DELETE /account/");
						$eDate = new DateTime();
						$event->setDate($eDate);
						$event->setPayload("{ user :".$auth->getUser($key).", password : ***},{ accountName : ".$accountName."}");
						$event->setResult("Success - HTTP_OK");
						$em = $this->getDoctrine()->getManager();
						$em->persist($event);
						$em->flush();
						
						return new View("deleted successfuly", Response::HTTP_OK);
					}
					else 
					{
						$event = new MaInApiEvents();
						$event->setAccount($authUser);
						$event->setAction("DELETE /account/");
						$eDate = new DateTime();
						$event->setDate($eDate);
						$event->setPayload("{ user :".$auth->getUser($key).", password : ***},{ accountName : ".$accountName."}");
						$event->setResult("Invalid parameters - HTTP_NOT_FOUND");
						$em = $this->getDoctrine()->getManager();
						$em->persist($event);
						$em->flush();
						return new View("No user found", Response::HTTP_NOT_FOUND);
					}
				}
				else
				{
					$event = new MaInApiEvents();
					$event->setAccount($authUser);
					$event->setAction("DELETE /account/");
					$eDate = new DateTime();
					$event->setDate($eDate);
					$event->setPayload("{ user :".$auth->getUser($key).", password : ***},{ accountName : ".$accountName."}");
					$event->setResult("Invalid parameters - HTTP_NOT_FOUND");
					$em = $this->getDoctrine()->getManager();
					$em->persist($event);
					$em->flush();
					return new View("No user found", Response::HTTP_NOT_FOUND);
				}
			}
			else
			{
				$event = new MaInApiEvents();
				$event->setAccount($authUser);
				$event->setAction("DELETE /account/");
				$eDate = new DateTime();
				$event->setDate($eDate);
				$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
				$event->setResult("Auth fail - HTTP_FORBIDDEN");
				$em = $this->getDoctrine()->getManager();
				$em->persist($event);
				$em->flush();
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
		}
		else
		{
			$event = new MaInApiEvents();
			$event->setAccount($authUser);
			$event->setAction("DELETE /account/");
			$eDate = new DateTime();
			$event->setDate($eDate);
			$event->setPayload("{ user :".$auth->getUser($key).", password : ***}");
			$event->setResult("Auth fail - HTTP_FORBIDDEN");
			$em = $this->getDoctrine()->getManager();
			$em->persist($event);
			$em->flush();
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}
	
	}
}
?>