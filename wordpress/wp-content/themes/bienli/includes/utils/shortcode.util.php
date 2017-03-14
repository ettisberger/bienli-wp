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

        return '<section class="bienli-section ' . $oddEvenStyle . '">';
    }

    function renderSectionEnd($atts)
    {
        return '</section>';
    }

    function renderInlay(){
        return '<div class="bienli-inlay">';
    }

    function renderInlayEnd(){
        return '</div>';
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