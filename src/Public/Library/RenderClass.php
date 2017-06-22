<?php 
  Class Render
    { 

    private static $_instance = null;
    private function __construct() {

    }
    public static function getInstance()
    {
      if(is_null(self::$_instance)) {
        self::$_instance = new Render();
      }
      return self::$_instance;
    }
    public function render($menu, $title, $content, $css, $footer, $template)
    {
        $finalHtml = "";
        $finalHtml = $this->renderMenu($menu, $template);
        $finalHtml = $this->renderTitle($title, $finalHtml);
        $finalHtml = $this->renderContent($content, $finalHtml);
        $finalHtml = $this->renderFooter($footer, $finalHtml);  
        $finalHtml = $this->renderCss($css, $finalHtml);                      
        return $finalHtml;
    }
   
    public function renderMenu($menu, $template)
    {
        return str_replace('%%MENU%%', $menu, $template);       // On recherche %%TITLE%% pour le remplacer par $title dans notre $template       
    }
    public function renderTitle($title, $template) // RenderTitle doit prendre 2 arguments : le titre et template
    {
       return str_replace('%%TITLE%%', $title, $template);       // On recherche %%TITLE%% pour le remplacer par $title dans notre $template
    }
    public function renderContent($content, $template) 
    {
        return str_replace('%%CONTENT%%', $content, $template);
    }
    public function renderFooter($footer, $template)
    {
        return str_replace('%%FOOTER%%', $footer, $template);       // On recherche %%TITLE%% pour le remplacer par $title dans notre $template       
    }
    public function renderCss($css, $template)
    {
        return str_replace('%%STYLE%%', "<link rel='stylesheet' type=text/css href='Css/" . $css . "'>", $template);       // On recherche %%TITLE%% pour le remplacer par $title dans notre $template       
    }
  }