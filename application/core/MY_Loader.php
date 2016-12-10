<?php

require_once(APPPATH . 'third_party/output_escaper/src/Symfony/Component/OutputEscaper/BaseEscaper.php');
require_once(APPPATH . 'third_party/output_escaper/src/Symfony/Component/OutputEscaper/ArrayDecorator.php');
require_once(APPPATH . 'third_party/output_escaper/src/Symfony/Component/OutputEscaper/Escaper.php');
require_once(APPPATH . 'third_party/output_escaper/src/Symfony/Component/OutputEscaper/ObjectDecorator.php');
require_once(APPPATH . 'third_party/output_escaper/src/Symfony/Component/OutputEscaper/IteratorDecorator.php');
require_once(APPPATH . 'third_party/output_escaper/src/Symfony/Component/OutputEscaper/SafeDecoratorInterface.php');
require_once(APPPATH . 'third_party/output_escaper/src/Symfony/Component/OutputEscaper/SafeDecorator.php');


class MY_Loader extends CI_Loader
{
    public function view($view, $vars = array(), $return = FALSE)
    {
        return parent::view(
            $view,
            array_map(function($v){ return Symfony\Component\OutputEscaper\Escaper::escape('htmlspecialchars', $v); }, $vars),
            $return
        );
    }
}
