<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_052d05b5e96323836a7a4ffc5530024c9f09d2531627b2ebef878937ccc63bc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"span3\">
        <div>
            <h4>
                ";
        // line 18
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "list"), "method")) {
            // line 19
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 21
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
            echo "
                ";
        }
        // line 23
        echo "
                ";
        // line 24
        if (((isset($context["pager"]) ? $context["pager"] : null) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbResults", array(), "method") > 0))) {
            // line 25
            echo "                    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </h4>
        </div>

        <ul>
            ";
        // line 31
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getResults", array(), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 33
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "edit"), "method")) {
                    // line 34
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["result"]) ? $context["result"] : null)), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "toString", array(0 => (isset($context["result"]) ? $context["result"] : null)), "method"), "html", null, true);
                    echo "</a></li>
                    ";
                } else {
                    // line 36
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "toString", array(0 => (isset($context["result"]) ? $context["result"] : null)), "method"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 38
                echo "                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 39
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "create"), "method")) {
                    // line 40
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ~ <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a></i></li>
                    ";
                } else {
                    // line 42
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            ";
        } else {
            // line 46
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "create"), "method")) {
                // line 47
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo " ~ <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a></i></li>
                ";
            } else {
                // line 49
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo "</i></li>
                ";
            }
            // line 51
            echo "            ";
        }
        // line 52
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 52,  110 => 42,  65 => 26,  139 => 57,  118 => 46,  20 => 1,  170 => 55,  165 => 52,  150 => 48,  146 => 47,  97 => 39,  84 => 29,  58 => 23,  34 => 18,  81 => 18,  53 => 24,  275 => 106,  271 => 105,  266 => 103,  249 => 95,  237 => 89,  232 => 87,  225 => 83,  216 => 80,  205 => 75,  200 => 73,  184 => 66,  157 => 64,  152 => 52,  129 => 41,  120 => 47,  113 => 34,  145 => 59,  126 => 55,  76 => 28,  70 => 17,  100 => 40,  96 => 21,  181 => 57,  178 => 56,  174 => 14,  161 => 55,  153 => 62,  104 => 31,  90 => 47,  83 => 19,  37 => 5,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 111,  278 => 86,  268 => 85,  264 => 84,  258 => 98,  252 => 80,  247 => 78,  241 => 90,  229 => 73,  220 => 70,  214 => 69,  177 => 62,  169 => 69,  140 => 55,  132 => 51,  128 => 47,  111 => 43,  107 => 36,  61 => 27,  273 => 96,  269 => 94,  254 => 97,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 82,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 51,  143 => 56,  135 => 55,  131 => 43,  119 => 40,  108 => 42,  102 => 42,  71 => 29,  67 => 31,  63 => 11,  59 => 10,  47 => 21,  38 => 19,  201 => 92,  196 => 90,  183 => 82,  171 => 13,  166 => 71,  163 => 68,  158 => 67,  156 => 6,  151 => 61,  142 => 58,  138 => 49,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 40,  91 => 38,  69 => 32,  62 => 25,  49 => 9,  35 => 4,  101 => 40,  94 => 39,  89 => 37,  85 => 19,  79 => 35,  75 => 33,  68 => 31,  56 => 9,  50 => 23,  87 => 46,  72 => 16,  66 => 30,  55 => 25,  25 => 5,  21 => 2,  43 => 21,  41 => 20,  28 => 14,  24 => 13,  31 => 8,  29 => 15,  26 => 14,  19 => 11,  98 => 39,  93 => 28,  88 => 37,  78 => 34,  46 => 19,  44 => 21,  40 => 5,  32 => 4,  27 => 14,  22 => 12,  209 => 76,  203 => 78,  199 => 67,  193 => 69,  189 => 68,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 59,  164 => 11,  162 => 59,  154 => 58,  149 => 62,  147 => 52,  144 => 51,  141 => 47,  133 => 65,  130 => 57,  125 => 46,  122 => 45,  116 => 44,  112 => 47,  109 => 37,  106 => 44,  103 => 41,  99 => 50,  95 => 28,  92 => 38,  86 => 36,  82 => 33,  80 => 14,  73 => 27,  64 => 25,  60 => 24,  57 => 23,  54 => 26,  51 => 21,  48 => 8,  45 => 18,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 2,);
    }
}
