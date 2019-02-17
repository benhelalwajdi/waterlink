<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Consommation
 */
class Consommation
{
    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var float
     */
    protected $valeur;

    /**
     * @var float
     */
    protected $total;

    /**
     * @var float
     */
    protected $prix;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idConsommation;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Consommation
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
     * Set valeur
     *
     * @param float $valeur
     *
     * @return Consommation
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return float
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Consommation
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Consommation
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Get idConsommation
     *
     * @return integer
     */
    public function getIdConsommation()
    {
        return $this->idConsommation;
    }
}

