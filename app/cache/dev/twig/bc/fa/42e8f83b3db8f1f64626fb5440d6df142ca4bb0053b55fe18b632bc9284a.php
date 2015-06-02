<?php

/* FOSOAuthServerBundle::form.html.twig */
class __TwigTemplate_bcfa42e8f83b3db8f1f64626fb5440d6df142ca4bb0053b55fe18b632bc9284a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
    }

    public function block_field_label($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  29 => 3,  23 => 2,  20 => 1,);
    }
}
