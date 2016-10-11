<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Department;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadDepartmentData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $department = new Department();
        $department->setName("Recursos Humanos");
        $department->setDescription("Encargados del reclutamiento y selección, contratación, capacitación, administración
         o gestión del personal durante la permanencia en la empresa.");
        $manager->persist($department);
        $this->addReference("dep.hhrr", $department);

        $department = new Department();
        $department->setName("Desarrollo");
        $department->setDescription("Desarrollo de productos tecnológicos");
        $manager->persist($department);
        $this->addReference("dep.dev", $department);

        $department = new Department();
        $department->setName("Administración");
        $department->setDescription("Encargados de la gestión de todos los recursos materiales y humanos. Cuidan los 
        intereses de los stackeholders.");
        $manager->persist($department);
        $this->addReference("dep.admin", $department);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}