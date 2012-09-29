<?php
namespace Album\Service;

class AlbumService
{
    private $_albumRepository;

    public function __construct($albumRepository)
    {
        $this->_albumRepository = $albumRepository;
    }

    public function listar()
    {
        return $this->_albumRepository->listar();
    }
}