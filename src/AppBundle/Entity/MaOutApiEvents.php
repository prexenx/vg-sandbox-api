<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaOutApiEvents
 *
 * @ORM\Table(name="ma_out_api_events", indexes={@ORM\Index(name="fk_ma_in_api_events_1_idx", columns={"ACCOUNT_ID"})})
 * @ORM\Entity
 */
class MaOutApiEvents
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTION", type="string", length=80, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=300, nullable=true)
     */
    private $result;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYLOAD", type="string", length=300, nullable=true)
     */
    private $payload;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return MaOutApiEvents
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return MaOutApiEvents
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set result
     *
     * @param string $result
     *
     * @return MaOutApiEvents
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set payload
     *
     * @param string $payload
     *
     * @return MaOutApiEvents
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get payload
     *
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
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
     * @return MaOutApiEvents
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
