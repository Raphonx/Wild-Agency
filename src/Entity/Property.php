<?php

namespace App\Entity;

use App\Repository\PropertyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PropertyRepository::class)
 */
class Property
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="integer")
     */
    private $area;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_room;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="property")
     */
    private $image;

    /**
     * @ORM\ManyToMany(targetEntity=Message::class, inversedBy="properties")
     */
    private $message;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $principal_image;

    /**
     * @ORM\ManyToOne(targetEntity=PropertyType::class, inversedBy="properties")
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity=Service::class, inversedBy="properties")
     */
    private $services;

    public function __construct()
    {
        $this->image = new ArrayCollection();
        $this->message = new ArrayCollection();
        $this->services = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getArea(): ?int
    {
        return $this->area;
    }

    public function setArea(int $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getNbRoom(): ?int
    {
        return $this->nb_room;
    }

    public function setNbRoom(int $nb_room): self
    {
        $this->nb_room = $nb_room;

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImage(): Collection
    {
        return $this->image;
    }

    public function addImage(Image $image): self
    {
        if (!$this->image->contains($image)) {
            $this->image[] = $image;
            $image->setProperty($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->image->contains($image)) {
            $this->image->removeElement($image);
            // set the owning side to null (unless already changed)
            if ($image->getProperty() === $this) {
                $image->setProperty(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Message[]
     */
    public function getMessage(): Collection
    {
        return $this->message;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->message->contains($message)) {
            $this->message[] = $message;
        }

    return $this;
    }

    public function removeMessage(Message $message): self
    {
        if ($this->message->contains($message)) {
            $this->message->removeElement($message);
        }

        return $this;
    }

    /**
     * @return Collection|Services[]
     */
    public function getService(): Collection
    {
        return $this->services;
    }

    public function addService(Services $services): self
    {
        if (!$this->services->contains($services)) {
            $this->services[] = $services;
            $services->setProperty($this);
        }

        return $this;
    }

    public function removeService(Services $services): self
    {
        if ($this->services->contains($services)) {
            $this->services->removeElement($services);
            // set the owning side to null (unless already changed)
            if ($services->getProperty() === $this) {
                $services->setProperty(null);
            }
        }

        return $this;
    }

    public function getPrincipalImage(): ?string
    {
        return $this->principal_image;
    }

    public function setPrincipalImage(string $principal_image): self
    {
        $this->principal_image = $principal_image;

        return $this;
    }

    public function getType(): ?PropertyType
    {
        return $this->type;
    }

    public function setType(?PropertyType $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|Service[]
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    function __toString()
    {
        return $this->title;
    }
}
