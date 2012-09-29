<?php
namespace Album\Repository;

class AlbumRepository
{
    private $_datos;

    public function __construct()
    {
        $this->_datos = array(
            array('id' => 1, 'artista' => 'jose jose', 'titulo'=> 'Almohada'),
            array('id' => 2, 'artista' => 'jose jose', 'titulo'=> 'Almohada'),
            array('id' => 3, 'artista' => 'jose jose', 'titulo'=> 'Almohada'),
        );
    }

    public function listar()
    {
        return $this->_datos;
    }
}