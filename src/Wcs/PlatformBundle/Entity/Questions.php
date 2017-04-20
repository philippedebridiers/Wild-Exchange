<?php

namespace Wcs\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulaire des Questions
 *
 * @ORM\Table(name="questions")
 * @ORM\Entity(repositoryClass="Wcs\PlatformBundle\Repository\QuestionsRepository")
 */
class Questions
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
     * @ORM\Column(name="Intitule_question", type="string", length=255)
     */
    private $intituleQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="Statut", type="string", length=255, nullable=true)
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nb_vue", type="integer")
     */
    private $nbVue;

    /**
     * @var int
     *
     * @ORM\Column(name="idUsers", type="integer", nullable=true)
     */
    private $idUsers;

    /**
     * One question have many responses
     * @ORM\OnetoMany(targetEntity="Reponses", mappedBy="questions")
     */
    private $reponses;

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
     * Set intituleQuestion
     *
     * @param string $intituleQuestion
     *
     * @return Questions
     */
    public function setIntituleQuestion($intituleQuestion)
    {
        $this->intituleQuestion = $intituleQuestion;

        return $this;
    }

    /**
     * Get intituleQuestion
     *
     * @return string
     */
    public function getIntituleQuestion()
    {
        return $this->intituleQuestion;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Questions
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

    /**
     * Set lienImage
     *
     * @param string $lienImage
     *
     * @return Questions
     */
    public function setLienImage($lienImage)
    {
        $this->lienImage = $lienImage;

        return $this;
    }

    /**
     * Get lienImage
     *
     * @return string
     */
    public function getLienImage()
    {
        return $this->lienImage;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Questions
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set idUsers
     *
     * @param integer $idUsers
     *
     * @return Questions
     */
    public function setIdUsers($idUsers)
    {
        $this->idUsers = $idUsers;

        return $this;
    }

    /**
     * Get idUsers
     *
     * @return int
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reponse
     *
     * @param \Wcs\PlatformBundle\Entity\Reponses $reponse
     *
     * @return Questions
     */
    public function addReponse(\Wcs\PlatformBundle\Entity\Reponses $reponse)
    {
        $this->reponses[] = $reponse;
    }

    /**
     * Set nbVue
     *
     * @param integer $nbVue
     *
     * @return Questions
     */
    public function setNbVue($nbVue)
    {
        $this->nbVue = $nbVue;
        return $this;
    }

    /**
     * Remove reponse
     *
     * @param \Wcs\PlatformBundle\Entity\Reponses $reponse
     */
    public function removeReponse(\Wcs\PlatformBundle\Entity\Reponses $reponse)
    {
        $this->reponses->removeElement($reponse);
    }

    /**
     * Get reponses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReponses()
    {
        return $this->reponses;
    }

     * Get nbVue
     *
     * @return integer
     */
    public function getNbVue()
    {
        return $this->nbVue;

    }
}
