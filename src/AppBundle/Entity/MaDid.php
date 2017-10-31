<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaDid
 *
 * @ORM\Table(name="ma_did", indexes={@ORM\Index(name="fk_ma_did_1_idx", columns={"ACCOUNT_ID"})})
 * @ORM\Entity
 */
class MaDid
{
    /**
     * @var string
     *
     * @ORM\Column(name="DID", type="string", length=80, nullable=true)
     */
    private $did;

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
     * Set did
     *
     * @param string $did
     *
     * @return MaDid
     */
    public function setDid($did)
    {
        $this->did = $did;

        return $this;
    }

    /**
     * Get did
     *
     * @return string
     */
    public function getDid()
    {
        return $this->did;
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
     * @return MaDid
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
