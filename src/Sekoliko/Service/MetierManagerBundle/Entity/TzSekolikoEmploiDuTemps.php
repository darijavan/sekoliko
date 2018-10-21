<?php

namespace App\Sekoliko\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * SekolikoEmploiDuTemps
 * 
 * @ORM\Table(name="tz_sekoliko_edt")
 * @ORM\Entity
 */
class TzSekolikoEmploiDuTemps
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
     * @var \Datetime
     * 
     * @ORM\Column(name="tz_sekoliko_edt_heure_debut", type="datetime", nullable=true)
     */
    private $_tz_sekoliko_edt_heure_debut;

    /**
     * @var \Datetime
     * 
     * @ORM\Column(name="tz_sekoliko_edt_heure_fin", type="datetime", nullable=true)
     */
    private $_tz_sekoliko_edt_heure_fin;

    /**
     * @return integer
     */
    public function getId() {
        return $id;
    }

    /**
     * @param integer $id
     * 
     * @return integer
     */
    public function setId($id) {
        return $this->id = $id;
    }

    /**
     * @return \Datetime
     */
    public function getTzSekolikoEdtHeureDebut() {
        return $_tz_sekoliko_edt_heure_debut;
    }

    /**
     * @param \Datetime $tz_sekoliko_edt_heure_debut
     * 
     * @return \Datetime
     */
    public function setTzSekolikoEdtHeureDebut( $tz_sekoliko_edt_heure_debut) {
        return $this->_tz_sekoliko_edt_heure_debut = $tz_sekoliko_edt_heure_debut;
    }

    /**
     * @return  return the $_tz_sekoliko_edt_heure_fin
     */
    public function getTzSekolikoEdtHeureFin() {
        return $_tz_sekoliko_edt_heure_fin;
    }

    /**
     * @param \Datetime $tz_sekoliko_edt_heure_fin
     * 
     * @return \Datetime
     */
    public function setTzSekolikoEdtHeureFin($tz_sekoliko_edt_heure_fin) {
        $this->_tz_sekoliko_edt_heure_fin = $tz_sekoliko_edt_heure_fin;
    }
}