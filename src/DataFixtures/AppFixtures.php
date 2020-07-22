<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    const PROPERTY = [
        'Appartement 4 pièces 66 m²' => [
            'title' => 'Appartement 4 pièces 66 m²',
            'description' => 'Cuire le Bas - Coup de coeur assuré pour ce splendide appartement plongé dans la nature et la verdure, au sein d\'une résidence sécurisée avec parc et parking. Entièrement rénové avec des matériaux de qualité, vous serez ravis de poser vos bagages dans ce T4 de 67 m², traversant Est/Ouest, en rez-de-chaussée surélevé. Vous découvrirez une entrée desservant plusieurs pièces : une cuisine indépendante intégralement équipée, wc indépendants, une première chambre avec placard mural. Par la suite, vous entrerez dans un séjour de 28 m² (possibilité de créer une troisième chambre) baigné de lumière grâce à une grande baie vitrée, Vous disposerez d\'une salle d\'eau avec douche à l\'italienne, et enfin d\'une deuxième chambre ayant son propre dressing. Le petit plus pour l\'hiver : vous adorerez vous balader pieds-nus en tout confort grâce au chauffage au sol dans tout l\'appartement. Aucun vis-à-vis sur ce bien où le mot d\'ordre est le calme. Vendu avec une cave en sous-sol. A 500 mètres de commerces de nécessité : boulangerie, pharmacie, tabac, coiffeur, épicerie, école. TCL bus 40 pour Bellecour et bus S5 pour métro Cuire. A découvrir sans hésiter ! Copropriété de 199 lots (Pas de procédure en cours). Charges annuelles : 2050 euros.
            Référence annonce : 2324
            Les honoraires sont à la charge du vendeur
            A propos de la copropriété :
            Nombre de lots : 199
            Charges prévisionnelles annuelles : 2050 €',
            'city' => 'Caluire-et-Cuire (69300)',
            'area' => 66,
            'price' => 239000,
            'nb_room' => 4,
            'principal_image' => 'https://img6.leboncoin.fr/ad-large/83c5da934b3197567b029ffe06fe1e1f6e3c2049.jpg',
        ],
        'Appartement 5 pièces 123 m²' => [
            'title' => 'Appartement 5 pièces 123 m²',
            'description' => 'Vente T5 123 m² à Écully 577 500 €
            Nous vous proposons sur la commune d\'Ecully centre village, cet appartement de 123 m² dans une résidence de standing (Pitance) comprenant un salon / séjour, une cuisine, 3 chambres dont une suite parentale avec dressing et salle de bains, une seconde salle de bains, nombreux rangements, une cave, 2 balcons et une terrasse complète ce bien idéalement situé.
            Résidence disposant d\'un parc arboré, piscine et tennis.',
            'city' => 'Ecully (69130)',
            'area' => 123,
            'price' => 577000,
            'nb_room' => 5,
            'principal_image' => 'https://img0.leboncoin.fr/ad-large/eb6458cce88d4f03192b9cec508868e32ddc841f.jpg',
        ],
        'Studio meublé proche Place Jean Macé' => [
            'title' => 'Studio meublé proche Place Jean Macé',
            'description' => 'Idéal Investisseur très rentable. Particulier vend studio très lumineux au 3ème étage d’un immeuble ancien au 29 rue St Jérôme à Lyon 7ème à proximité de la place Jean Macé (gare, métro et Tram) surface 13.50 m2 + Mezzanine 3 m2. Entièrement meublé et équipé pour la location immédiate.
            Coin cuisine avec micro-ondes, plaques électriques, frigo-congel. TV écran plat. Vaisselle, literie
            SDB avec grande douche et WC. Vraie mezzanine couchage 2 personnes. Grande fenêtre double vitrage, volet roulant électrique. Porte Blindée. Interphone.',
            'city' => 'Lyon 7e Arrondissement (69007)',
            'area' => 14,
            'price' => 125000,
            'nb_room' => 1,
            'principal_image' => 'https://img5.leboncoin.fr/ad-large/fb57fd5bafde9ac84ec6b4d6a199ff993aef8b94.jpg',
        ],
        'Bel appartement lumineux de 89m²' => [
            'title' => 'Bel appartement lumineux',
            'description' => 'Bel appartement traversant et lumineux - 6è étage - dans immeuble de 1990 calme et sécurisé – avec vue sur Fourvière - balcon 13m² plein Ouest - plancher dans séjour, couloir et chambres + doubles vitrages – 2 chambres avec possibilité facile d’une 3ème – Chauffage individuel au gaz – Cave et garage – Quartier calme et commerçant – Tous commerces à coté – Métro 5 mn – La Part Dieu à 15 mn en voiture',
            'city' => 'Lyon 8e Arrondissement (69008)',
            'area' => 89,
            'price' => 450000,
            'nb_room' => 4,
            'principal_image' => 'https://img7.leboncoin.fr/ad-large/96e2c74caf307399a3b67349cc8c12e1e3163bd7.jpg',
        ],
        'Grande maison - 6 pièces 126 m²' => [
            'title' => 'Grande maison - 6 pièces 126 m²',
            'description' => '
            Cadre de vie idyllique pour cette maison années 80 située au centre de la commune de Saint-Bonnet mais pourtant au grand calme. Contre le parc du château, à deux pas des écoles. Au total, ce sont 126 m² répartis sur deux niveaux, le RDC avec un espace vie comprenant une cuisine équipée et un salon / séjour prolongés par une terrasse. Un coin nuit avec 2 chambres, un bureau (possibilité d\'en faire une chambre), une salle d\'eau et un WC. À l\'étage du bas, vous trouverez 2 autres chambres ainsi qu\'une pièce de buanderie / salle d\'eau et un grand garage dans la partie sous-sol. Le tout sur un terrain paysagé de 631 m² avec différents espaces de détente pour profiter au maximum du calme ambiant.',
            'city' => 'Saint-Bonnet-de-Mure (69720)',
            'area' => 126,
            'price' => 470000,
            'nb_room' => 6,
            'principal_image' => 'https://img0.leboncoin.fr/ad-large/a89041e6a39fb04cf95a73d8325add40ca9f28fa.jpg',
        ],
        'Appartement 4 pièces 104 m²' => [
            'title' => 'Appartement 4 pièces 104 m²',
            'description' => 'Nous vous proposons sur la commune de Marcilly d\'Azergues, ce beau duplex de type 4 rénové, d\'une surface de 103,75m² loi carrez. Ce bien situé au calme est composé d\'une vaste pièce de vie avec une cuisine ouverte et un accès direct sur la terrasse de 20 m², 3 chambres avec placards dont une avec salle d\'eau, une buanderie, une salle de bains avec wc. Un garage double et une place de stationnement viennent compléter ce bien. *Ses atouts : au calme, proche d\'une gare, des écoles , (primaire, maternelle), *Les plus : aucun travaux à prévoir ! Copropriété de 47 lots (Pas de procédure en cours). Charges annuelles : 1300 euros.',
            'city' => 'Marcilly-d\'Azergues (69380)',
            'area' => 104,
            'price' => 260000,
            'nb_room' => 4,
            'principal_image' => 'https://img0.leboncoin.fr/ad-large/a2a93f316283c8a14ebaff076c85e4d00c9da17e.jpg',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::PROPERTY as $title => $data) {
            $property = new Property();
            $property->setTitle($title);
            $property->setDescription($data['description']);
            $property->setCity($data['city']);
            $property->setArea($data['area']);
            $property->setPrice($data['price']);
            $property->setNbRoom($data['nb_room']);
            $property->setPrincipalImage($data['principal_image']);
            $manager->persist($property);
        }
        $manager->flush();
    }
}
