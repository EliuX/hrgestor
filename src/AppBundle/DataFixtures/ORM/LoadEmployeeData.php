<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Employee;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadEmployeeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $depHumanResources = $this->getReference("dep.hhrr");
        $depDevelopment = $this->getReference("dep.dev");
        $depAdmin = $this->getReference("dep.admin");

        $employee = new Employee();
        $employee->setName("Steve Jobs");
        $employee->setAddresss("Palo Alto Ave. 1234");
        $employee->setSalary("1000000.50");
        $employee->setTelephone("+1 234 234242");
        $employee->setDepartment($depAdmin);
        $manager->persist($employee);

        $employee = new Employee();
        $employee->setName("Steve Wozniak");
        $employee->setAddresss("Palo Alto Ave. 1235");
        $employee->setSalary("5000.00");
        $employee->setTelephone("+1 999 111111");
        $employee->setDepartment($depDevelopment);
        $manager->persist($employee);

        $employee = new Employee();
        $employee->setName("Marissa Meyer");
        $employee->setAddresss("Palo Alto Ave. 555");
        $employee->setSalary("2000000.00");
        $employee->setTelephone("+1 666 66611");
        $employee->setDepartment($depAdmin);
        $manager->persist($employee);

        $employee = new Employee();
        $employee->setName("Martin Fowler");
        $employee->setAddresss("Abraham Lincoln 323, Washington DC");
        $employee->setSalary("50000.00");
        $employee->setTelephone("+1 555 111111");
        $employee->setDepartment($depDevelopment);
        $manager->persist($employee);

        $employee = new Employee();
        $employee->setName("Eliecer Hernández Garbey");
        $employee->setAddresss("Madrid e Isabel la Católica");
        $employee->setSalary("50000");
        $employee->setTelephone("+985191605");
        $employee->setDepartment($depHumanResources);
        $manager->persist($employee);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}