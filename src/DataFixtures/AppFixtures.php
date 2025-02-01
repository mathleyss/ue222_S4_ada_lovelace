<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Blog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $categorie = new Category();
        $categorie->setName("Catégorie 1");
        $manager->persist($categorie);

        $article = new Article();
        $article->setTitle("Lorem Ipsum");
        $article->setContent("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra urna in nunc dapibus tincidunt et eu magna. Pellentesque venenatis varius orci sit amet condimentum. Quisque sit amet enim id nisl consectetur gravida. Curabitur efficitur felis rutrum ligula convallis convallis. Vestibulum eget dictum lorem. Vestibulum est justo, fermentum eu eleifend vestibulum, lacinia efficitur erat. Proin a ligula lorem. In iaculis dignissim sodales.");
        $article->setCategory($categorie);
        $manager->persist($article);

        $categorie = new Category();
        $categorie->setName("Logiciel");
        $manager->persist($categorie);

        $article = new Article();
        $article->setTitle("Qu'est ce que Docker ?");
        $article->setContent("Docker est une plateforme open-source qui permet de créer, déployer et gérer des applications dans des conteneurs. Les conteneurs sont des environnements légers et portables qui encapsulent une application et toutes ses dépendances, assurant ainsi qu'elle fonctionne de manière cohérente sur différents environnements. Docker simplifie le développement, le déploiement et la gestion des applications en isolant les applications des infrastructures sous-jacentes. Cela permet aux développeurs de construire des applications plus rapidement et de les déployer de manière fiable sur n'importe quel système, qu'il s'agisse de machines locales, de serveurs ou de clouds. Docker est largement utilisé pour améliorer l'efficacité des workflows de développement et d'exploitation.");
        $article->setCategory($categorie);
        $manager->persist($article);

        $categorie = new Category();
        $categorie->setName("Biographie");
        $manager->persist($categorie);

        $article = new Article();
        $article->setTitle("Ada Lovelace");
        $article->setContent("Ada Lovelace, née Augusta Ada Byron le 10 décembre 1815 et décédée le 27 novembre 1852, est une mathématicienne et écrivaine anglaise. Elle est surtout connue pour son travail sur la machine analytique de Charles Babbage, un précurseur de l'ordinateur moderne. Ada Lovelace est souvent considérée comme la première programmeuse informatique, car elle a écrit le premier algorithme destiné à être exécuté par une machine. Son travail a jeté les bases de la programmation informatique et elle est une figure emblématique dans l'histoire de l'informatique.");
        $article->setCategory($categorie);
        $manager->persist($article);

        $categorie = new Category();
        $categorie->setName("Framework");
        $manager->persist($categorie);

        $article = new Article();
        $article->setTitle("Présentation de Symfony");
        $article->setContent("Symfony est un framework PHP open-source utilisé pour développer des applications web. Créé par SensioLabs, il est basé sur le modèle MVC (Modèle-Vue-Contrôleur) et offre une structure robuste et flexible pour construire des applications web évolutives et maintenables. Symfony est connu pour sa modularité, permettant aux développeurs d'utiliser uniquement les composants nécessaires à leur projet. Il est également apprécié pour sa documentation complète, sa communauté active et ses bonnes pratiques de développement. Symfony est utilisé par de nombreuses entreprises et projets open-source pour créer des applications web performantes et sécurisées.");
        $article->setCategory($categorie);
        $manager->persist($article);
        

        $blog = new Blog();
        $blog->setTitle("Mon blog");
        $blog->setContent("Morbi viverra facilisis aliquet. Phasellus suscipit arcu id felis tempor, in fringilla turpis dictum. Fusce porta finibus diam, vitae lacinia nibh finibus id. Donec facilisis nisl quis egestas sollicitudin. Aenean quis nulla est. Aliquam volutpat dolor eget ultricies maximus. Maecenas felis turpis, lacinia et purus in, viverra sagittis ex. Ut laoreet est sit amet ligula auctor, in venenatis magna interdum. Maecenas suscipit accumsan libero, auctor ullamcorper lectus porta semper.");
        $blog->setCategory($categorie);
        $manager->persist($article);

        $manager->flush();
    }
}
