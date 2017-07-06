<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\Common\Annotations\Annotation;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\Post;

class IndexController extends AbstractActionController
{
	/**
     * Entity Manager
     * @var EntityManager 
     */
    private $entityManager;
    
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function indexAction()
    {

    	// Find all posts from repository
		//$posts = $entityManager->getRepository(Post::class)->findAll();
		$posts = $this->entityManager->getRepository(Post::class)->findAll();
		//var_dump($posts);exit;
        return new ViewModel([
            'albums' => $posts,
        ]);
    }

    public function contactoAction()
    {
        echo 'Este es la pagina del contacto';exit;
    }
}
