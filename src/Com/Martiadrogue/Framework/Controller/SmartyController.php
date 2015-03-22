<?php
namespace Com\Martiadrogue\Framework\Controller;

use Com\Martiadrogue\Mpwarfwk\Controller\BaseController;
use Com\Martiadrogue\Mpwarfwk\Connection\Http\HtmlResponse;
use Com\Martiadrogue\Mpwarfwk\Connection\Http\JsonResponse;
use Com\Martiadrogue\Mpwarfwk\Service\Template\SmartyService;

/**
 *
 */
class SmartyController extends BaseController
{
    private $rootTemplate = '../view/';
    private $rootCache = '../cache/smarty/';
    private $rootCompile = '../view/view_c/';
    private $rootConfig = '../view/config/';

    public function __construct()
    {
        # code...
    }


    protected function render($path, Array $data)
    {
        $template = new SmartyService();
        $template->setTemplateHome($this->rootTemplate);
        $template->setCacheHome('../cache/smarty');
        $template->loadTemplate($path);
        $canvas = $template->paint($data);

        return new HtmlResponse($canvas, 200);
    }

    protected function send(Array $data)
    {
        $out = array_values($data);
        $content = json_encode($out);

        return new JsonResponse($content, 200);
    }
}
