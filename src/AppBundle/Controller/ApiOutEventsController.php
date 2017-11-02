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
use AppBundle\Entity\MaOutApiEvents;
use AppBundle\Utils\Auth;
use \DateTime;
class ApiOutEventsController extends FOSRestController
{
	/**
	 * @Rest\Get("/event/")
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
				$events = $this->getDoctrine()
				->getRepository('AppBundle:MaOutApiEvents')
				->findBy(array("account" => $authUser->getId()));
				return $events;				
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
	 * @Rest\Post("/event/")
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
				$date = $request->get('date');
				$action = $request->get('action');
				$result = $request->get('result');
				$payload = $request->get('payload');
				if(empty($date) || empty($action) || empty($result) || empty($payload))
				{
				return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
				}
				else 
				{	
				$event = new MaOutApiEvents();
				$event->setAccount($authUser);
				$event->setAction($action);
				$formato = 'Y-m-d H:i:s';
			    $datef = DateTime::createFromFormat($formato, $request->get('date'));
				$event->setDate($datef);
				$event->setPayload($payload);
				$event->setResult($result);
			    $em = $this->getDoctrine()->getManager();
				$em->persist($event);
				$em->flush();
				return $event;
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
	 * @Rest\Put("/event/")
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
				$id=$request->get('id');
				if(empty($id))
				{
					return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
				}
				else
				{
					$event = $this->getDoctrine()
					->getRepository('AppBundle:MaOutApiEvents')
					->find($id);
					if($event)
					{
						$date = $request->get('date');
						$action = $request->get('action');
						$result = $request->get('result');
						$payload = $request->get('payload');
						if(!empty($date))
						{
							$formato = 'Y-m-d H:i:s';
							$datef = DateTime::createFromFormat($formato, $request->get('date'));
							$event->setDate($datef);
						}
						if(!empty($action))
						{
							$event->setAction($action);
						}
						if(!empty($result))
						{
							$event->setResult($result);
						}
						if(!empty($payload))
						{
							$event->setPayload($payload);
						}
						$em = $this->getDoctrine()->getManager();
						$em->persist($event);
						$em->flush();
						return $event;
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
	 * @Rest\Delete("/event/")
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
				$id=$request->get('id');
				if(empty($id))
				{
					return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
				}
				else
				{
					$event = $this->getDoctrine()
					->getRepository('AppBundle:MaOutApiEvents')
					->find($id);
					if($event)
					{
						$em = $this->getDoctrine()->getManager();
						$em->remove($event);
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