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
use AppBundle\Entity\MaCdr;
use AppBundle\Utils\Auth;
use \DateTime;
use Symfony\Component\Validator\Constraint;

class CdrController extends FOSRestController
{
	/**
	 * @Rest\Get("/cdr/{user}")
	 */
	public function getAction($user, Request $request)
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
				$agent = $this->getDoctrine()
				->getRepository('AppBundle:MaAgent')
				->findOneBy(array("account" => $authUser->getId(), "user" => $user));
				
				if($agent) 
				{	
					$cdr = $this->getDoctrine()
					->getRepository('AppBundle:MaCdr')
					->findBy(array("agent" => $agent->getId()));
					return $cdr;
				}
				else 
				{
					return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
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
	 * @Rest\Post("/cdr/{user}")
	 */
	public function postAction($user, Request $request)
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
				$agent = $this->getDoctrine()
				->getRepository('AppBundle:MaAgent')
				->findOneBy(array("account" => $authUser->getId(), "user" => $user));
		
				if($agent)
				{
					$src = $request->get('src');
					$billSec = $request->get('billSec');
					$status = $request->get('status');
					$formato = 'Y-m-d H:i:s';
					$date = DateTime::createFromFormat($formato, $request->get('date'));
					$dir = $request->get('dir');
					if(empty($src) || empty($billSec) || empty($status) || empty($date) || empty($dir))
					{
						return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
					}
					$cdr = new MaCdr();
					$cdr->setAgent($agent);
					$cdr->setCallDurationSec($billSec);
					
					$cdr->setDate($date);
					$cdr->setDir($dir);
					$cdr->setSrc($src);
					$cdr->setStatus($status);
					
					$em = $this->getDoctrine()->getManager();
					$em->persist($cdr);
					$em->flush();
					return $cdr;
				}
				else
				{
					return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
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
	 * @Rest\Put("/cdr/{user}")
	 */
	public function putAction($user, Request $request)
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
				$agent = $this->getDoctrine()
				->getRepository('AppBundle:MaAgent')
				->findOneBy(array("account" => $authUser->getId(), "user" => $user));
		
				if($agent)
				{
					$id = $request->get('id');
					$cdr = $this->getDoctrine()
					->getRepository('AppBundle:MaCdr')
					->find($id);
					if($cdr)
					{
						$src = $request->get('src');
						$billSec = $request->get('billSec');
						$status = $request->get('status');
						$date = $request->get('date');
						$dir = $request->get('dir');
						if(!empty($src))
						{
							$cdr = new MaCdr();
							$cdr->setSrc($src);
						}
						if(!empty($billSec))
						{
							$cdr->setCallDurationSec($billSec);
						}
						if(!empty($status))
						{
							$cdr->setStatus($status);
						}
						if(!empty($date))
						{
							$formato = 'Y-m-d H:i:s';
							$datef = DateTime::createFromFormat($formato, $request->get('date'));
							$cdr->setDate($datef);
						}
						if(!empty($dir))
						{
							$cdr->setDir($dir);
						}
						$em = $this->getDoctrine()->getManager();
						$em->persist($cdr);
						$em->flush();
						return $cdr;
					}
					else
					{
						return new View("NO VALID", Response::HTTP_NOT_ACCEPTABLE);
					}
				}
				else
				{
					return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
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
	 * @Rest\Delete("/cdr/{user}")
	 */
	public function deleteAction($user, Request $request)
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
				$agent = $this->getDoctrine()
				->getRepository('AppBundle:MaAgent')
				->findOneBy(array("account" => $authUser->getId(), "user" => $user));
		
				if($agent)
				{
					$id = $request->get('id');
					$cdr = $this->getDoctrine()
					->getRepository('AppBundle:MaCdr')
					->find($id);
					if($cdr)
					{
						
						$em = $this->getDoctrine()->getManager();
						$em->remove($cdr);
						$em->flush();
						return new View("deleted successfuly", Response::HTTP_OK);
					}
					else
					{
						return new View("NO VALID", Response::HTTP_NOT_ACCEPTABLE);
					}
				}
				else
				{
					return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
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
