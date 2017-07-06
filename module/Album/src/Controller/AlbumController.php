<?php

namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
    public function indexAction()
    {
    	echo 'index';exit;
    }

    public function addAction()
    {
    	echo 'add';exit;
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}