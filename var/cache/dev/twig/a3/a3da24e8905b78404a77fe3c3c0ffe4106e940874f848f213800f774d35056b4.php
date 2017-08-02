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
        $__internal_88a549184f3d887f75e1730b02167308062d6d88e6441ab065a86c237c3bb59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a549184f3d887f75e1730b02167308062d6d88e6441ab065a86c237c3bb59e->enter($__internal_88a549184f3d887f75e1730b02167308062d6d88e6441ab065a86c237c3bb59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_185777e0a8552cff7b56d7cc0f01d339873c63542a17dd9c6e542b6fc1529ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185777e0a8552cff7b56d7cc0f01d339873c63542a17dd9c6e542b6fc1529ed1->enter($__internal_185777e0a8552cff7b56d7cc0f01d339873c63542a17dd9c6e542b6fc1529ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <header style=\"width: 1350px; height: 100px;\">
        ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "    </header>
    <body style=\"background-color: \t#F8F8F8;\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    </body>
    <footer>
        ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "        ";
        // line 80
        echo "    </footer>
</html>
";
        
        $__internal_88a549184f3d887f75e1730b02167308062d6d88e6441ab065a86c237c3bb59e->leave($__internal_88a549184f3d887f75e1730b02167308062d6d88e6441ab065a86c237c3bb59e_prof);

        
        $__internal_185777e0a8552cff7b56d7cc0f01d339873c63542a17dd9c6e542b6fc1529ed1->leave($__internal_185777e0a8552cff7b56d7cc0f01d339873c63542a17dd9c6e542b6fc1529ed1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d7fd4fd15ea627e3af60764f47cfa6895c5250d76a169559ed0e3039920b8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7fd4fd15ea627e3af60764f47cfa6895c5250d76a169559ed0e3039920b8e4->enter($__internal_4d7fd4fd15ea627e3af60764f47cfa6895c5250d76a169559ed0e3039920b8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33cb3575a941739de990b5a1e8ae72a08dd5085ff7de0cb5571c4bd1c762f50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cb3575a941739de990b5a1e8ae72a08dd5085ff7de0cb5571c4bd1c762f50f->enter($__internal_33cb3575a941739de990b5a1e8ae72a08dd5085ff7de0cb5571c4bd1c762f50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "A Glimpse of Happiness";
        
        $__internal_33cb3575a941739de990b5a1e8ae72a08dd5085ff7de0cb5571c4bd1c762f50f->leave($__internal_33cb3575a941739de990b5a1e8ae72a08dd5085ff7de0cb5571c4bd1c762f50f_prof);

        
        $__internal_4d7fd4fd15ea627e3af60764f47cfa6895c5250d76a169559ed0e3039920b8e4->leave($__internal_4d7fd4fd15ea627e3af60764f47cfa6895c5250d76a169559ed0e3039920b8e4_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c761fb4139b560e7a6b22c27403ee9eb8eea0db52247431dec305804db6fb72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c761fb4139b560e7a6b22c27403ee9eb8eea0db52247431dec305804db6fb72->enter($__internal_1c761fb4139b560e7a6b22c27403ee9eb8eea0db52247431dec305804db6fb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_611892c518f4c77a9a18cb7976b7d407818b6f2c197ec1261b1e5423188f50a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611892c518f4c77a9a18cb7976b7d407818b6f2c197ec1261b1e5423188f50a8->enter($__internal_611892c518f4c77a9a18cb7976b7d407818b6f2c197ec1261b1e5423188f50a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        ";
        
        $__internal_611892c518f4c77a9a18cb7976b7d407818b6f2c197ec1261b1e5423188f50a8->leave($__internal_611892c518f4c77a9a18cb7976b7d407818b6f2c197ec1261b1e5423188f50a8_prof);

        
        $__internal_1c761fb4139b560e7a6b22c27403ee9eb8eea0db52247431dec305804db6fb72->leave($__internal_1c761fb4139b560e7a6b22c27403ee9eb8eea0db52247431dec305804db6fb72_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_9a2c05f79e54eca7eff736493ef3e2c25a935e9e1404d5828a51e1a8f066b00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2c05f79e54eca7eff736493ef3e2c25a935e9e1404d5828a51e1a8f066b00a->enter($__internal_9a2c05f79e54eca7eff736493ef3e2c25a935e9e1404d5828a51e1a8f066b00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8d6e5864d9cc4b640635eab5ce6530e7d4896cfc40d3a234de6ec5be59850c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6e5864d9cc4b640635eab5ce6530e7d4896cfc40d3a234de6ec5be59850c38->enter($__internal_8d6e5864d9cc4b640635eab5ce6530e7d4896cfc40d3a234de6ec5be59850c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "            <nav class=\"navbar navbar-default navbar-fixed-top\" style=\"border: hidden\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-3 navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand brand-font\" href=\"homepage\" style=\"margin-top: 10px;\">A Glimpse of Happiness</a>
                        </div>
                        <div class=\"col-md-2\"></div>
                        <div class=\"col-md-7 collapse navbar-collapse\" id=\"myNavbar\" style=\"margin-top: 15px;\">
                            <ul class=\"nav navbar-nav menu-font\">
                                <li><a href=\"#myPage\" class=\"menu-font\">Home</a></li>
                                <li class=\"dropdown\">
                                    <a class=\"dropdown-toggle menu-font\" data-toggle=\"dropdown\" href=\"#\">Posts
                                        <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Lifestyle</a></li>
                                        <li><a href=\"#\">Travel</a></li>
                                        <li><a href=\"#\">Photography</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"about-me\" class=\"menu-font\">About me</a></li>
                                <li><a href=\"contact\" class=\"menu-font\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_8d6e5864d9cc4b640635eab5ce6530e7d4896cfc40d3a234de6ec5be59850c38->leave($__internal_8d6e5864d9cc4b640635eab5ce6530e7d4896cfc40d3a234de6ec5be59850c38_prof);

        
        $__internal_9a2c05f79e54eca7eff736493ef3e2c25a935e9e1404d5828a51e1a8f066b00a->leave($__internal_9a2c05f79e54eca7eff736493ef3e2c25a935e9e1404d5828a51e1a8f066b00a_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_b35f0230a172dfbe553030f6b630b6a549fb2604eb340a27b219625db5a1f509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35f0230a172dfbe553030f6b630b6a549fb2604eb340a27b219625db5a1f509->enter($__internal_b35f0230a172dfbe553030f6b630b6a549fb2604eb340a27b219625db5a1f509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9df27a6f8589b971989c3541299229f655d1f9ec08471430b286a2d326f3ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9df27a6f8589b971989c3541299229f655d1f9ec08471430b286a2d326f3ab9->enter($__internal_e9df27a6f8589b971989c3541299229f655d1f9ec08471430b286a2d326f3ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9df27a6f8589b971989c3541299229f655d1f9ec08471430b286a2d326f3ab9->leave($__internal_e9df27a6f8589b971989c3541299229f655d1f9ec08471430b286a2d326f3ab9_prof);

        
        $__internal_b35f0230a172dfbe553030f6b630b6a549fb2604eb340a27b219625db5a1f509->leave($__internal_b35f0230a172dfbe553030f6b630b6a549fb2604eb340a27b219625db5a1f509_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a145a8c37c39503d28a290ae5b39e899a3cd5021fc81c9a815d46f0235891306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a145a8c37c39503d28a290ae5b39e899a3cd5021fc81c9a815d46f0235891306->enter($__internal_a145a8c37c39503d28a290ae5b39e899a3cd5021fc81c9a815d46f0235891306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e2ffe82012d153fc705ac5dc06d57a87e38e4c3d1158d84e1846bcf610466aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2ffe82012d153fc705ac5dc06d57a87e38e4c3d1158d84e1846bcf610466aa->enter($__internal_5e2ffe82012d153fc705ac5dc06d57a87e38e4c3d1158d84e1846bcf610466aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/toggle.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5e2ffe82012d153fc705ac5dc06d57a87e38e4c3d1158d84e1846bcf610466aa->leave($__internal_5e2ffe82012d153fc705ac5dc06d57a87e38e4c3d1158d84e1846bcf610466aa_prof);

        
        $__internal_a145a8c37c39503d28a290ae5b39e899a3cd5021fc81c9a815d46f0235891306->leave($__internal_a145a8c37c39503d28a290ae5b39e899a3cd5021fc81c9a815d46f0235891306_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_56098f25ca57bd987aa5fe68fe41ee7162685937371fcb291cc2283fa9dc546b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56098f25ca57bd987aa5fe68fe41ee7162685937371fcb291cc2283fa9dc546b->enter($__internal_56098f25ca57bd987aa5fe68fe41ee7162685937371fcb291cc2283fa9dc546b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ea58cd1e8b52f0b1445d5c08364dd4cdafdfa8ffee0588c05214df7c7d778446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea58cd1e8b52f0b1445d5c08364dd4cdafdfa8ffee0588c05214df7c7d778446->enter($__internal_ea58cd1e8b52f0b1445d5c08364dd4cdafdfa8ffee0588c05214df7c7d778446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_ea58cd1e8b52f0b1445d5c08364dd4cdafdfa8ffee0588c05214df7c7d778446->leave($__internal_ea58cd1e8b52f0b1445d5c08364dd4cdafdfa8ffee0588c05214df7c7d778446_prof);

        
        $__internal_56098f25ca57bd987aa5fe68fe41ee7162685937371fcb291cc2283fa9dc546b->leave($__internal_56098f25ca57bd987aa5fe68fe41ee7162685937371fcb291cc2283fa9dc546b_prof);

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
        return array (  241 => 62,  229 => 58,  225 => 57,  222 => 56,  213 => 55,  196 => 54,  155 => 20,  146 => 19,  134 => 14,  130 => 13,  126 => 12,  122 => 11,  118 => 10,  114 => 9,  109 => 8,  100 => 7,  82 => 6,  70 => 80,  68 => 63,  66 => 62,  62 => 60,  59 => 55,  57 => 54,  53 => 52,  51 => 19,  44 => 16,  42 => 7,  38 => 6,  31 => 1,);
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
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <header style=\"width: 1350px; height: 100px;\">
        {% block header %}
            <nav class=\"navbar navbar-default navbar-fixed-top\" style=\"border: hidden\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-3 navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand brand-font\" href=\"homepage\" style=\"margin-top: 10px;\">A Glimpse of Happiness</a>
                        </div>
                        <div class=\"col-md-2\"></div>
                        <div class=\"col-md-7 collapse navbar-collapse\" id=\"myNavbar\" style=\"margin-top: 15px;\">
                            <ul class=\"nav navbar-nav menu-font\">
                                <li><a href=\"#myPage\" class=\"menu-font\">Home</a></li>
                                <li class=\"dropdown\">
                                    <a class=\"dropdown-toggle menu-font\" data-toggle=\"dropdown\" href=\"#\">Posts
                                        <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Lifestyle</a></li>
                                        <li><a href=\"#\">Travel</a></li>
                                        <li><a href=\"#\">Photography</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"about-me\" class=\"menu-font\">About me</a></li>
                                <li><a href=\"contact\" class=\"menu-font\">Contact</a></li>
                            </ul>
                        </div>
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
        {% block footer %} {% endblock %}
        {# {% block footer %}
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
        {% endblock %} #}
    </footer>
</html>
", "base.html.twig", "D:\\Blog\\aglimpseofhappiness\\app\\Resources\\views\\base.html.twig");
    }
}
