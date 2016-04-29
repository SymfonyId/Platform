<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Hateoas\Configuration\Annotation as Hateoas;
use JMS\Serializer\Annotation as Serializer;
use Symfonian\Indonesia\AdminBundle\Contract\EntityInterface as AdminInterface;
use Symfonian\Indonesia\RehatBundle\Annotation\Filterable;
use Symfonian\Indonesia\RehatBundle\Annotation\Searchable;
use Symfonian\Indonesia\RehatBundle\Annotation\Sortable;
use Symfonian\Indonesia\RehatBundle\Model\EntityInterface as RehatInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="kategori")
 * @ORM\Entity
 *
 * @Serializer\XmlRoot("kategori")
 * @Hateoas\Relation("self", href = "expr('/api/kategori/' ~ object.getId())")
 */
class Kategori implements AdminInterface, RehatInterface
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Serializer\XmlAttribute
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Kategori", cascade={"persist"})
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     *
     * @Searchable()
     * @Filterable()
     * @Sortable()
     */
    private $parent;

    /**
     * @ORM\Column(name="nama", type="string", length=77)
     *
     * @Searchable()
     * @Filterable()
     * @Sortable()
     *
     * @Assert\NotBlank()
     */
    private $nama;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Kategori
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param Kategori $parent
     */
    public function setParent(Kategori $parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return string
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * @param string $nama
     */
    public function setNama($nama)
    {
        $this->nama = ucwords($nama);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getNama();
    }
}
