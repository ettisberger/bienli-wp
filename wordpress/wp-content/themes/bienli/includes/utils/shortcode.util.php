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

    function renderContact($atts, $content = null)
    {
        $attributes = shortcode_atts(array('adresse' => '', 'content' => $content), $atts);

        $params['adresse'] = $attributes['adresse'];
        $params['content'] = $attributes['content'];

        return $this->render('contact', $params);
    }

    function renderCakes(){
        return $this->render('cakes', null);
    }

    function renderTeam(){
        return $this->render('team', null);
    }

    private function render($partial, $params)
    {
        ob_start();
        include(__DIR__ . '/../partials/' . $partial . '.partial.php');
        return ob_get_clean();
    }
}

?>