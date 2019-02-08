<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController {
    public function index () {
        $text = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.';

        $teammembers = [0 => ['name' => 'Followkarma',
                              'bio' => $text],
                        1 => ['name' => 'Scr4py',
                              'bio' => $text],
                        2 => ['name' => 'Sgt Hater',
                              'bio' => $text],
                        3 => ['name' => 'Shadowscreen',
                              'bio' => $text],
                        4 => ['name' => 'Chaosjoshi',
                              'bio' => $text],
                        5 => ['name' => 'Sir Gawai',
                              'bio' => $text],
                        6 => ['name' => 'Hadryel',
                              'bio' => $text],
                        7 => ['name' => 'Butterbrot',
                              'bio' => $text],];

        return $this->render('default.html.twig', ['title' => 'MOIN',
                                                         'content' => 'Hello World!',
                                                         'players' => $teammembers]);
    }
}