<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Housing
 *
 * @ORM\Table(name="housing", indexes={@ORM\Index(name="housing_prices", columns={"prices_id"}), @ORM\Index(name="room_room_type", columns={"housing_type_id"})})
 * @ORM\Entity
 */
class Housing
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=10, nullable=false)
     */
    private $status;

    /**
     * @var \App\Entity\Prices
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Prices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prices_id", referencedColumnName="id")
     * })
     */
    private $prices;

    /**
     * @var \App\Entity\HousingType
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\HousingType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="housing_type_id", referencedColumnName="id")
     * })
     */
    private $housingType;


}

