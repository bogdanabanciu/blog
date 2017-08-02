<?php

/* about-me/about.html.twig */
class __TwigTemplate_471499dee78e56c6c159568899b01c97ecabc4e43eb5ff1f438f3d021cf3dc07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "about-me/about.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee4937193769368dd3370263286fdb252cb4c092d9e7e03d1b0703ab68498341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4937193769368dd3370263286fdb252cb4c092d9e7e03d1b0703ab68498341->enter($__internal_ee4937193769368dd3370263286fdb252cb4c092d9e7e03d1b0703ab68498341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about-me/about.html.twig"));

        $__internal_12b2e784a16747f65e7a852e2007969ff3202917915a432bee507801e42dab17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b2e784a16747f65e7a852e2007969ff3202917915a432bee507801e42dab17->enter($__internal_12b2e784a16747f65e7a852e2007969ff3202917915a432bee507801e42dab17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about-me/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee4937193769368dd3370263286fdb252cb4c092d9e7e03d1b0703ab68498341->leave($__internal_ee4937193769368dd3370263286fdb252cb4c092d9e7e03d1b0703ab68498341_prof);

        
        $__internal_12b2e784a16747f65e7a852e2007969ff3202917915a432bee507801e42dab17->leave($__internal_12b2e784a16747f65e7a852e2007969ff3202917915a432bee507801e42dab17_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_398ebc33e229151c5097442f738e664b3e827883d25394911d3e4b08f86f177b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398ebc33e229151c5097442f738e664b3e827883d25394911d3e4b08f86f177b->enter($__internal_398ebc33e229151c5097442f738e664b3e827883d25394911d3e4b08f86f177b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65993a0735158a0fdd29d574a4ac8d556845e7d83ac8247aeca27194bb27b805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65993a0735158a0fdd29d574a4ac8d556845e7d83ac8247aeca27194bb27b805->enter($__internal_65993a0735158a0fdd29d574a4ac8d556845e7d83ac8247aeca27194bb27b805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container div-about\">
        <div class=\"row row-about div-about\">
            <div class=\"col-md-10 col-md-push-1\">
                <div class=\"entry-inner\">
                    <h2 style=\"text-align: center\">About me</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_65993a0735158a0fdd29d574a4ac8d556845e7d83ac8247aeca27194bb27b805->leave($__internal_65993a0735158a0fdd29d574a4ac8d556845e7d83ac8247aeca27194bb27b805_prof);

        
        $__internal_398ebc33e229151c5097442f738e664b3e827883d25394911d3e4b08f86f177b->leave($__internal_398ebc33e229151c5097442f738e664b3e827883d25394911d3e4b08f86f177b_prof);

    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        $__internal_08e452e5d5f1d2bc4eec07bcd1763fee5beff314259a03be3fe88c7bbff41360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e452e5d5f1d2bc4eec07bcd1763fee5beff314259a03be3fe88c7bbff41360->enter($__internal_08e452e5d5f1d2bc4eec07bcd1763fee5beff314259a03be3fe88c7bbff41360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1e51bc435719ec8f24c5bce31e0c52e8dc588e3482ad8b9c247e63ec1e054586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e51bc435719ec8f24c5bce31e0c52e8dc588e3482ad8b9c247e63ec1e054586->enter($__internal_1e51bc435719ec8f24c5bce31e0c52e8dc588e3482ad8b9c247e63ec1e054586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 19
        echo "    <hr>
    <ul class=\"nav nav-pills\" style=\"width: 500px; margin: 0 auto;\">
        <li class=\"list-style\"><a href=\"https://www.facebook.com/banciu.bogdana\" style=\" font-family: 'Segoe UI';\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> FACEBOOK</a></li>
        <li class=\"list-style\"><a href=\"https://www.instagram.com/bogdana.banciu/\" style=\"font-family: 'Segoe UI';\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> INSTAGRAM</a></li>
        <li class=\"list-style\"><a href=\"https://ro.pinterest.com/bogdana_banciu/\" style=\"font-family: 'Helvetica Neue'\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i> PINTEREST</a></li>
    </ul>
    <hr>

    <!-- SnapWidget -->
    <iframe src=\"https://snapwidget.com/embed/415030\" class=\"snapwidget-widget widget\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\"></iframe>

    <!-- Footer cu all rights reserved -->
    <div class=\"footer\">
        © 2017 Bogdana Banciu. All Rights Reserved.
    </div>
";
        
        $__internal_1e51bc435719ec8f24c5bce31e0c52e8dc588e3482ad8b9c247e63ec1e054586->leave($__internal_1e51bc435719ec8f24c5bce31e0c52e8dc588e3482ad8b9c247e63ec1e054586_prof);

        
        $__internal_08e452e5d5f1d2bc4eec07bcd1763fee5beff314259a03be3fe88c7bbff41360->leave($__internal_08e452e5d5f1d2bc4eec07bcd1763fee5beff314259a03be3fe88c7bbff41360_prof);

    }

    public function getTemplateName()
    {
        return "about-me/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  72 => 18,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container div-about\">
        <div class=\"row row-about div-about\">
            <div class=\"col-md-10 col-md-push-1\">
                <div class=\"entry-inner\">
                    <h2 style=\"text-align: center\">About me</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block footer %}
    <hr>
    <ul class=\"nav nav-pills\" style=\"width: 500px; margin: 0 auto;\">
        <li class=\"list-style\"><a href=\"https://www.facebook.com/banciu.bogdana\" style=\" font-family: 'Segoe UI';\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> FACEBOOK</a></li>
        <li class=\"list-style\"><a href=\"https://www.instagram.com/bogdana.banciu/\" style=\"font-family: 'Segoe UI';\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> INSTAGRAM</a></li>
        <li class=\"list-style\"><a href=\"https://ro.pinterest.com/bogdana_banciu/\" style=\"font-family: 'Helvetica Neue'\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i> PINTEREST</a></li>
    </ul>
    <hr>

    <!-- SnapWidget -->
    <iframe src=\"https://snapwidget.com/embed/415030\" class=\"snapwidget-widget widget\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\"></iframe>

    <!-- Footer cu all rights reserved -->
    <div class=\"footer\">
        © 2017 Bogdana Banciu. All Rights Reserved.
    </div>
{% endblock %}
", "about-me/about.html.twig", "D:\\Blog\\aglimpseofhappiness\\app\\Resources\\views\\about-me\\about.html.twig");
    }
}
