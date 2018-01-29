<?php

namespace RozbehSharahi\Vue3\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Vtm\Sk\Vue3\HelloWorldComponent;

class Vue3Controller extends ActionController
{
    /**
     *
     */
    public function bootstrapAction()
    {
        $component = new HelloWorldComponent();
        return $component->getTag();
    }

}