<?php
namespace Com\Martiadrogue\Framework\Controller;

use Com\Martiadrogue\Mpwarfwk\Controller\BaseController;
use Com\Martiadrogue\Mpwarfwk\Connection\Http\HtmlResponse;
use Com\Martiadrogue\Mpwarfwk\Service\Template\TwigService;

/**
 *
 */
class FrameworkController extends BaseController
{
    private $rootTemplate = '../view/';

    public function __construct()
    {
        # code...
    }


    protected function render($path, Array $data)
    {
        $template = new TwigService();
        $template->setTemplateHome($this->rootTemplate);
        $template->setCacheHome('../cache/twig');
        $template->loadTemplate($path);
        $canvas = $template->paint($data);

        return new HtmlResponse($canvas, 200);
    }
}
