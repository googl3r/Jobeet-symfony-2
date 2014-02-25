<?php

/* EnsJoobetBundle:Job:index.html.twig */
class __TwigTemplate_13262358f2d6900168d4a76eafe83d10ea4d42ab0fa8111ab26790a937bd6011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJoobetBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJoobetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjoobet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "        <div id=\"jobs\">
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "                <div>
                    <div class=\"category\">
                        <div class=\"feed\">
                            <a href=\"\">Feed</a>
                        </div>
                        <h1><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJoobetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "
                        </a></h1>
                    </div>
                    ";
            // line 18
            $this->env->loadTemplate("EnsJoobetBundle:Job:list.html.twig")->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs"))));
            // line 19
            echo "                    ";
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "morejobs")) {
                // line 20
                echo "                        <div class=\"more_jobs\">
                            and <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJoobetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "morejobs"), "html", null, true);
                echo "</a>
                            more...
                        </div>
                    ";
            }
            // line 25
            echo "                </div>

                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "EnsJoobetBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  53 => 7,  275 => 106,  271 => 105,  266 => 103,  249 => 95,  237 => 89,  232 => 87,  225 => 83,  216 => 80,  205 => 75,  200 => 73,  184 => 66,  152 => 52,  129 => 41,  113 => 34,  126 => 33,  76 => 16,  70 => 17,  100 => 22,  181 => 57,  178 => 56,  174 => 14,  161 => 55,  153 => 5,  104 => 31,  90 => 47,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 111,  278 => 86,  268 => 85,  264 => 84,  258 => 98,  252 => 80,  247 => 78,  241 => 90,  229 => 73,  220 => 70,  214 => 69,  177 => 62,  169 => 60,  140 => 55,  132 => 51,  128 => 63,  107 => 29,  61 => 12,  273 => 96,  269 => 94,  254 => 97,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 82,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 45,  143 => 56,  135 => 36,  119 => 56,  102 => 32,  71 => 15,  67 => 15,  63 => 11,  59 => 10,  38 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 13,  166 => 71,  163 => 62,  158 => 67,  156 => 6,  151 => 43,  142 => 40,  138 => 54,  136 => 45,  121 => 32,  117 => 44,  105 => 40,  91 => 19,  62 => 23,  49 => 9,  94 => 25,  89 => 21,  85 => 19,  75 => 17,  68 => 14,  56 => 9,  87 => 46,  25 => 5,  21 => 2,  28 => 3,  24 => 4,  31 => 8,  26 => 6,  19 => 1,  93 => 28,  88 => 20,  78 => 21,  46 => 8,  44 => 4,  27 => 2,  79 => 18,  72 => 16,  69 => 17,  47 => 9,  40 => 5,  37 => 5,  22 => 2,  246 => 90,  157 => 54,  145 => 48,  139 => 45,  131 => 35,  123 => 28,  120 => 38,  115 => 29,  111 => 37,  108 => 36,  101 => 27,  98 => 25,  96 => 21,  83 => 19,  74 => 14,  66 => 10,  55 => 15,  52 => 21,  50 => 21,  43 => 7,  41 => 6,  35 => 4,  32 => 4,  29 => 3,  209 => 76,  203 => 78,  199 => 67,  193 => 69,  189 => 68,  187 => 84,  182 => 66,  176 => 64,  173 => 61,  168 => 59,  164 => 11,  162 => 57,  154 => 58,  149 => 42,  147 => 58,  144 => 49,  141 => 47,  133 => 65,  130 => 41,  125 => 40,  122 => 43,  116 => 55,  112 => 42,  109 => 33,  106 => 25,  103 => 32,  99 => 50,  95 => 28,  92 => 21,  86 => 20,  82 => 18,  80 => 14,  73 => 15,  64 => 13,  60 => 6,  57 => 10,  54 => 9,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 3,  36 => 5,  33 => 3,  30 => 2,);
    }
}
