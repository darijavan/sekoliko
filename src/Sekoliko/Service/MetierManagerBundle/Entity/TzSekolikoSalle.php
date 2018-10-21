<?php

namespace App\Sekoliko\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * SekolikoSalle
 * 
 * @ORM\Table(name="tz_sekoliko_salle")
 * @ORM\Entity
 */
class TzSekolikoSalle
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
     * @ORM\Column(name="tz_sekoliko_salle_numero", type="string", length=100, nullable=true)
     */
    private $_tz_sekoliko_salle_numero;

    /**
     * @var string
     * 
     * @ORM\Column(name="tz_sekoliko_salle_nom", type="string", length=45, nullable=true)
     */
    private $_tz_sekoliko_salle_nom;

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
     * Set salle numero
     * 
     * @param string $tz_sekoliko_salle_numero
     * 
     * @return string
     */
    public function setTzSekolikoSalleNumero($tz_sekoliko_salle_numero)
    {
        return $this->_tz_sekoliko_salle_numero = $tz_sekoliko_salle_numero;
    }

    /**
     * Get salle numero
     * 
     * @return string
     */
    public function getTzSekolikoSalleNumero()
    {
        return $this->_tz_sekoliko_salle_numero;
    }

    /**
     * Set salle nom
     * 
     * @param string $tz_sekoliko_salle_nom
     * 
     * @return string
     */
    public function setTzSekolikoSalleNom($tz_sekoliko_salle_nom)
    {
        return $this->_tz_sekoliko_salle_nom = $tz_sekoliko_salle_nom;
    }

    /**
     * Get salle nom
     * 
     * @return string
     */
    public function getTzSekolikoSalleNom()
    {
        return $this->_tz_sekoliko_salle_nom;
    }
}