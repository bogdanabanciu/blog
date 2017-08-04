<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d23a686ecd1577ccfadf0d8df7b811ff509feb70254d093a5013f5a796902796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23a686ecd1577ccfadf0d8df7b811ff509feb70254d093a5013f5a796902796->enter($__internal_d23a686ecd1577ccfadf0d8df7b811ff509feb70254d093a5013f5a796902796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_63f7803502b14b0dac83e50c80c070e0b18d2942ca914f9d19d59532581d87e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f7803502b14b0dac83e50c80c070e0b18d2942ca914f9d19d59532581d87e8->enter($__internal_63f7803502b14b0dac83e50c80c070e0b18d2942ca914f9d19d59532581d87e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html style=\"background-color: \t#F8F8F8\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <header style=\"width: 1350px; height: 100px;\">
        ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "    </header>
    <body style=\"background-color: \t#F8F8F8;\">
        ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "    </body>
    <footer>
        ";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        echo "    </footer>
</html>
";
        
        $__internal_d23a686ecd1577ccfadf0d8df7b811ff509feb70254d093a5013f5a796902796->leave($__internal_d23a686ecd1577ccfadf0d8df7b811ff509feb70254d093a5013f5a796902796_prof);

        
        $__internal_63f7803502b14b0dac83e50c80c070e0b18d2942ca914f9d19d59532581d87e8->leave($__internal_63f7803502b14b0dac83e50c80c070e0b18d2942ca914f9d19d59532581d87e8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_be66d58372e10374743d47a7d3ff76e6e6e50bb09768701c1fd649c5251584f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be66d58372e10374743d47a7d3ff76e6e6e50bb09768701c1fd649c5251584f2->enter($__internal_be66d58372e10374743d47a7d3ff76e6e6e50bb09768701c1fd649c5251584f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9703ede66730c4bd60e079724ee2ffa8ee27ea93bba6eedf560263dcbe894354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9703ede66730c4bd60e079724ee2ffa8ee27ea93bba6eedf560263dcbe894354->enter($__internal_9703ede66730c4bd60e079724ee2ffa8ee27ea93bba6eedf560263dcbe894354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "A Glimpse of Happiness";
        
        $__internal_9703ede66730c4bd60e079724ee2ffa8ee27ea93bba6eedf560263dcbe894354->leave($__internal_9703ede66730c4bd60e079724ee2ffa8ee27ea93bba6eedf560263dcbe894354_prof);

        
        $__internal_be66d58372e10374743d47a7d3ff76e6e6e50bb09768701c1fd649c5251584f2->leave($__internal_be66d58372e10374743d47a7d3ff76e6e6e50bb09768701c1fd649c5251584f2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27da5543e5ba84d53ecbab86bb45ea8f695f7574ea0af19ada64c2ebc40f269f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27da5543e5ba84d53ecbab86bb45ea8f695f7574ea0af19ada64c2ebc40f269f->enter($__internal_27da5543e5ba84d53ecbab86bb45ea8f695f7574ea0af19ada64c2ebc40f269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c232f627cfa08403cf2ed2182b2376da3281e4628bb4813292dc363f6c5fc4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c232f627cfa08403cf2ed2182b2376da3281e4628bb4813292dc363f6c5fc4b0->enter($__internal_c232f627cfa08403cf2ed2182b2376da3281e4628bb4813292dc363f6c5fc4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome-4.7.0/css/font-awesome.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menu-bar.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/text-sizes.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/images.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/general.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/about-me.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/test.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_c232f627cfa08403cf2ed2182b2376da3281e4628bb4813292dc363f6c5fc4b0->leave($__internal_c232f627cfa08403cf2ed2182b2376da3281e4628bb4813292dc363f6c5fc4b0_prof);

        
        $__internal_27da5543e5ba84d53ecbab86bb45ea8f695f7574ea0af19ada64c2ebc40f269f->leave($__internal_27da5543e5ba84d53ecbab86bb45ea8f695f7574ea0af19ada64c2ebc40f269f_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_6c2e77873cc8efd10795eba3bd052590a4130aef73f1ed849dad8a52deea08b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2e77873cc8efd10795eba3bd052590a4130aef73f1ed849dad8a52deea08b1->enter($__internal_6c2e77873cc8efd10795eba3bd052590a4130aef73f1ed849dad8a52deea08b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_198ccb0b9174d6c82aee5a9071cf708a7e109c96d6a47763f70c5df492be0e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198ccb0b9174d6c82aee5a9071cf708a7e109c96d6a47763f70c5df492be0e8b->enter($__internal_198ccb0b9174d6c82aee5a9071cf708a7e109c96d6a47763f70c5df492be0e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "            <nav class=\"navbar navbar-default\" style=\"border: hidden\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-5 navbar-header\" style=\"margin-right: 10px;\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                                <span class=\"sr-only\">Navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand brand-font\" href=\"homepage\" style=\"margin-top: 10px;\">A Glimpse of Happiness</a>
                        </div>
                        <div class=\"col-md-1\"></div>
                        <div class=\"col-md-6 collapse navbar-collapse\" id=\"myNavbar\" style=\"margin-top: 15px;\">
                            <ul class=\"nav navbar-nav menu-font\">
                                <li><a href=\"homepage\" class=\"menu-font\">Home</a></li>
                                <li class=\"dropdown\">
                                    <a class=\"dropdown-toggle menu-font\" data-toggle=\"dropdown\" href=\"#\">Posts
                                        <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"lifestyle\">Lifestyle</a></li>
                                        <li><a href=\"travel\">Travel</a></li>
                                        <li><a href=\"photography\">Photography</a></li>
                                    </ul>
                                <li><a href=\"about-me\" class=\"menu-font\">About me</a></li>
                                <li><a href=\"contact\" class=\"menu-font\">Contact</a></li>
                            </ul>
                        </div>
                        <!--<div class=\"col-sm-3\">
                            <ul id=\"media-bar\">
                                <li><a href=\"https://www.facebook.com/banciu.bogdana\" style=\"\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"https://www.instagram.com/bogdana.banciu/\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"https://ro.pinterest.com/bogdana_banciu/\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_198ccb0b9174d6c82aee5a9071cf708a7e109c96d6a47763f70c5df492be0e8b->leave($__internal_198ccb0b9174d6c82aee5a9071cf708a7e109c96d6a47763f70c5df492be0e8b_prof);

        
        $__internal_6c2e77873cc8efd10795eba3bd052590a4130aef73f1ed849dad8a52deea08b1->leave($__internal_6c2e77873cc8efd10795eba3bd052590a4130aef73f1ed849dad8a52deea08b1_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccbad0b720d3ddc2504f0925adba1862dc9f88877053d93e24a6a5141b544f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbad0b720d3ddc2504f0925adba1862dc9f88877053d93e24a6a5141b544f0d->enter($__internal_ccbad0b720d3ddc2504f0925adba1862dc9f88877053d93e24a6a5141b544f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97ec8a5ff227783c738b137528a26958c0cc273e9cec7ce791957a5acf81c3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ec8a5ff227783c738b137528a26958c0cc273e9cec7ce791957a5acf81c3eb->enter($__internal_97ec8a5ff227783c738b137528a26958c0cc273e9cec7ce791957a5acf81c3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97ec8a5ff227783c738b137528a26958c0cc273e9cec7ce791957a5acf81c3eb->leave($__internal_97ec8a5ff227783c738b137528a26958c0cc273e9cec7ce791957a5acf81c3eb_prof);

        
        $__internal_ccbad0b720d3ddc2504f0925adba1862dc9f88877053d93e24a6a5141b544f0d->leave($__internal_ccbad0b720d3ddc2504f0925adba1862dc9f88877053d93e24a6a5141b544f0d_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_487359e6ece22223fa2418c4e2daaa486d7d232d5995ad9f3710f4573ce9dffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487359e6ece22223fa2418c4e2daaa486d7d232d5995ad9f3710f4573ce9dffd->enter($__internal_487359e6ece22223fa2418c4e2daaa486d7d232d5995ad9f3710f4573ce9dffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5141fe88cb12c7a1c1c1e34a1728050b8c1ab70c037476238af855374008dfc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5141fe88cb12c7a1c1c1e34a1728050b8c1ab70c037476238af855374008dfc6->enter($__internal_5141fe88cb12c7a1c1c1e34a1728050b8c1ab70c037476238af855374008dfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/toggle.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5141fe88cb12c7a1c1c1e34a1728050b8c1ab70c037476238af855374008dfc6->leave($__internal_5141fe88cb12c7a1c1c1e34a1728050b8c1ab70c037476238af855374008dfc6_prof);

        
        $__internal_487359e6ece22223fa2418c4e2daaa486d7d232d5995ad9f3710f4573ce9dffd->leave($__internal_487359e6ece22223fa2418c4e2daaa486d7d232d5995ad9f3710f4573ce9dffd_prof);

    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d8640a7667c7f8323fd028c7ebe94eeb850810b531a8508c462b1fe7ff4fd5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8640a7667c7f8323fd028c7ebe94eeb850810b531a8508c462b1fe7ff4fd5ca->enter($__internal_d8640a7667c7f8323fd028c7ebe94eeb850810b531a8508c462b1fe7ff4fd5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e92e19ca5bc73daff70d57d93a4cba641b2fc50483e99d83c3b65db6df41c8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92e19ca5bc73daff70d57d93a4cba641b2fc50483e99d83c3b65db6df41c8c0->enter($__internal_e92e19ca5bc73daff70d57d93a4cba641b2fc50483e99d83c3b65db6df41c8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 71
        echo "            <hr>
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
        
        $__internal_e92e19ca5bc73daff70d57d93a4cba641b2fc50483e99d83c3b65db6df41c8c0->leave($__internal_e92e19ca5bc73daff70d57d93a4cba641b2fc50483e99d83c3b65db6df41c8c0_prof);

        
        $__internal_d8640a7667c7f8323fd028c7ebe94eeb850810b531a8508c462b1fe7ff4fd5ca->leave($__internal_d8640a7667c7f8323fd028c7ebe94eeb850810b531a8508c462b1fe7ff4fd5ca_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 71,  250 => 70,  238 => 66,  234 => 65,  231 => 64,  222 => 63,  205 => 62,  157 => 21,  148 => 20,  136 => 15,  132 => 14,  128 => 13,  124 => 12,  120 => 11,  116 => 10,  112 => 9,  107 => 8,  98 => 7,  80 => 6,  68 => 87,  66 => 70,  62 => 68,  59 => 63,  57 => 62,  53 => 60,  51 => 20,  44 => 17,  42 => 7,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html style=\"background-color: \t#F8F8F8\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}A Glimpse of Happiness{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset(\"bootstrap/css/bootstrap.css\") }}\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"font-awesome-4.7.0/css/font-awesome.css\") }}\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"css/menu-bar.css\") }}\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"css/text-sizes.css\") }}\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"css/images.css\") }}\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"css/general.css\") }}\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"css/about-me.css\") }}\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"css/test.css\") }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <header style=\"width: 1350px; height: 100px;\">
        {% block header %}
            <nav class=\"navbar navbar-default\" style=\"border: hidden\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-5 navbar-header\" style=\"margin-right: 10px;\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                                <span class=\"sr-only\">Navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand brand-font\" href=\"homepage\" style=\"margin-top: 10px;\">A Glimpse of Happiness</a>
                        </div>
                        <div class=\"col-md-1\"></div>
                        <div class=\"col-md-6 collapse navbar-collapse\" id=\"myNavbar\" style=\"margin-top: 15px;\">
                            <ul class=\"nav navbar-nav menu-font\">
                                <li><a href=\"homepage\" class=\"menu-font\">Home</a></li>
                                <li class=\"dropdown\">
                                    <a class=\"dropdown-toggle menu-font\" data-toggle=\"dropdown\" href=\"#\">Posts
                                        <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"lifestyle\">Lifestyle</a></li>
                                        <li><a href=\"travel\">Travel</a></li>
                                        <li><a href=\"photography\">Photography</a></li>
                                    </ul>
                                <li><a href=\"about-me\" class=\"menu-font\">About me</a></li>
                                <li><a href=\"contact\" class=\"menu-font\">Contact</a></li>
                            </ul>
                        </div>
                        <!--<div class=\"col-sm-3\">
                            <ul id=\"media-bar\">
                                <li><a href=\"https://www.facebook.com/banciu.bogdana\" style=\"\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"https://www.instagram.com/bogdana.banciu/\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"https://ro.pinterest.com/bogdana_banciu/\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </nav>
        {% endblock %}
    </header>
    <body style=\"background-color: \t#F8F8F8;\">
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
            <script src=\"{{ asset(\"bootstrap/js/bootstrap.js\") }}\"></script>
            <script src=\"{{ asset(\"js/toggle.js\") }}\"></script>
        {% endblock %}
    </body>
    <footer>
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
    </footer>
</html>
", "base.html.twig", "D:\\Blog\\aglimpseofhappiness\\app\\Resources\\views\\base.html.twig");
    }
}
