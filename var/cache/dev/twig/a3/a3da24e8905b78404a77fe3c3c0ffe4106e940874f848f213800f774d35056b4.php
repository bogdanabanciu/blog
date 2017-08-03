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
        $__internal_32480fd20e0d9dc5c34690d536c62698c5bd172c58e00416f9738a2d35eed694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32480fd20e0d9dc5c34690d536c62698c5bd172c58e00416f9738a2d35eed694->enter($__internal_32480fd20e0d9dc5c34690d536c62698c5bd172c58e00416f9738a2d35eed694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_114ea33202bfe7a807dd9b4b649489ab143b9420ae7b3224430d9543d613d42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114ea33202bfe7a807dd9b4b649489ab143b9420ae7b3224430d9543d613d42c->enter($__internal_114ea33202bfe7a807dd9b4b649489ab143b9420ae7b3224430d9543d613d42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_32480fd20e0d9dc5c34690d536c62698c5bd172c58e00416f9738a2d35eed694->leave($__internal_32480fd20e0d9dc5c34690d536c62698c5bd172c58e00416f9738a2d35eed694_prof);

        
        $__internal_114ea33202bfe7a807dd9b4b649489ab143b9420ae7b3224430d9543d613d42c->leave($__internal_114ea33202bfe7a807dd9b4b649489ab143b9420ae7b3224430d9543d613d42c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e7af679f15b55cc255bb8138ad695d078775d81893de6829c79fd628960a36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7af679f15b55cc255bb8138ad695d078775d81893de6829c79fd628960a36e->enter($__internal_2e7af679f15b55cc255bb8138ad695d078775d81893de6829c79fd628960a36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_439cb4433a3e3a5b5528bdf2c40da9a2551494dec5f3735b5c7d53d8bbbe0a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439cb4433a3e3a5b5528bdf2c40da9a2551494dec5f3735b5c7d53d8bbbe0a0d->enter($__internal_439cb4433a3e3a5b5528bdf2c40da9a2551494dec5f3735b5c7d53d8bbbe0a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "A Glimpse of Happiness";
        
        $__internal_439cb4433a3e3a5b5528bdf2c40da9a2551494dec5f3735b5c7d53d8bbbe0a0d->leave($__internal_439cb4433a3e3a5b5528bdf2c40da9a2551494dec5f3735b5c7d53d8bbbe0a0d_prof);

        
        $__internal_2e7af679f15b55cc255bb8138ad695d078775d81893de6829c79fd628960a36e->leave($__internal_2e7af679f15b55cc255bb8138ad695d078775d81893de6829c79fd628960a36e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9adfefca4b99b5b6e83088a70de92c7e6e890e750b39ace0fcd098a9d9ce72d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9adfefca4b99b5b6e83088a70de92c7e6e890e750b39ace0fcd098a9d9ce72d8->enter($__internal_9adfefca4b99b5b6e83088a70de92c7e6e890e750b39ace0fcd098a9d9ce72d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0e71a39537c3de4e6fdd4353e7709daac38d1d052685622dcf52442e4b24547f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e71a39537c3de4e6fdd4353e7709daac38d1d052685622dcf52442e4b24547f->enter($__internal_0e71a39537c3de4e6fdd4353e7709daac38d1d052685622dcf52442e4b24547f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0e71a39537c3de4e6fdd4353e7709daac38d1d052685622dcf52442e4b24547f->leave($__internal_0e71a39537c3de4e6fdd4353e7709daac38d1d052685622dcf52442e4b24547f_prof);

        
        $__internal_9adfefca4b99b5b6e83088a70de92c7e6e890e750b39ace0fcd098a9d9ce72d8->leave($__internal_9adfefca4b99b5b6e83088a70de92c7e6e890e750b39ace0fcd098a9d9ce72d8_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_cb56533bd919385643a59bef93677be9e59f69abead30be05d0659195be19f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb56533bd919385643a59bef93677be9e59f69abead30be05d0659195be19f89->enter($__internal_cb56533bd919385643a59bef93677be9e59f69abead30be05d0659195be19f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_fb95e7581538c3fea93425a1474cfaf3b16db468e1a2d8b35c6e6fcf0e4648e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb95e7581538c3fea93425a1474cfaf3b16db468e1a2d8b35c6e6fcf0e4648e4->enter($__internal_fb95e7581538c3fea93425a1474cfaf3b16db468e1a2d8b35c6e6fcf0e4648e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                                <li><a href=\"homepage\" class=\"menu-font\">Home</a></li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a class=\"dropdown-toggle menu-font\" data-toggle=\"dropdown\" role=\"button\" id=\"dropDownPost\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\">Posts
                                        <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropDownPost\">
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
        
        $__internal_fb95e7581538c3fea93425a1474cfaf3b16db468e1a2d8b35c6e6fcf0e4648e4->leave($__internal_fb95e7581538c3fea93425a1474cfaf3b16db468e1a2d8b35c6e6fcf0e4648e4_prof);

        
        $__internal_cb56533bd919385643a59bef93677be9e59f69abead30be05d0659195be19f89->leave($__internal_cb56533bd919385643a59bef93677be9e59f69abead30be05d0659195be19f89_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_93f014eda1e1fadc36c8ccc3250f11971d013e712b243113892e34628c955df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f014eda1e1fadc36c8ccc3250f11971d013e712b243113892e34628c955df1->enter($__internal_93f014eda1e1fadc36c8ccc3250f11971d013e712b243113892e34628c955df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73d575292603d2903bb110cc3e056085192c9b6621460cccfb5cef70550a6a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d575292603d2903bb110cc3e056085192c9b6621460cccfb5cef70550a6a18->enter($__internal_73d575292603d2903bb110cc3e056085192c9b6621460cccfb5cef70550a6a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_73d575292603d2903bb110cc3e056085192c9b6621460cccfb5cef70550a6a18->leave($__internal_73d575292603d2903bb110cc3e056085192c9b6621460cccfb5cef70550a6a18_prof);

        
        $__internal_93f014eda1e1fadc36c8ccc3250f11971d013e712b243113892e34628c955df1->leave($__internal_93f014eda1e1fadc36c8ccc3250f11971d013e712b243113892e34628c955df1_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64f791a472e49f0b6ab1be9adc33c4e99564e60bda288d8209ae1a3a496ae0fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f791a472e49f0b6ab1be9adc33c4e99564e60bda288d8209ae1a3a496ae0fd->enter($__internal_64f791a472e49f0b6ab1be9adc33c4e99564e60bda288d8209ae1a3a496ae0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9efe42be77f4dd7f85fd2c6525a5944aa0273b6a637a528e942e70fe6bcb2d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efe42be77f4dd7f85fd2c6525a5944aa0273b6a637a528e942e70fe6bcb2d0e->enter($__internal_9efe42be77f4dd7f85fd2c6525a5944aa0273b6a637a528e942e70fe6bcb2d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9efe42be77f4dd7f85fd2c6525a5944aa0273b6a637a528e942e70fe6bcb2d0e->leave($__internal_9efe42be77f4dd7f85fd2c6525a5944aa0273b6a637a528e942e70fe6bcb2d0e_prof);

        
        $__internal_64f791a472e49f0b6ab1be9adc33c4e99564e60bda288d8209ae1a3a496ae0fd->leave($__internal_64f791a472e49f0b6ab1be9adc33c4e99564e60bda288d8209ae1a3a496ae0fd_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bf5483af30b82b014f54217988ec303298b8f9125589fcf90366c61fcfcffd2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5483af30b82b014f54217988ec303298b8f9125589fcf90366c61fcfcffd2f->enter($__internal_bf5483af30b82b014f54217988ec303298b8f9125589fcf90366c61fcfcffd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_48d28e8e6c3de18a354bad25660493078e74b7b847fd870ea9510011082d83aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d28e8e6c3de18a354bad25660493078e74b7b847fd870ea9510011082d83aa->enter($__internal_48d28e8e6c3de18a354bad25660493078e74b7b847fd870ea9510011082d83aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_48d28e8e6c3de18a354bad25660493078e74b7b847fd870ea9510011082d83aa->leave($__internal_48d28e8e6c3de18a354bad25660493078e74b7b847fd870ea9510011082d83aa_prof);

        
        $__internal_bf5483af30b82b014f54217988ec303298b8f9125589fcf90366c61fcfcffd2f->leave($__internal_bf5483af30b82b014f54217988ec303298b8f9125589fcf90366c61fcfcffd2f_prof);

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
                                <li><a href=\"homepage\" class=\"menu-font\">Home</a></li>
                                <li class=\"dropdown\" role=\"presentation\">
                                    <a class=\"dropdown-toggle menu-font\" data-toggle=\"dropdown\" role=\"button\" id=\"dropDownPost\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\">Posts
                                        <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropDownPost\">
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
