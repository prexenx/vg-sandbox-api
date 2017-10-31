<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * MaAccount
 *
 * @ORM\Table(name="ma_account")
 * @ORM\Entity
 */
class MaAccount implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT_NAME", type="string", length=80, nullable=true)
     */
    private $accountName;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=300, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD_TOKEN", type="string", length=300, nullable=true)
     */
    private $passwordToken;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set accountName
     *
     * @param string $accountName
     *
     * @return MaAccount
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Get accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    public function getUsername()
    {
    	return $this->accountName;
    }
    
    /**
     * Set password
     *
     * @param string $password
     *
     * @return MaAccount
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set passwordToken
     *
     * @param string $passwordToken
     *
     * @return MaAccount
     */
    public function setPasswordToken($passwordToken)
    {
        $this->passwordToken = $passwordToken;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
    	return array("ROLE_USER");
    }
    
    
    /**
     * Get passwordToken
     *
     * @return string
     */
    public function getPasswordToken()
    {
        return $this->passwordToken;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return MaAccount
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function getSalt()
    {
    	return "";
    }
    
    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }
    
    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
    	return serialize(array(
    			$this->id,
    	));
    }
    
    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
    	list (
    			$this->id,
    	) = unserialize($serialized);
    }
    
        
}
