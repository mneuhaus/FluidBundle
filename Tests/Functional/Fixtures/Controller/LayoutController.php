<?php

namespace PhBergsmann\FluidBundle\Tests\Functional\Fixtures\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LayoutController extends Controller
{
    /**
     * @Template(engine="fluid")
     */
    public function indexAction()
    {
        return array();
    }
}