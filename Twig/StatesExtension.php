<?php

namespace Napas\FormExtraBundle\Twig;

use Napas\FormExtraBundle\Misc\UsStates;

/**
 * Twig extension to display states
 *
 * @package Napas\FormExtraBundle\Twig
 */
class StatesExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'states_extension';
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction(
                'state_name',
                array(
                    $this,
                    'getStateName'
                )
            ),
        );
    }

    /**
     * @param $stateCode
     * @return null
     */
    public function getStateName($stateCode)
    {
        return UsStates::getStateName($stateCode);
    }
} 