<?php

/* index.html */
class __TwigTemplate_719a503940ee7d67de44182b7c5684596deb545c35dbb3798c9a3cdc4d5e665b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <link rel=\"stylesheet\" href=\"Public/css/bulma.min.css\">
    </head>
    <body>
        <h1>Hello world</h1>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "C:\\laragon\\www\\pinjamanbuku\\views\\index.html");
    }
}
