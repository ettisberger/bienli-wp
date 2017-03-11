<?php

class ShortcodeUtil
{
    function __construct()
    {
    }

    function renderSection($atts)
    {
        static $sectionCounter = 0;

        $oddEvenStyle = ($sectionCounter++ % 2 == 0 ? 'bienli-even' : 'bienli-odd');

        return '</div></section><section class="bienli-section ' . $oddEvenStyle . '"><div class="bienli-inlay">';
    }

    function renderContact(){
        return $this->render('contact', null);
    }

    function renderCakes(){
        return $this->render('cakes', null);
    }

    private function render($partial, $params)
    {
        ob_start();
        include(__DIR__ . '/../partials/' . $partial . '.partial.php');
        return ob_get_clean();
    }
}

?>