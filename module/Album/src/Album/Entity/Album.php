<?php
namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="album")
 */
class Album
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $artista;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titulos;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;


    /**
     * [getId() description here]
     *
     * @return [type] [description]
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * [setId() description here]
     *
     * @param  [type] $id [description]
     * @return [class type]    $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * [getArtista() description here]
     *
     * @return [type] [description]
     */
    public function getArtista()
    {
        return $this->artista;
    }

    /**
     * [setArtista() description here]
     *
     * @param  [type] $artista [description]
     * @return [class type]    $this
     */
    public function setArtista($artista)
    {
        $this->artista = $artista;

        return $this;
    }
}