<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 06.01.17
 * Time: 13:17
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController
{
    /**
     * @Route("/",name="homepage")
     * @Template()
     */
    public function indexAction(){

    }
}