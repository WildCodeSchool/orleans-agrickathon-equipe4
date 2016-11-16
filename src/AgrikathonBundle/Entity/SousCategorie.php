<?php

namespace AgrikathonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousCategorie
 *
 * @ORM\Table(name="sous_categorie")
 * @ORM\Entity(repositoryClass="AgrikathonBundle\Repository\SousCategorieRepository")
 */
class SousCategorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSousCategorie", type="string", length=255)
     *
     */
    private $nomSousCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     *
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="sousCategories")
     */
    private $categorie;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }



    /**
     * @ORM\OneToMany(targetEntity="descritpion", mappedBy="sousCategorie")
     */
    private $description;


    /**
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomSousCategorie
     *
     * @param string $nomSousCategorie
     *
     * @return SousCategorie
     */
    public function setNomSousCategorie($nomSousCategorie)
    {
        $this->nomSousCategorie = $nomSousCategorie;

        return $this;
    }

    /**
     * Get nomSousCategorie
     *
     * @return string
     */
    public function getNomSousCategorie()
    {
        return $this->nomSousCategorie;
    }
}

