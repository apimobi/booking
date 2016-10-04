<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingType
 *
 * @ORM\Table(name="housing_type")
 * @ORM\Entity
 */
class HousingType
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
     * @ORM\Column(name="description", type="string", length=80, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_capacity", type="integer", nullable=false)
     */
    private $maxCapacity;


}

