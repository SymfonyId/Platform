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
 * @ORM\Table(name="aplikasi")
 * @ORM\Entity
 *
 * @Serializer\XmlRoot("aplikasi")
 * @Hateoas\Relation("self", href = "expr('/api/aplikasi/' ~ object.getId())")
 */
class Aplikasi implements AdminInterface, RehatInterface
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
     * @ORM\JoinColumn(name="kategori_id", referencedColumnName="id")
     *
     * @Searchable()
     * @Filterable()
     * @Sortable()
     */
    private $kategori;

    /**
     * @ORM\Column(name="icon", type="string", length=255)
     *
     * @Searchable()
     * @Filterable()
     * @Sortable()
     *
     * @Assert\NotBlank()
     */
    private $icon;

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
     * @ORM\Column(name="deskripsi", type="string", length=255)
     *
     * @Searchable()
     * @Filterable()
     * @Sortable()
     *
     * @Assert\NotBlank()
     */
    private $deskripsi;

    /**
     * @ORM\Column(name="package", type="string", length=77)
     *
     * @Searchable()
     * @Filterable()
     * @Sortable()
     *
     * @Assert\NotBlank()
     */
    private $package;

    /**
     * @ORM\Column(name="url_download", type="string", length=255)
     *
     * @Searchable()
     * @Filterable()
     * @Sortable()
     *
     * @Assert\NotBlank()
     */
    private $urlDownload;

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
    public function getKategori()
    {
        return $this->kategori;
    }

    /**
     * @param Kategori $kategori
     */
    public function setKategori(Kategori $kategori)
    {
        $this->kategori = $kategori;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
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
    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    /**
     * @param string $deskripsi
     */
    public function setDeskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;
    }

    /**
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param string $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

    /**
     * @return string
     */
    public function getUrlDownload()
    {
        return $this->urlDownload;
    }

    /**
     * @param string $urlDownload
     */
    public function setUrlDownload($urlDownload)
    {
        $this->urlDownload = $urlDownload;
    }
}
