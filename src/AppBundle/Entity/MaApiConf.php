<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaApiConf
 *
 * @ORM\Table(name="ma_api_conf", indexes={@ORM\Index(name="fk_ma_api_conf_1_idx", columns={"ACCOUNT_ID"})})
 * @ORM\Entity
 */
class MaApiConf
{
    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=100, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="API_TOKEN", type="string", length=300, nullable=true)
     */
    private $apiToken;

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
     * Set url
     *
     * @param string $url
     *
     * @return MaApiConf
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set apiToken
     *
     * @param string $apiToken
     *
     * @return MaApiConf
     */
    public function setApiToken($apiToken)
    {
        $this->apiToken = $apiToken;

        return $this;
    }

    /**
     * Get apiToken
     *
     * @return string
     */
    public function getApiToken()
    {
        return $this->apiToken;
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
     * @return MaApiConf
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
