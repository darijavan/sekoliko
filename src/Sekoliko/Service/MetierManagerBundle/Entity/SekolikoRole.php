<?php

namespace App\Sekoliko\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SekolikoRole
 *
 * @ORM\Table(name="sekoliko_role")
 * @ORM\Entity
 */
class SekolikoRole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rl_name", type="string", length=45, nullable=true)
     */
    private $rlName;


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
     * Set rlName
     *
     * @param string $rlName
     *
     * @return string
     */
    public function setRlName($rlName)
    {
        $this->rlName = $rlName;

        return $this;
    }

    /**
     * Get rlName
     *
     * @return string
     */
    public function getRlName()
    {
        return $this->rlName;
    }
}
