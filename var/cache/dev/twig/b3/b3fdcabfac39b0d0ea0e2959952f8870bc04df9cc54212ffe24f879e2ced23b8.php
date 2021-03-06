<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5c7d794fa6c483cc23024e8554e85045de7b64960d11115353ffe0b8fd7377a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c7d794fa6c483cc23024e8554e85045de7b64960d11115353ffe0b8fd7377a->enter($__internal_c5c7d794fa6c483cc23024e8554e85045de7b64960d11115353ffe0b8fd7377a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2cd76dbb3eed4d5ead591bd72fad9460aaa6362d9a8c3d151784d7b40a90ad6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd76dbb3eed4d5ead591bd72fad9460aaa6362d9a8c3d151784d7b40a90ad6d->enter($__internal_2cd76dbb3eed4d5ead591bd72fad9460aaa6362d9a8c3d151784d7b40a90ad6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c5c7d794fa6c483cc23024e8554e85045de7b64960d11115353ffe0b8fd7377a->leave($__internal_c5c7d794fa6c483cc23024e8554e85045de7b64960d11115353ffe0b8fd7377a_prof);

        
        $__internal_2cd76dbb3eed4d5ead591bd72fad9460aaa6362d9a8c3d151784d7b40a90ad6d->leave($__internal_2cd76dbb3eed4d5ead591bd72fad9460aaa6362d9a8c3d151784d7b40a90ad6d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a130a7ba0e6408504b42ea000a3b927c2a7120e1e587b08cd929d0463511976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a130a7ba0e6408504b42ea000a3b927c2a7120e1e587b08cd929d0463511976->enter($__internal_6a130a7ba0e6408504b42ea000a3b927c2a7120e1e587b08cd929d0463511976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c07e3d47bfecd52fca2ee5138be816cc0b44da184559140940ed4a05c278b4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07e3d47bfecd52fca2ee5138be816cc0b44da184559140940ed4a05c278b4f5->enter($__internal_c07e3d47bfecd52fca2ee5138be816cc0b44da184559140940ed4a05c278b4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c07e3d47bfecd52fca2ee5138be816cc0b44da184559140940ed4a05c278b4f5->leave($__internal_c07e3d47bfecd52fca2ee5138be816cc0b44da184559140940ed4a05c278b4f5_prof);

        
        $__internal_6a130a7ba0e6408504b42ea000a3b927c2a7120e1e587b08cd929d0463511976->leave($__internal_6a130a7ba0e6408504b42ea000a3b927c2a7120e1e587b08cd929d0463511976_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_efc390b49c7970ca2cca222a88eb06f7535f8759f4028ccf3b0357247d8c0fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc390b49c7970ca2cca222a88eb06f7535f8759f4028ccf3b0357247d8c0fa4->enter($__internal_efc390b49c7970ca2cca222a88eb06f7535f8759f4028ccf3b0357247d8c0fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b60e21aaebd340cd534e3bfa67c9691d1a7da031aba5641a0426aa53f6e7d3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60e21aaebd340cd534e3bfa67c9691d1a7da031aba5641a0426aa53f6e7d3d0->enter($__internal_b60e21aaebd340cd534e3bfa67c9691d1a7da031aba5641a0426aa53f6e7d3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b60e21aaebd340cd534e3bfa67c9691d1a7da031aba5641a0426aa53f6e7d3d0->leave($__internal_b60e21aaebd340cd534e3bfa67c9691d1a7da031aba5641a0426aa53f6e7d3d0_prof);

        
        $__internal_efc390b49c7970ca2cca222a88eb06f7535f8759f4028ccf3b0357247d8c0fa4->leave($__internal_efc390b49c7970ca2cca222a88eb06f7535f8759f4028ccf3b0357247d8c0fa4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea6fa99aa98b165fa6084e4300bea7403ac4b07f3d27952cc9780ff2070bac5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6fa99aa98b165fa6084e4300bea7403ac4b07f3d27952cc9780ff2070bac5b->enter($__internal_ea6fa99aa98b165fa6084e4300bea7403ac4b07f3d27952cc9780ff2070bac5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0ece9be14df22a3d219b84c0454ce00d849ee9e82b9f5ea1ea73e8dad9756f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ece9be14df22a3d219b84c0454ce00d849ee9e82b9f5ea1ea73e8dad9756f7->enter($__internal_f0ece9be14df22a3d219b84c0454ce00d849ee9e82b9f5ea1ea73e8dad9756f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0ece9be14df22a3d219b84c0454ce00d849ee9e82b9f5ea1ea73e8dad9756f7->leave($__internal_f0ece9be14df22a3d219b84c0454ce00d849ee9e82b9f5ea1ea73e8dad9756f7_prof);

        
        $__internal_ea6fa99aa98b165fa6084e4300bea7403ac4b07f3d27952cc9780ff2070bac5b->leave($__internal_ea6fa99aa98b165fa6084e4300bea7403ac4b07f3d27952cc9780ff2070bac5b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\Blog\\aglimpseofhappiness\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
