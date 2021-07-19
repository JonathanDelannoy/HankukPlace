<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity
 */
class Payment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentmethod", type="string", length=255, nullable=false)
     */
    private $paymentmethod;

    /**
     * @var int
     *
     * @ORM\Column(name="totalpayment", type="integer", nullable=false)
     */
    private $totalpayment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepayment", type="date", nullable=false)
     */
    private $datepayment;


}
