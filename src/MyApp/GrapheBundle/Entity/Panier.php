<?php

namespace MyApp\GrapheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier")
 * @ORM\Entity
 */
class Panier
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
     * @var integer
     *
     * @ORM\Column(name="totalArticles", type="integer", nullable=false)
     */
    private $totalarticles;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrArticle", type="integer", nullable=false)
     */
    private $nbrarticle;

    /**
     * @var float
     *
     * @ORM\Column(name="prixTotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixtotal;

    /**
     * @var float
     *
     * @ORM\Column(name="prixArticles", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixarticles;


}
