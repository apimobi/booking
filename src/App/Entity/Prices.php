<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prices
 *
 * @ORM\Table(name="prices", indexes={@ORM\Index(name="prices_housing", columns={"housing_id"})})
 * @ORM\Entity(repositoryClass="App\Entity\Repository\PricesRepository")
 */
class Prices
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
     * @var integer
     *
     * @ORM\Column(name="housing_id", type="integer", nullable=false)
     */
    private $housingId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date", nullable=false)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date", nullable=false)
     */
    private $dateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="daily_price", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $dailyPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="weekly_price", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $weeklyPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="monthly_price", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $monthlyPrice;

    /**
     * @var \App\Entity\Housing
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Housing")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="housing_id", referencedColumnName="id")
     * })
     */
    private $housing;

    public function getId()
    {
        return $this->id;
    }

    public function getHousingId()
    {
        return $this->housingId;
    }

    public function getDateStart()
    {
        return $this->dateStart;
    }

    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    public function getDailyPrice()
    {
        return $this->dailyPrice;
    }

    public function getWeeklyPrice()
    {
        return $this->weeklyPrice;
    }

    public function getMonthlyPrice()
    {
        return $this->monthlyPrice;
    }

    /**
     *
     */
    public function getHousing()
    {
        return $this->housing;
    }
}

