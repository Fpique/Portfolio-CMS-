<?php
require_once('../Library/RenderClass.php');
class Page
{
    protected $title;
    protected $content;
    protected $render;
    protected $menu;
    protected $footer;
    protected $css;
    // On créer ensuite méthode de construction

    public function __construct($title, $content, $css)
    {
        $this->render = Render::getInstance();
        $this->title = $title;
        $this->content = $content;
        $this->css = $css;        
        $this->menu = file_get_contents('../Views/menu.php'); 
        $this->footer = file_get_contents('../Views/footer.php');
       
    }
    public function display()
    {
        $template = file_get_contents('../Views/template.php');                     //On utilise file_get_contents car il s'agit de HTML
        echo $this->render->render($this->menu, $this->title, $this->content, $this->css, $this->footer, $template);
    }
}