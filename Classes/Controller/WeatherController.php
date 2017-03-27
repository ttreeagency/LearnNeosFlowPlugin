<?php
namespace Ttree\LearnNeosFlowPlugin\Controller;

use Neos\Flow\Mvc\Controller\ActionController;
use Neos\Flow\Utility\Now;

/**
 * A Special Case of a Controller: If no controller has been specified in the
 * request, this controller is chosen.
 */
class WeatherController extends ActionController
{
    public function getAction()
    {
        $now = new Now();
        $this->view->assign('today', $now->format('D d'));
    }
}
