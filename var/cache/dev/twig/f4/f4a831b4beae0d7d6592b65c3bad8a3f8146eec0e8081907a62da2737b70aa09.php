<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_87223e9c8bd82fc991314747128e953c67de005606ba2a655e90be3eec3f770d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f98624995996cb4a28e6e73181b67f6e1a9cbac8503d66958fedfbe7ff0112f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f98624995996cb4a28e6e73181b67f6e1a9cbac8503d66958fedfbe7ff0112f->enter($__internal_5f98624995996cb4a28e6e73181b67f6e1a9cbac8503d66958fedfbe7ff0112f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_9e72de45d6a75370c860a373a65f3ce1ed7b84516db858411e7cf9d30ed9a4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e72de45d6a75370c860a373a65f3ce1ed7b84516db858411e7cf9d30ed9a4ab->enter($__internal_9e72de45d6a75370c860a373a65f3ce1ed7b84516db858411e7cf9d30ed9a4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_5f98624995996cb4a28e6e73181b67f6e1a9cbac8503d66958fedfbe7ff0112f->leave($__internal_5f98624995996cb4a28e6e73181b67f6e1a9cbac8503d66958fedfbe7ff0112f_prof);

        
        $__internal_9e72de45d6a75370c860a373a65f3ce1ed7b84516db858411e7cf9d30ed9a4ab->leave($__internal_9e72de45d6a75370c860a373a65f3ce1ed7b84516db858411e7cf9d30ed9a4ab_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_292f6ab7d355d8647bad84aab10a1e43f5afa7bad378eb9fe02056dda18faf9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292f6ab7d355d8647bad84aab10a1e43f5afa7bad378eb9fe02056dda18faf9e->enter($__internal_292f6ab7d355d8647bad84aab10a1e43f5afa7bad378eb9fe02056dda18faf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_42dabf719cd46ecca423704248d107a13a5f35174cf5ec981c2710753bb26d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42dabf719cd46ecca423704248d107a13a5f35174cf5ec981c2710753bb26d35->enter($__internal_42dabf719cd46ecca423704248d107a13a5f35174cf5ec981c2710753bb26d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_42dabf719cd46ecca423704248d107a13a5f35174cf5ec981c2710753bb26d35->leave($__internal_42dabf719cd46ecca423704248d107a13a5f35174cf5ec981c2710753bb26d35_prof);

        
        $__internal_292f6ab7d355d8647bad84aab10a1e43f5afa7bad378eb9fe02056dda18faf9e->leave($__internal_292f6ab7d355d8647bad84aab10a1e43f5afa7bad378eb9fe02056dda18faf9e_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ff6ff97fd7b72f074b4ea6445d93f0087bff0fa5eb9413b88ef1f021a50a9ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6ff97fd7b72f074b4ea6445d93f0087bff0fa5eb9413b88ef1f021a50a9ce7->enter($__internal_ff6ff97fd7b72f074b4ea6445d93f0087bff0fa5eb9413b88ef1f021a50a9ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_60a1a885d54f1a00e86ab1d8661a898109a5e8cf5406b3c7d0da6e63fc53b13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a1a885d54f1a00e86ab1d8661a898109a5e8cf5406b3c7d0da6e63fc53b13e->enter($__internal_60a1a885d54f1a00e86ab1d8661a898109a5e8cf5406b3c7d0da6e63fc53b13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_60a1a885d54f1a00e86ab1d8661a898109a5e8cf5406b3c7d0da6e63fc53b13e->leave($__internal_60a1a885d54f1a00e86ab1d8661a898109a5e8cf5406b3c7d0da6e63fc53b13e_prof);

        
        $__internal_ff6ff97fd7b72f074b4ea6445d93f0087bff0fa5eb9413b88ef1f021a50a9ce7->leave($__internal_ff6ff97fd7b72f074b4ea6445d93f0087bff0fa5eb9413b88ef1f021a50a9ce7_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5523cc3547a0066a2a2eec1aa9f4b6cc93921eb21f963c3a864188bdcaa40e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5523cc3547a0066a2a2eec1aa9f4b6cc93921eb21f963c3a864188bdcaa40e49->enter($__internal_5523cc3547a0066a2a2eec1aa9f4b6cc93921eb21f963c3a864188bdcaa40e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_dbd44057d744670dacbbd2889e1359e24ef8f92efe6419c300577a4c337fe1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd44057d744670dacbbd2889e1359e24ef8f92efe6419c300577a4c337fe1f1->enter($__internal_dbd44057d744670dacbbd2889e1359e24ef8f92efe6419c300577a4c337fe1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_dbd44057d744670dacbbd2889e1359e24ef8f92efe6419c300577a4c337fe1f1->leave($__internal_dbd44057d744670dacbbd2889e1359e24ef8f92efe6419c300577a4c337fe1f1_prof);

        
        $__internal_5523cc3547a0066a2a2eec1aa9f4b6cc93921eb21f963c3a864188bdcaa40e49->leave($__internal_5523cc3547a0066a2a2eec1aa9f4b6cc93921eb21f963c3a864188bdcaa40e49_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9133747ac8e3ae21fb7e1a414bb9bb94120c9b1acd3bb95dde58015ec03544ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9133747ac8e3ae21fb7e1a414bb9bb94120c9b1acd3bb95dde58015ec03544ef->enter($__internal_9133747ac8e3ae21fb7e1a414bb9bb94120c9b1acd3bb95dde58015ec03544ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3a4443eba69686d8528d23846b54ff9d3d81121ad87fbdf43b7820e68c82fbd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4443eba69686d8528d23846b54ff9d3d81121ad87fbdf43b7820e68c82fbd0->enter($__internal_3a4443eba69686d8528d23846b54ff9d3d81121ad87fbdf43b7820e68c82fbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_20d83f3ff6dde5d056db27a2e087f4e4d0f4998e6500566a3c442e471715d36b = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_eec0c1bbcf9df79bae41fc7ec395da12c7f2bbfafc4ebce9dca092f37de61234 = "{{") && ('' === $__internal_eec0c1bbcf9df79bae41fc7ec395da12c7f2bbfafc4ebce9dca092f37de61234 || 0 === strpos($__internal_20d83f3ff6dde5d056db27a2e087f4e4d0f4998e6500566a3c442e471715d36b, $__internal_eec0c1bbcf9df79bae41fc7ec395da12c7f2bbfafc4ebce9dca092f37de61234)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_3a4443eba69686d8528d23846b54ff9d3d81121ad87fbdf43b7820e68c82fbd0->leave($__internal_3a4443eba69686d8528d23846b54ff9d3d81121ad87fbdf43b7820e68c82fbd0_prof);

        
        $__internal_9133747ac8e3ae21fb7e1a414bb9bb94120c9b1acd3bb95dde58015ec03544ef->leave($__internal_9133747ac8e3ae21fb7e1a414bb9bb94120c9b1acd3bb95dde58015ec03544ef_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_93234fd0c093188e1bf95381db84936d7fd65d3ca4763543e5d928922dca487c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93234fd0c093188e1bf95381db84936d7fd65d3ca4763543e5d928922dca487c->enter($__internal_93234fd0c093188e1bf95381db84936d7fd65d3ca4763543e5d928922dca487c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a154cfc8b4d676ccf9d9110c12a5371c10b6e74b46c98860557f5dd5b4507960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a154cfc8b4d676ccf9d9110c12a5371c10b6e74b46c98860557f5dd5b4507960->enter($__internal_a154cfc8b4d676ccf9d9110c12a5371c10b6e74b46c98860557f5dd5b4507960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_a154cfc8b4d676ccf9d9110c12a5371c10b6e74b46c98860557f5dd5b4507960->leave($__internal_a154cfc8b4d676ccf9d9110c12a5371c10b6e74b46c98860557f5dd5b4507960_prof);

        
        $__internal_93234fd0c093188e1bf95381db84936d7fd65d3ca4763543e5d928922dca487c->leave($__internal_93234fd0c093188e1bf95381db84936d7fd65d3ca4763543e5d928922dca487c_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_00aad8331fe4ec8c2ada89e2e552067ca24c3e38132e52a86b529a43732f6366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00aad8331fe4ec8c2ada89e2e552067ca24c3e38132e52a86b529a43732f6366->enter($__internal_00aad8331fe4ec8c2ada89e2e552067ca24c3e38132e52a86b529a43732f6366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_60677ba9a0e5289675a7e0f41c096ce873dc2f72379c3bc6c50c541b1aec5c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60677ba9a0e5289675a7e0f41c096ce873dc2f72379c3bc6c50c541b1aec5c0e->enter($__internal_60677ba9a0e5289675a7e0f41c096ce873dc2f72379c3bc6c50c541b1aec5c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_60677ba9a0e5289675a7e0f41c096ce873dc2f72379c3bc6c50c541b1aec5c0e->leave($__internal_60677ba9a0e5289675a7e0f41c096ce873dc2f72379c3bc6c50c541b1aec5c0e_prof);

        
        $__internal_00aad8331fe4ec8c2ada89e2e552067ca24c3e38132e52a86b529a43732f6366->leave($__internal_00aad8331fe4ec8c2ada89e2e552067ca24c3e38132e52a86b529a43732f6366_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8a4ba19c5c376b3ec7c67a8bfb534a300f247a6cf13c58327d64aecd3ff0f8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4ba19c5c376b3ec7c67a8bfb534a300f247a6cf13c58327d64aecd3ff0f8d3->enter($__internal_8a4ba19c5c376b3ec7c67a8bfb534a300f247a6cf13c58327d64aecd3ff0f8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_71998b3df783a2036e42dc3ec6cd7f90777a8cbeef1c752a118df5e47efcc6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71998b3df783a2036e42dc3ec6cd7f90777a8cbeef1c752a118df5e47efcc6a1->enter($__internal_71998b3df783a2036e42dc3ec6cd7f90777a8cbeef1c752a118df5e47efcc6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_71998b3df783a2036e42dc3ec6cd7f90777a8cbeef1c752a118df5e47efcc6a1->leave($__internal_71998b3df783a2036e42dc3ec6cd7f90777a8cbeef1c752a118df5e47efcc6a1_prof);

        
        $__internal_8a4ba19c5c376b3ec7c67a8bfb534a300f247a6cf13c58327d64aecd3ff0f8d3->leave($__internal_8a4ba19c5c376b3ec7c67a8bfb534a300f247a6cf13c58327d64aecd3ff0f8d3_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b299f287148813eab3a4e7fafdd194e9a8d10bb30e76beb2dc335fd617a0cf59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b299f287148813eab3a4e7fafdd194e9a8d10bb30e76beb2dc335fd617a0cf59->enter($__internal_b299f287148813eab3a4e7fafdd194e9a8d10bb30e76beb2dc335fd617a0cf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_9b4d14a3a5956a080cd79112947d775c046265d7337df4afb0258e5e4197c059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4d14a3a5956a080cd79112947d775c046265d7337df4afb0258e5e4197c059->enter($__internal_9b4d14a3a5956a080cd79112947d775c046265d7337df4afb0258e5e4197c059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_9b4d14a3a5956a080cd79112947d775c046265d7337df4afb0258e5e4197c059->leave($__internal_9b4d14a3a5956a080cd79112947d775c046265d7337df4afb0258e5e4197c059_prof);

        
        $__internal_b299f287148813eab3a4e7fafdd194e9a8d10bb30e76beb2dc335fd617a0cf59->leave($__internal_b299f287148813eab3a4e7fafdd194e9a8d10bb30e76beb2dc335fd617a0cf59_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_0dd14ab732f019bc6abc83300a6ece7ac5a1310dd808c58a9a1adb75c77777d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd14ab732f019bc6abc83300a6ece7ac5a1310dd808c58a9a1adb75c77777d5->enter($__internal_0dd14ab732f019bc6abc83300a6ece7ac5a1310dd808c58a9a1adb75c77777d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_67a92b978e5dc86f6658afaa6b4ea7ced9c1a7223fea86da84e27490d747eb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a92b978e5dc86f6658afaa6b4ea7ced9c1a7223fea86da84e27490d747eb11->enter($__internal_67a92b978e5dc86f6658afaa6b4ea7ced9c1a7223fea86da84e27490d747eb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_67a92b978e5dc86f6658afaa6b4ea7ced9c1a7223fea86da84e27490d747eb11->leave($__internal_67a92b978e5dc86f6658afaa6b4ea7ced9c1a7223fea86da84e27490d747eb11_prof);

        
        $__internal_0dd14ab732f019bc6abc83300a6ece7ac5a1310dd808c58a9a1adb75c77777d5->leave($__internal_0dd14ab732f019bc6abc83300a6ece7ac5a1310dd808c58a9a1adb75c77777d5_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_fc7765503773019ec47533cbf34c59cd94868a7a6c449cdce3a9d247db60c766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7765503773019ec47533cbf34c59cd94868a7a6c449cdce3a9d247db60c766->enter($__internal_fc7765503773019ec47533cbf34c59cd94868a7a6c449cdce3a9d247db60c766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_909218027d8e903b2741f5fe6684047ef01728454be35bd7468f3910f83df5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909218027d8e903b2741f5fe6684047ef01728454be35bd7468f3910f83df5c8->enter($__internal_909218027d8e903b2741f5fe6684047ef01728454be35bd7468f3910f83df5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_909218027d8e903b2741f5fe6684047ef01728454be35bd7468f3910f83df5c8->leave($__internal_909218027d8e903b2741f5fe6684047ef01728454be35bd7468f3910f83df5c8_prof);

        
        $__internal_fc7765503773019ec47533cbf34c59cd94868a7a6c449cdce3a9d247db60c766->leave($__internal_fc7765503773019ec47533cbf34c59cd94868a7a6c449cdce3a9d247db60c766_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c16aa128e861117a66fa2549d183cf875ec95af226da25578b1c1bcb90e8754d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16aa128e861117a66fa2549d183cf875ec95af226da25578b1c1bcb90e8754d->enter($__internal_c16aa128e861117a66fa2549d183cf875ec95af226da25578b1c1bcb90e8754d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ebe5d47646892b32c0cbe96719e083ca74dc59c37fad6bf5756ab5f38c826642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe5d47646892b32c0cbe96719e083ca74dc59c37fad6bf5756ab5f38c826642->enter($__internal_ebe5d47646892b32c0cbe96719e083ca74dc59c37fad6bf5756ab5f38c826642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_ebe5d47646892b32c0cbe96719e083ca74dc59c37fad6bf5756ab5f38c826642->leave($__internal_ebe5d47646892b32c0cbe96719e083ca74dc59c37fad6bf5756ab5f38c826642_prof);

        
        $__internal_c16aa128e861117a66fa2549d183cf875ec95af226da25578b1c1bcb90e8754d->leave($__internal_c16aa128e861117a66fa2549d183cf875ec95af226da25578b1c1bcb90e8754d_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_db9cce85d4f63719f2e20a474eeeb59090272d1297ed07cf0e633ba355407f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9cce85d4f63719f2e20a474eeeb59090272d1297ed07cf0e633ba355407f1f->enter($__internal_db9cce85d4f63719f2e20a474eeeb59090272d1297ed07cf0e633ba355407f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d5105485e39fd842e6e1b763a2f494eb23706ad244dc06a8a080163cba8a88c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5105485e39fd842e6e1b763a2f494eb23706ad244dc06a8a080163cba8a88c0->enter($__internal_d5105485e39fd842e6e1b763a2f494eb23706ad244dc06a8a080163cba8a88c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_d5105485e39fd842e6e1b763a2f494eb23706ad244dc06a8a080163cba8a88c0->leave($__internal_d5105485e39fd842e6e1b763a2f494eb23706ad244dc06a8a080163cba8a88c0_prof);

        
        $__internal_db9cce85d4f63719f2e20a474eeeb59090272d1297ed07cf0e633ba355407f1f->leave($__internal_db9cce85d4f63719f2e20a474eeeb59090272d1297ed07cf0e633ba355407f1f_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e1ad601f37bb50670e48db56d6036999b8702d802b8bb7db691647b88db1774c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ad601f37bb50670e48db56d6036999b8702d802b8bb7db691647b88db1774c->enter($__internal_e1ad601f37bb50670e48db56d6036999b8702d802b8bb7db691647b88db1774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d458d2ff310818ecc53ee6581275501070282d5809632633fca670cdd5908d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d458d2ff310818ecc53ee6581275501070282d5809632633fca670cdd5908d8d->enter($__internal_d458d2ff310818ecc53ee6581275501070282d5809632633fca670cdd5908d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_d458d2ff310818ecc53ee6581275501070282d5809632633fca670cdd5908d8d->leave($__internal_d458d2ff310818ecc53ee6581275501070282d5809632633fca670cdd5908d8d_prof);

        
        $__internal_e1ad601f37bb50670e48db56d6036999b8702d802b8bb7db691647b88db1774c->leave($__internal_e1ad601f37bb50670e48db56d6036999b8702d802b8bb7db691647b88db1774c_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_21fb1bb80597cf2944f90a377c23fc0049f2e750bce0f843ebeecb9e7079cb16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21fb1bb80597cf2944f90a377c23fc0049f2e750bce0f843ebeecb9e7079cb16->enter($__internal_21fb1bb80597cf2944f90a377c23fc0049f2e750bce0f843ebeecb9e7079cb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3f2ac098fcd237fecc33d3a4bdfb2edd0df457478ab6f4912b1f1efa433bdd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2ac098fcd237fecc33d3a4bdfb2edd0df457478ab6f4912b1f1efa433bdd59->enter($__internal_3f2ac098fcd237fecc33d3a4bdfb2edd0df457478ab6f4912b1f1efa433bdd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3f2ac098fcd237fecc33d3a4bdfb2edd0df457478ab6f4912b1f1efa433bdd59->leave($__internal_3f2ac098fcd237fecc33d3a4bdfb2edd0df457478ab6f4912b1f1efa433bdd59_prof);

        
        $__internal_21fb1bb80597cf2944f90a377c23fc0049f2e750bce0f843ebeecb9e7079cb16->leave($__internal_21fb1bb80597cf2944f90a377c23fc0049f2e750bce0f843ebeecb9e7079cb16_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_9de2e9072118f498fd14ef19349e1398c66f15bd0cbf4881febdca09cdbe6503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de2e9072118f498fd14ef19349e1398c66f15bd0cbf4881febdca09cdbe6503->enter($__internal_9de2e9072118f498fd14ef19349e1398c66f15bd0cbf4881febdca09cdbe6503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_a4a874c7bf7bd0924f721a2923af557998f18fbea94870f2efebd01f6193c233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a874c7bf7bd0924f721a2923af557998f18fbea94870f2efebd01f6193c233->enter($__internal_a4a874c7bf7bd0924f721a2923af557998f18fbea94870f2efebd01f6193c233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_a4a874c7bf7bd0924f721a2923af557998f18fbea94870f2efebd01f6193c233->leave($__internal_a4a874c7bf7bd0924f721a2923af557998f18fbea94870f2efebd01f6193c233_prof);

        
        $__internal_9de2e9072118f498fd14ef19349e1398c66f15bd0cbf4881febdca09cdbe6503->leave($__internal_9de2e9072118f498fd14ef19349e1398c66f15bd0cbf4881febdca09cdbe6503_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_562c9933956583817047758b6cfbcd9d2357ab15ae63a026b719f285483a6013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562c9933956583817047758b6cfbcd9d2357ab15ae63a026b719f285483a6013->enter($__internal_562c9933956583817047758b6cfbcd9d2357ab15ae63a026b719f285483a6013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a53fa5000aaa333360682cf7b652f1b89adf8cab8f999d611d193a5c95c98dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53fa5000aaa333360682cf7b652f1b89adf8cab8f999d611d193a5c95c98dc3->enter($__internal_a53fa5000aaa333360682cf7b652f1b89adf8cab8f999d611d193a5c95c98dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a53fa5000aaa333360682cf7b652f1b89adf8cab8f999d611d193a5c95c98dc3->leave($__internal_a53fa5000aaa333360682cf7b652f1b89adf8cab8f999d611d193a5c95c98dc3_prof);

        
        $__internal_562c9933956583817047758b6cfbcd9d2357ab15ae63a026b719f285483a6013->leave($__internal_562c9933956583817047758b6cfbcd9d2357ab15ae63a026b719f285483a6013_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_f6825c4583dae294f6c94a5ae8c66eff096299d203bd2606f0239943b0942926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6825c4583dae294f6c94a5ae8c66eff096299d203bd2606f0239943b0942926->enter($__internal_f6825c4583dae294f6c94a5ae8c66eff096299d203bd2606f0239943b0942926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_3dbb4f8e56abf90b21d9a66be7ec433726bb01c91dd4cc6f4dc9c526ab61e0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbb4f8e56abf90b21d9a66be7ec433726bb01c91dd4cc6f4dc9c526ab61e0ea->enter($__internal_3dbb4f8e56abf90b21d9a66be7ec433726bb01c91dd4cc6f4dc9c526ab61e0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3dbb4f8e56abf90b21d9a66be7ec433726bb01c91dd4cc6f4dc9c526ab61e0ea->leave($__internal_3dbb4f8e56abf90b21d9a66be7ec433726bb01c91dd4cc6f4dc9c526ab61e0ea_prof);

        
        $__internal_f6825c4583dae294f6c94a5ae8c66eff096299d203bd2606f0239943b0942926->leave($__internal_f6825c4583dae294f6c94a5ae8c66eff096299d203bd2606f0239943b0942926_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_21bdef029a55e30ed9100684c73e89186ab348f1868b3328f8216be2bda1d491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bdef029a55e30ed9100684c73e89186ab348f1868b3328f8216be2bda1d491->enter($__internal_21bdef029a55e30ed9100684c73e89186ab348f1868b3328f8216be2bda1d491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d0899f7c7c1dfb2acf09741af7abcce9e5aae68bb39d7ec2b7843da06edf2861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0899f7c7c1dfb2acf09741af7abcce9e5aae68bb39d7ec2b7843da06edf2861->enter($__internal_d0899f7c7c1dfb2acf09741af7abcce9e5aae68bb39d7ec2b7843da06edf2861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_d0899f7c7c1dfb2acf09741af7abcce9e5aae68bb39d7ec2b7843da06edf2861->leave($__internal_d0899f7c7c1dfb2acf09741af7abcce9e5aae68bb39d7ec2b7843da06edf2861_prof);

        
        $__internal_21bdef029a55e30ed9100684c73e89186ab348f1868b3328f8216be2bda1d491->leave($__internal_21bdef029a55e30ed9100684c73e89186ab348f1868b3328f8216be2bda1d491_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_eb9944193c396081be093cf8771f087d49f03e754f513c0bf93e5a9a8d377e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9944193c396081be093cf8771f087d49f03e754f513c0bf93e5a9a8d377e95->enter($__internal_eb9944193c396081be093cf8771f087d49f03e754f513c0bf93e5a9a8d377e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b05c2d74be8c47a77c466e476d4a459e993f83749387f777f84623fa4f1fad11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05c2d74be8c47a77c466e476d4a459e993f83749387f777f84623fa4f1fad11->enter($__internal_b05c2d74be8c47a77c466e476d4a459e993f83749387f777f84623fa4f1fad11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_b05c2d74be8c47a77c466e476d4a459e993f83749387f777f84623fa4f1fad11->leave($__internal_b05c2d74be8c47a77c466e476d4a459e993f83749387f777f84623fa4f1fad11_prof);

        
        $__internal_eb9944193c396081be093cf8771f087d49f03e754f513c0bf93e5a9a8d377e95->leave($__internal_eb9944193c396081be093cf8771f087d49f03e754f513c0bf93e5a9a8d377e95_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2d73979f12ff5a216a5dc72f3bb2dc02459dfd5551d34cb0287a5ce99998f179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d73979f12ff5a216a5dc72f3bb2dc02459dfd5551d34cb0287a5ce99998f179->enter($__internal_2d73979f12ff5a216a5dc72f3bb2dc02459dfd5551d34cb0287a5ce99998f179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_362b00736c9a55ce3eab49fbf3bd2d6c6f020d99da1431fd0616343edb175b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362b00736c9a55ce3eab49fbf3bd2d6c6f020d99da1431fd0616343edb175b1c->enter($__internal_362b00736c9a55ce3eab49fbf3bd2d6c6f020d99da1431fd0616343edb175b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_362b00736c9a55ce3eab49fbf3bd2d6c6f020d99da1431fd0616343edb175b1c->leave($__internal_362b00736c9a55ce3eab49fbf3bd2d6c6f020d99da1431fd0616343edb175b1c_prof);

        
        $__internal_2d73979f12ff5a216a5dc72f3bb2dc02459dfd5551d34cb0287a5ce99998f179->leave($__internal_2d73979f12ff5a216a5dc72f3bb2dc02459dfd5551d34cb0287a5ce99998f179_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_77c1949829fce2713b7f0d9a507ad910e655c2c0a7d9268fa50b75e7498eca98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c1949829fce2713b7f0d9a507ad910e655c2c0a7d9268fa50b75e7498eca98->enter($__internal_77c1949829fce2713b7f0d9a507ad910e655c2c0a7d9268fa50b75e7498eca98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_578a1f0d075fa63c41b5e4e97c3050ae0a9e73c6db82df0ed8a5d78e2b098dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578a1f0d075fa63c41b5e4e97c3050ae0a9e73c6db82df0ed8a5d78e2b098dbf->enter($__internal_578a1f0d075fa63c41b5e4e97c3050ae0a9e73c6db82df0ed8a5d78e2b098dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_578a1f0d075fa63c41b5e4e97c3050ae0a9e73c6db82df0ed8a5d78e2b098dbf->leave($__internal_578a1f0d075fa63c41b5e4e97c3050ae0a9e73c6db82df0ed8a5d78e2b098dbf_prof);

        
        $__internal_77c1949829fce2713b7f0d9a507ad910e655c2c0a7d9268fa50b75e7498eca98->leave($__internal_77c1949829fce2713b7f0d9a507ad910e655c2c0a7d9268fa50b75e7498eca98_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e0ec298afc0e150b5471ba543516dbb756ac36d5628daadca4a078aecc64a084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ec298afc0e150b5471ba543516dbb756ac36d5628daadca4a078aecc64a084->enter($__internal_e0ec298afc0e150b5471ba543516dbb756ac36d5628daadca4a078aecc64a084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_7e4b67a1eb19ea5605f6a06aade3fa92811818e5cc8513200f3c03448cfffb66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4b67a1eb19ea5605f6a06aade3fa92811818e5cc8513200f3c03448cfffb66->enter($__internal_7e4b67a1eb19ea5605f6a06aade3fa92811818e5cc8513200f3c03448cfffb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7e4b67a1eb19ea5605f6a06aade3fa92811818e5cc8513200f3c03448cfffb66->leave($__internal_7e4b67a1eb19ea5605f6a06aade3fa92811818e5cc8513200f3c03448cfffb66_prof);

        
        $__internal_e0ec298afc0e150b5471ba543516dbb756ac36d5628daadca4a078aecc64a084->leave($__internal_e0ec298afc0e150b5471ba543516dbb756ac36d5628daadca4a078aecc64a084_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_bbac67ac46aaa14cfd8a91121fc8ae7c6a6e550553d8eaf1c6f728e85a021649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbac67ac46aaa14cfd8a91121fc8ae7c6a6e550553d8eaf1c6f728e85a021649->enter($__internal_bbac67ac46aaa14cfd8a91121fc8ae7c6a6e550553d8eaf1c6f728e85a021649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_87dc4d41aabc80b4a5477f3364cd440a852d3a079735bd4e4c624e8506629cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dc4d41aabc80b4a5477f3364cd440a852d3a079735bd4e4c624e8506629cdf->enter($__internal_87dc4d41aabc80b4a5477f3364cd440a852d3a079735bd4e4c624e8506629cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_87dc4d41aabc80b4a5477f3364cd440a852d3a079735bd4e4c624e8506629cdf->leave($__internal_87dc4d41aabc80b4a5477f3364cd440a852d3a079735bd4e4c624e8506629cdf_prof);

        
        $__internal_bbac67ac46aaa14cfd8a91121fc8ae7c6a6e550553d8eaf1c6f728e85a021649->leave($__internal_bbac67ac46aaa14cfd8a91121fc8ae7c6a6e550553d8eaf1c6f728e85a021649_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_33b2a482679d7e2835143c4c2da730fd2d07c464adeffc90b35d711bdee25819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b2a482679d7e2835143c4c2da730fd2d07c464adeffc90b35d711bdee25819->enter($__internal_33b2a482679d7e2835143c4c2da730fd2d07c464adeffc90b35d711bdee25819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1bec21557d3b3e119bf8cdc6dd80d37ebf3666977be576d7a457b52bb8ba4132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bec21557d3b3e119bf8cdc6dd80d37ebf3666977be576d7a457b52bb8ba4132->enter($__internal_1bec21557d3b3e119bf8cdc6dd80d37ebf3666977be576d7a457b52bb8ba4132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1bec21557d3b3e119bf8cdc6dd80d37ebf3666977be576d7a457b52bb8ba4132->leave($__internal_1bec21557d3b3e119bf8cdc6dd80d37ebf3666977be576d7a457b52bb8ba4132_prof);

        
        $__internal_33b2a482679d7e2835143c4c2da730fd2d07c464adeffc90b35d711bdee25819->leave($__internal_33b2a482679d7e2835143c4c2da730fd2d07c464adeffc90b35d711bdee25819_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_90c54c37eafe375722a9b2e29170dca4dda4bf00f99a590e2b373d2356538d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c54c37eafe375722a9b2e29170dca4dda4bf00f99a590e2b373d2356538d0f->enter($__internal_90c54c37eafe375722a9b2e29170dca4dda4bf00f99a590e2b373d2356538d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_fc25dd3cac729079131320311364e78456e2bc1655559c257d4f11895ed11a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc25dd3cac729079131320311364e78456e2bc1655559c257d4f11895ed11a4d->enter($__internal_fc25dd3cac729079131320311364e78456e2bc1655559c257d4f11895ed11a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_fc25dd3cac729079131320311364e78456e2bc1655559c257d4f11895ed11a4d->leave($__internal_fc25dd3cac729079131320311364e78456e2bc1655559c257d4f11895ed11a4d_prof);

        
        $__internal_90c54c37eafe375722a9b2e29170dca4dda4bf00f99a590e2b373d2356538d0f->leave($__internal_90c54c37eafe375722a9b2e29170dca4dda4bf00f99a590e2b373d2356538d0f_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5bd18b958466a1e35bfbc8b1697963560f393b6f0b5e25f64698fc9f8bc3bf3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd18b958466a1e35bfbc8b1697963560f393b6f0b5e25f64698fc9f8bc3bf3f->enter($__internal_5bd18b958466a1e35bfbc8b1697963560f393b6f0b5e25f64698fc9f8bc3bf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_89ac5e88ec6e7d19abfc77dea59734825ef5b06b0cc44e674036e149b1aa8fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ac5e88ec6e7d19abfc77dea59734825ef5b06b0cc44e674036e149b1aa8fe3->enter($__internal_89ac5e88ec6e7d19abfc77dea59734825ef5b06b0cc44e674036e149b1aa8fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_89ac5e88ec6e7d19abfc77dea59734825ef5b06b0cc44e674036e149b1aa8fe3->leave($__internal_89ac5e88ec6e7d19abfc77dea59734825ef5b06b0cc44e674036e149b1aa8fe3_prof);

        
        $__internal_5bd18b958466a1e35bfbc8b1697963560f393b6f0b5e25f64698fc9f8bc3bf3f->leave($__internal_5bd18b958466a1e35bfbc8b1697963560f393b6f0b5e25f64698fc9f8bc3bf3f_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d92b77679c381d0a890c3cac1cdb955e279608b35abe70e84cd8a3d69b916d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92b77679c381d0a890c3cac1cdb955e279608b35abe70e84cd8a3d69b916d7b->enter($__internal_d92b77679c381d0a890c3cac1cdb955e279608b35abe70e84cd8a3d69b916d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4a63bd3b7ffe55e2ac022b3ff443457d7c3d748436d4ec58cf8913215b92400c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a63bd3b7ffe55e2ac022b3ff443457d7c3d748436d4ec58cf8913215b92400c->enter($__internal_4a63bd3b7ffe55e2ac022b3ff443457d7c3d748436d4ec58cf8913215b92400c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_4a63bd3b7ffe55e2ac022b3ff443457d7c3d748436d4ec58cf8913215b92400c->leave($__internal_4a63bd3b7ffe55e2ac022b3ff443457d7c3d748436d4ec58cf8913215b92400c_prof);

        
        $__internal_d92b77679c381d0a890c3cac1cdb955e279608b35abe70e84cd8a3d69b916d7b->leave($__internal_d92b77679c381d0a890c3cac1cdb955e279608b35abe70e84cd8a3d69b916d7b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "D:\\Blog\\aglimpseofhappiness\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
