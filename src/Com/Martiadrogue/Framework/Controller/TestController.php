<?php
namespace Com\Martiadrogue\Framework\Controller;

use Com\Martiadrogue\Framework\Controller\SmartyController;

/**
 *
 */
class TestController extends SmartyController
{

    public function __construct()
    {
        # code...
    }

    public function executeIndex()
    {
        $data = ['title'=>'Test', 'message'=>'Hello from '.__METHOD__];

        return parent::render('test/index.tpl', $data);
    }

    public function executeList()
    {
        $data = ['title'=>'Test List', 'message'=>'Hello from '.__METHOD__];

        return parent::render('test/list.tpl', $data);
    }

    public function executeNotation()
    {
        $data = ['title'=>'Test JSON', 'message'=>'Hello from '.__METHOD__];

        return parent::send($data);
    }

    public function executeShow()
    {
        $data = ['title'=>'Test Param', 'message'=>'Hello from '.__METHOD__];

        return parent::render('test/list.tpl', $data);
    }

}
