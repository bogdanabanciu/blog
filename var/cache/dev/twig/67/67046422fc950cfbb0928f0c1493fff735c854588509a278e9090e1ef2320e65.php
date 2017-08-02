<?php

/* default/index.html.twig */
class __TwigTemplate_6420f902b2ac7ffa99f6ea01e49d2a8e2784fd81fbd0bcd0a8da990ebd2ec4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_251da262f82e52d07237ad99efcd73469e8a98660a8a3d1342af6c4d0e2215d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251da262f82e52d07237ad99efcd73469e8a98660a8a3d1342af6c4d0e2215d7->enter($__internal_251da262f82e52d07237ad99efcd73469e8a98660a8a3d1342af6c4d0e2215d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_86829f6cdbed12fe050fdcfbd234060244341b216419aa62c6967a4db75549be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86829f6cdbed12fe050fdcfbd234060244341b216419aa62c6967a4db75549be->enter($__internal_86829f6cdbed12fe050fdcfbd234060244341b216419aa62c6967a4db75549be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_251da262f82e52d07237ad99efcd73469e8a98660a8a3d1342af6c4d0e2215d7->leave($__internal_251da262f82e52d07237ad99efcd73469e8a98660a8a3d1342af6c4d0e2215d7_prof);

        
        $__internal_86829f6cdbed12fe050fdcfbd234060244341b216419aa62c6967a4db75549be->leave($__internal_86829f6cdbed12fe050fdcfbd234060244341b216419aa62c6967a4db75549be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_904927aeadcfc51b46d30dee2790f5684a73d4f934ad4567eb96c2b1219e765b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904927aeadcfc51b46d30dee2790f5684a73d4f934ad4567eb96c2b1219e765b->enter($__internal_904927aeadcfc51b46d30dee2790f5684a73d4f934ad4567eb96c2b1219e765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_785b83eea59a31178a5e2ae64aafffe2148a3f15d2210769511af2dac3aafc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785b83eea59a31178a5e2ae64aafffe2148a3f15d2210769511af2dac3aafc85->enter($__internal_785b83eea59a31178a5e2ae64aafffe2148a3f15d2210769511af2dac3aafc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "       <div class=\"row\" style=\"background-color: \t#F8F8F8\">
            <div class=\"col-lg-3\">
                <h1>A Glimpse of Happiness</h1>
            </div>
            <div class=\"col-lg-6\">
                <ul>
                    <li><a href=\"#home\">Home</a></li>
                    <li><a data-toggle=\"collapse\" href=\"#posts\">Posts <span class=\"caret\"></span></a></li>
                    <li><a href=\"#about\">About me</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
            </div>
            <div class=\"col-lg-3\">
                <ul id=\"media-bar\">
                    <li><a href=\"https://www.facebook.com/banciu.bogdana\" style=\"\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"https://www.instagram.com/bogdana.banciu/\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"https://ro.pinterest.com/bogdana_banciu/\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                </ul>
            </div>
       </div>

        <! -- Carousel -->
        <div id=\"myCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\" style=\"margin-top: 20px; height: 500px; width: 1950px;\">
            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active carousel-image\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/pictures/carousel/pic1.jpeg"), "html", null, true);
        echo "\">
                </div>
                <div class=\"item carousel-image\">
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/pictures/carousel/pic3.jpg"), "html", null, true);
        echo "\">
                </div>
            </div>
            <!-- Left and right controls -->
            <div>
                <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            <div>
                <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
        <!-- End of Carousel -->
        <!--     Info pe imaginile carouselului
         <div class=\"info-inner\">
             <div class=\"info-inner-content\">Content</div>
         </div>
         -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-4 col-md-4 zoom-image\" >
                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/pictures/lifestyle.jpg"), "html", null, true);
        echo "\">
                <div class=\"zoom-image-overlay top\"></div>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-4 zoom-image\">
                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/pictures/travel.jpg"), "html", null, true);
        echo "\">
                <div class=\"zoom-image-overlay top\"></div>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-4 zoom-image\">
                <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/pictures/photography.jpg"), "html", null, true);
        echo "\">
                <div class=\"zoom-image-overlay top\"></div>
            </div>
        </div>
    </div>

";
        
        $__internal_785b83eea59a31178a5e2ae64aafffe2148a3f15d2210769511af2dac3aafc85->leave($__internal_785b83eea59a31178a5e2ae64aafffe2148a3f15d2210769511af2dac3aafc85_prof);

        
        $__internal_904927aeadcfc51b46d30dee2790f5684a73d4f934ad4567eb96c2b1219e765b->leave($__internal_904927aeadcfc51b46d30dee2790f5684a73d4f934ad4567eb96c2b1219e765b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 67,  119 => 63,  112 => 59,  83 => 33,  77 => 30,  49 => 4,  40 => 3,  11 => 1,);
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
       <div class=\"row\" style=\"background-color: \t#F8F8F8\">
            <div class=\"col-lg-3\">
                <h1>A Glimpse of Happiness</h1>
            </div>
            <div class=\"col-lg-6\">
                <ul>
                    <li><a href=\"#home\">Home</a></li>
                    <li><a data-toggle=\"collapse\" href=\"#posts\">Posts <span class=\"caret\"></span></a></li>
                    <li><a href=\"#about\">About me</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
            </div>
            <div class=\"col-lg-3\">
                <ul id=\"media-bar\">
                    <li><a href=\"https://www.facebook.com/banciu.bogdana\" style=\"\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"https://www.instagram.com/bogdana.banciu/\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"https://ro.pinterest.com/bogdana_banciu/\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                </ul>
            </div>
       </div>

        <! -- Carousel -->
        <div id=\"myCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\" style=\"margin-top: 20px; height: 500px; width: 1950px;\">
            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active carousel-image\">
                    <img src=\"{{ asset(\"/pictures/carousel/pic1.jpeg\") }}\">
                </div>
                <div class=\"item carousel-image\">
                    <img src=\"{{ asset(\"/pictures/carousel/pic3.jpg\") }}\">
                </div>
            </div>
            <!-- Left and right controls -->
            <div>
                <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            <div>
                <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
        <!-- End of Carousel -->
        <!--     Info pe imaginile carouselului
         <div class=\"info-inner\">
             <div class=\"info-inner-content\">Content</div>
         </div>
         -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-4 col-md-4 zoom-image\" >
                <img src=\"{{ asset(\"/pictures/lifestyle.jpg\") }}\">
                <div class=\"zoom-image-overlay top\"></div>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-4 zoom-image\">
                <img src=\"{{ asset(\"/pictures/travel.jpg\") }}\">
                <div class=\"zoom-image-overlay top\"></div>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-4 zoom-image\">
                <img src=\"{{ asset(\"/pictures/photography.jpg\") }}\">
                <div class=\"zoom-image-overlay top\"></div>
            </div>
        </div>
    </div>

{% endblock %}
", "default/index.html.twig", "D:\\Blog\\aglimpseofhappiness\\app\\Resources\\views\\default\\index.html.twig");
    }
}
