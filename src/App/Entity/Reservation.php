<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="reservation_housing", columns={"housing_id"})})
 * @ORM\Entity(repositoryClass="App\Entity\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="date_in", type="date", nullable=false)
     */
    private $dateIn;

    /**
     *
     * @ORM\Column(name="date_out", type="date", nullable=false)
     */
    private $dateOut;

    /**
     *
     * @ORM\Column(name="owner_reservation", type="boolean", nullable=false)
     */
    private $ownerReservation;

    /**
     *
     * @ORM\Column(name="housing_id", type="integer", nullable=false)
     */
    private $housingId;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Housing")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="housing_id", referencedColumnName="id")
     * })
     */
    private $housing;

    public function __construct()
    {
        $this->housing = new ArrayCollection();
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
     * Get dateIn
     *
     * @return Datetime
     */
    public function getDateIn()
    {
        return $this->dateIn;
    }

    /**
     * Get dateOut
     *
     * @return Datetime
     */
    public function getDateOut()
    {
        return $this->dateOut;
    }

    /**
     * Get housingId
     *
     * @return integer
     */
    public function getHousingId()
    {
        return $this->housingId;
    }

    /**
     * Get housing
     *
     * @return ArrayCollection
     */
    public function getHousing()
    {
        return $this->housing;
    }
}

