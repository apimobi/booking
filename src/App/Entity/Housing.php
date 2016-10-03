<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Housing
 *
 * @ORM\Table(name="housing", indexes={@ORM\Index(name="room_room_type", columns={"housing_type_id"})})
 * @ORM\Entity(repositoryClass="App\Entity\Repository\HousingRepository")
 */
class Housing
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
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     */
    private $name;

    /**
     *
     * @ORM\Column(name="default_price", type="float")
     */
    private $defaultPrice;

    /**
     * @var \App\Entity\HousingType
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\HousingType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="housing_type_id", referencedColumnName="id")
     * })
     */
    private $housingType;

    /**
     *
     */
    private $calculatedPrice;


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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get defaultPrice
     *
     * @return float
     */
    public function getDefaultPrice()
    {
        return $this->defaultPrice;
    }

    /**
     * Set calculatedPrice
     *
     * @param float $price
     */
    public function setCalculatedPrice($price)
    {
        $this->calculatedPrice = $price;
    }

    /**
     * Get calculatedPrice
     *
     * @return float
     */
    public function getCalculatedPrice()
    {
        return $this->calculatedPrice;
    }

}

