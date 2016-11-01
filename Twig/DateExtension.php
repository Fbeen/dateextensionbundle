<?php

namespace Fbeen\DateExtensionBundle\Twig;

class DateExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('dom', array($this, 'domFunction')),
            new \Twig_SimpleFunction('smdate', array($this, 'smdateFunction')),
            new \Twig_SimpleFunction('fmdate', array($this, 'fmdateFunction')),
            new \Twig_SimpleFunction('sddate', array($this, 'sddateFunction')),
            new \Twig_SimpleFunction('fddate', array($this, 'fddateFunction')),
        );
    }

    public function domFunction($datetime)
    {
        return $datetime->format('j');
    }

    public function smdateFunction($datetime)
    {
	$months = array('jan','feb','mrt','apr','mei','jun','jul','aug','sep','okt','nov','dec');
        return $months[$datetime->format('m')-1];
    }

    public function fmdateFunction($datetime)
    {
	$months = array('januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december');
        return $months[$datetime->format('m')-1];
    }

    public function sddateFunction($datetime)
    {
	$days = array('Zo','Ma','Di','Wo','Do','Vr','Za');
        return $days[$datetime->format('w')];
    }

    public function fddateFunction($datetime)
    {
	$days = array('Zondag','Maandag','Dinsdag','Woensdag','Donderdag','Vrijdag','Zaterdag');
        return $days[$datetime->format('w')];
    }

    public function getName()
    {
        return 'date_extension';
    }
}

/*
 * 
smdate
fmdate
sddate
fddate
dom
        $days = array('Zo','Ma','Di','Wo','Do','Vr','Za');
        $fulldays = array('Zondag','Maandag','Dinsdag','Woensdag','Donderdag','Vrijdag','Zaterdag');

 */