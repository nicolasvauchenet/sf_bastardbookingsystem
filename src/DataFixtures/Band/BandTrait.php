<?php

namespace App\DataFixtures\Band;

trait BandTrait
{
    const BANDS = [
        [
            'name' => 'Féelarsen',
            'description' => "<strong>La preuve vivante que le Rock français n'est pas mort&nbsp;!</strong><br>Originaire de <strong>Limoges</strong>, <strong>Féelarsen</strong> est avant tout taillé pour la <strong>scène</strong>. Depuis maintenant trois ans, le groupe trace sa route en enchaînant les <strong>concerts</strong> dans les <strong>bars</strong>, les <strong>festivals</strong> et les <strong>salles de concerts</strong>, assurant des premières parties importantes comme les <strong>Ramoneurs de Menhirs</strong>, <strong>les Sales Majestés</strong>, <strong>Krav Boca</strong>. Leurs <strong>textes</strong> inspirés et mordants, accompagnés d'un <strong>son</strong> travaillé et fourni, donnent du corps à une critique assaisonnée de notre <strong>société</strong>. Des <strong>mélodies</strong> à la sauce piquante, une <strong>rythmique</strong> impeccable et des <strong>guitares</strong> acérées, où l'on frôle un esprit joyeusement bordélique…",
            'logo' => 'feelarsen-logo.png',
            'photo' => 'feelarsen-photo.jpg',
            'lineup' => 4,
            'baseFee' => 600,
            'genre' => 'genre_rock',
            'style' => 'style_alternatif',
            'reference' => 'feelarsen',
        ],
    ];
}
