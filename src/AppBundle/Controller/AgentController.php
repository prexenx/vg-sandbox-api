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
use AppBundle\Entity\MaAgent;
use AppBundle\Utils\Auth;

class AgentController extends FOSRestController
{
	/**
	 * @Rest\Get("/agent/")
	 */
	public function getAction(Request $request)
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
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
			$factory = $this->get('security.encoder_factory');
			$encoder = $factory->getEncoder($authUser);
			$password = $encoder->encodePassword($auth->getPassword($key), $authUser->getSalt());
				
			if($password == $authUser->getPassword())
			{
				//IF AUTH SUCCESS MAKE YOUR STUFF
				if($request->get('user') == null)
				{
					$agents = $this->getDoctrine()
					->getRepository('AppBundle:MaAgent')
					->findBy(array("account" => $authUser->getId()));
					return $agents;
				}
				else 
				{
					$agents = $this->getDoctrine()
					->getRepository('AppBundle:MaAgent')
					->findOneBy(array("account" => $authUser->getId(), "user" => $request->get('user')));
					return $agents;
				}
			}
			else
			{
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
		}
		else
		{
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}
	}

	/**
	 * @Rest\Post("/agent/")
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
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
			$factory = $this->get('security.encoder_factory');
			$encoder = $factory->getEncoder($authUser);
			$password = $encoder->encodePassword($auth->getPassword($key), $authUser->getSalt());
				
			if($password == $authUser->getPassword())
			{
				//IF AUTH SUCCESS MAKE YOUR STUFF
				$user = $request->get('user');
				$pass = $request->get('password');
				$server = $request->get('sipServer');
				if(empty($user) || empty($pass) || empty($server))
				{
				return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
				}
				else 
				{	
				$agent = new MaAgent();
				$agent->setAccount($authUser);
				$agent->setPassword($pass);
				$agent->setUser($user);
				$agent->setSipServer($server);
				$em = $this->getDoctrine()->getManager();
				$em->persist($agent);
				$em->flush();
				return $agent;
				}
			}
			else
			{
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
		}
		else
		{
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}
	}
	/**
	 * @Rest\Put("/agent/")
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
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
			$factory = $this->get('security.encoder_factory');
			$encoder = $factory->getEncoder($authUser);
			$password = $encoder->encodePassword($auth->getPassword($key), $authUser->getSalt());
				
			if($password == $authUser->getPassword())
			{
				//IF AUTH SUCCESS MAKE YOUR STUFF
				$user=$request->get('user');
				if(empty($user))
				{
					return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
				}
				else
				{
					$agent = $this->getDoctrine()
					->getRepository('AppBundle:MaAgent')
					->findOneBy(array("account" => $authUser->getId(), "user" => $user));
					if($agent)
					{
						$pass = $request->get('password');
						$server = $request->get('sipServer');
						if(!empty($pass))
						{
							$agent->setPassword($pass);
						}
						if(!empty($server))
						{
							$agent->setSipServer($server);
						}
						$em = $this->getDoctrine()->getManager();
						$em->persist($agent);
						$em->flush();
						return $agent;
					}
					else
					{
						return new View("No user found", Response::HTTP_NOT_FOUND);
					}
				}
			}
			else
			{
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
		}
		else
		{
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}
		
	}
	/**
	 * @Rest\Delete("/agent/")
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
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
			$factory = $this->get('security.encoder_factory');
			$encoder = $factory->getEncoder($authUser);
			$password = $encoder->encodePassword($auth->getPassword($key), $authUser->getSalt());
		
			if($password == $authUser->getPassword())
			{
				//IF AUTH SUCCESS MAKE YOUR STUFF
				$user=$request->get('user');
				if(empty($user))
				{
					return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
				}
				else
				{
					$agent = $this->getDoctrine()
					->getRepository('AppBundle:MaAgent')
					->findOneBy(array("account" => $authUser->getId(), "user" => $user));
					if($agent)
					{
						$em = $this->getDoctrine()->getManager();
						$em->remove($agent);
						$em->flush();
						return new View("deleted successfuly", Response::HTTP_OK);
					}
					else
					{
						return new View("No user found", Response::HTTP_NOT_FOUND);
					}
				}
			}
			else
			{
				return new View("Auth fail", Response::HTTP_FORBIDDEN);
			}
		}
		else
		{
			return new View("Auth fail", Response::HTTP_FORBIDDEN);
		}
		
	
	}
}
?>
