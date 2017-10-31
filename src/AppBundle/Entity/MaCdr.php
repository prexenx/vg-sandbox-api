<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaCdr
 *
 * @ORM\Table(name="ma_cdr", indexes={@ORM\Index(name="fk_ma_cdr_1_idx", columns={"AGENT_ID"})})
 * @ORM\Entity
 */
class MaCdr
{
    /**
     * @var string
     *
     * @ORM\Column(name="SRC", type="string", length=80, nullable=true)
     */
    private $src;

    /**
     * @var integer
     *
     * @ORM\Column(name="CALL_DURATION_SEC", type="integer", nullable=true)
     */
    private $callDurationSec;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR", type="string", length=100, nullable=true)
     */
    private $dir;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\MaAgent
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MaAgent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AGENT_ID", referencedColumnName="ID")
     * })
     */
    private $agent;



    /**
     * Set src
     *
     * @param string $src
     *
     * @return MaCdr
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set callDurationSec
     *
     * @param integer $callDurationSec
     *
     * @return MaCdr
     */
    public function setCallDurationSec($callDurationSec)
    {
        $this->callDurationSec = $callDurationSec;

        return $this;
    }

    /**
     * Get callDurationSec
     *
     * @return integer
     */
    public function getCallDurationSec()
    {
        return $this->callDurationSec;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return MaCdr
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dir
     *
     * @param string $dir
     *
     * @return MaCdr
     */
    public function setDir($dir)
    {
        $this->dir = $dir;

        return $this;
    }

    /**
     * Get dir
     *
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return MaCdr
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set agent
     *
     * @param \AppBundle\Entity\MaAgent $agent
     *
     * @return MaCdr
     */
    public function setAgent(\AppBundle\Entity\MaAgent $agent = null)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return \AppBundle\Entity\MaAgent
     */
    public function getAgent()
    {
        return $this->agent;
    }
}
