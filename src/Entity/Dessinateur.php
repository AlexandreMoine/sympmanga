<?php

namespace App\Entity;

use App\Repository\DessinateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DessinateurRepository::class)
 */
class Dessinateur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_dessinateur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nom_dessinateur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prenom_dessinateur;

    public function getId(): ?int
    {
        return $this->id_dessinateur;
    }

    public function getNomDessinateur(): ?string
    {
        return $this->nom_dessinateur;
    }

    public function setNomDessinateur(?string $nom_dessinateur): self
    {
        $this->nom_dessinateur = $nom_dessinateur;

        return $this;
    }

    public function getPrenomDessinateur(): ?string
    {
        return $this->prenom_dessinateur;
    }

    public function setPrenomDessinateur(?string $prenom_dessinateur): self
    {
        $this->prenom_dessinateur = $prenom_dessinateur;

        return $this;
    }
}
