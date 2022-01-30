<?php

namespace App\DataFixtures;

use App\Entity\Experience;
use App\Entity\Formation;
use App\Entity\Project;
use App\Entity\Skills;
use App\Entity\User;
use DateTime;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        $date = new DateTimeImmutable();
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();

        $user->setEmail('test@gmail.com')
             ->setPassword('password');
        
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
             $user->getPassword()
            );
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        for($i = 0; $i < 10; $i++)
        {
            $project = new Project();
            $project->setLink($faker->url())
                    ->setDescription($faker->text())
                    ->setTitle($faker->word());
            $manager->persist($project);
        }


        for($i = 0; $i < 10; $i++)
        {
            $formation = new Formation();
            $formation->setDescription($faker->text())
                      ->setYearsStartAt($date)
                      ->setYearsEndAt($date)
                      ->setTitle($faker->word())
                      ->setSutdyGrade($faker->numerify());
            $manager->persist($formation);
        }

        for ($i=0; $i < 10; $i++) 
        {
            $skills = new Skills(); 
            $skills->setTitle($faker->word())
            ->setDescription($faker->text());
            $manager->persist($skills);
        }

        for ($i=0; $i < 10; $i++) 
        {
            $experience = new Experience();
            $experience->setTitle($faker->word())
                       ->setDescription($faker->text())
                       ->setTitleSpe($faker->word())
                       ->setYearsStartAt($date)
                       ->setYearsEndAt($date);
            $manager->persist($experience);           
        }

        $manager->flush();
    }
}
