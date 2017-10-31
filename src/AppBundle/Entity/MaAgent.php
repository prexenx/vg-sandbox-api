<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaAgent
 *
 * @ORM\Table(name="ma_agent", indexes={@ORM\Index(name="fk_ma_agent_1_idx", columns={"ACCOUNT_ID"})})
 * @ORM\Entity
 */
class MaAgent
{
    /**
     * @var string
     *
     * @ORM\Column(name="USER", type="string", length=100, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=300, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="SIP_SERVER", type="string", length=300, nullable=true)
     */
    private $sipServer;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\MaAccount
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MaAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ACCOUNT_ID", referencedColumnName="ID")
     * })
     */
    private $account;



    /**
     * Set user
     *
     * @param string $user
     *
     * @return MaAgent
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return MaAgent
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
     * Set sipServer
     *
     * @param string $sipServer
     *
     * @return MaAgent
     */
    public function setSipServer($sipServer)
    {
        $this->sipServer = $sipServer;

        return $this;
    }

    /**
     * Get sipServer
     *
     * @return string
     */
    public function getSipServer()
    {
        return $this->sipServer;
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

    /**
     * Set account
     *
     * @param \AppBundle\Entity\MaAccount $account
     *
     * @return MaAgent
     */
    public function setAccount(\AppBundle\Entity\MaAccount $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \AppBundle\Entity\MaAccount
     */
    public function getAccount()
    {
        return $this->account;
    }
}
