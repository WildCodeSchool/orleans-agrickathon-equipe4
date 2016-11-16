<?php

namespace AgrikathonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description
 *
 * @ORM\Table(name="description")
 * @ORM\Entity(repositoryClass="AgrikathonBundle\Repository\DescriptionRepository")
 */
class Description
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
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="string", length=3000)
     */
    private $contenu;

    /**
     * @return string
     */
    public function getSousCategories()
    {
        return $this->sousCategories;
    }

    /**
     * @param string $sousCategories
     */
    public function setSousCategories($sousCategories)
    {
        $this->sousCategories = $sousCategories;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="nomSousCategorie", type="string", length=255)
     *
     * @ORM\ManyToOne(targetEntity="sousCategorie", inversedBy="Description")
     */
    private $sousCategories;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Description
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Description
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}

