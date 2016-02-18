<?php

namespace MyApp\GrapheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
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
     * @ORM\Column(name="categorie", type="string", length=30, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=30, nullable=false)
     */
    private $sexe;
    /**
     * @var integer
     *
     * @ORM\Column(name="nbreDeVisite", type="integer", nullable=false)
     */
    private $nbredevisite;


}
