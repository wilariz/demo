<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class AlbumController extends AbstractActionController
{
    private $_albumServicio;

    public function indexAction()
    {
        $lista = $this->getAlbumService()->listar();
        return array(
            'lista'=> $lista
        );
    }

    private function getAlbumService()
    {
        if ($this->_albumServicio == null) {
            $this->_albumServicio = $this->getServiceLocator()->get('album_service');
        }
        return $this->_albumServicio;
    }
}
