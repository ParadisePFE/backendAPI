<?php
/**
 * Created by PhpStorm.
 * User: yasenhaji
 * Date: 28/05/2015
 * Time: 17:17
 */

namespace OC\UserBundle\DataFixtures\ORM;



use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\UserBundle\Entity\User;

class LoadUser implements FixtureInterface{
    public function load(ObjectManager $manager){
        $listNames = array('yassin','jemmoudi','ayyoub');
        foreach($listNames as $name)
        {
            $user = new User();
            $user->setUsername($name);
            $user->setPassword($name);
            $user->setRoles(array('ROLE_USER'));
            $manager->persist($user);
        }
        $manager->flush();
    }
}