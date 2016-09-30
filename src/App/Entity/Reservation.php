<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="reservation_guest", columns={"guest_id"}), @ORM\Index(name="reservation_housing", columns={"housing_id"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_in", type="date", nullable=false)
     */
    private $dateIn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_out", type="date", nullable=false)
     */
    private $dateOut;

    /**
     * @var \App\Entity\Guest
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Guest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="guest_id", referencedColumnName="id")
     * })
     */
    private $guest;

    /**
     * @var \App\Entity\Housing
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Housing")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="housing_id", referencedColumnName="id")
     * })
     */
    private $housing;


}

