<?php
namespace Com\Martiadrogue\Framework\Controller;

use Com\Martiadrogue\Framework\Controller\FrameworkController;
use PDOException;

/**
 *
 */
class HomeController extends FrameworkController
{

    function __construct()
    {
        # code...
    }

    public function executeIndex()
    {
        return parent::render('home/index.html', []);
    }

    public function executeAbout()
    {
        try {
            $pdo = new PdoService();
            // $pdo->create('article', 'lorem ipsum', 'author', '10/22/2015','lorem ipsum dolor sit amen', ' Vivamus pellentesque ligula justo, sed mollis odio venenatis vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque bibendum enim a dui eleifend molestie. Curabitur eu nisi at orci auctor ultrices at nec sapien. Vestibulum aliquam mi arcu, quis suscipit est posuere vitae. Praesent orci metus, tristique eget libero et, fringilla pulvinar lacus. Phasellus non volutpat leo.');
            // $pdo->read('article', 'title', 'author', 'date', 'brief', 'body');
            // $pdo->update('article', '1', 'lorem ipsum', 'author', '10/22/2015','lorem ipsum dolor sit amen', ' Vivamus pellentesque ligula justo, sed mollis odio venenatis vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque bibendum enim a dui eleifend molestie. Curabitur eu nisi at orci auctor ultrices at nec sapien. Vestibulum aliquam mi arcu, quis suscipit est posuere vitae. Praesent orci metus, tristique eget libero et, fringilla pulvinar lacus. Phasellus non volutpat leo.');
            // $pdo->delete('article', 1, 4, 7, 8, 9, 23);
        } catch (PDOException $ex) {
            if ($ex->getCode() === '42S02') {
                // crea taula
            }
        }

        $data = ['title'=>'About Framework MVC', 'message'=>'Hello from '.__METHOD__];

        return parent::render('home/about.html', $data);
    }

    public function executeContact()
    {
        $data = ['title'=>'Get In Touch!', 'message'=>'Hello from '.__METHOD__];

        return parent::render('home/contact.html', $data);
    }
}
