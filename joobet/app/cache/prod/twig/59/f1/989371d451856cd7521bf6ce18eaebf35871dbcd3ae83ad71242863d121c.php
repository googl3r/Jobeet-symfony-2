<?php

/* EnsJoobetBundle:Job:show.html.twig */
class __TwigTemplate_59f1989371d451856cd7521bf6ce18eaebf35871dbcd3ae83ad71242863d121c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJoobetBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "        Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo " category
    ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjoobet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "        <div class=\"category\">
            <div class=\"feed\">
                <a href=\"\">Feed</a>
            </div>
            <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo "</h1>
        </div>
        ";
        // line 16
        $this->env->loadTemplate("EnsJoobetBundle:Job:list.html.twig")->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs"))));
        // line 17
        echo "        ";
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 18
            echo "            <div class=\"pagination\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJoobetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => 1)), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjoobet/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
                </a>
                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJoobetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : null))), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjoobet/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
                </a>
                ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 26
                echo "                    ";
                if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["current_page"]) ? $context["current_page"] : null))) {
                    // line 27
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 29
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJoobetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["page"]) ? $context["page"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJoobetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["next_page"]) ? $context["next_page"] : null))), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjoobet/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
                </a>
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJoobetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["last_page"]) ? $context["last_page"] : null))), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjoobet/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
                </a>
            </div>
        ";
        }
        // line 40
        echo "        <div class=\"pagination_desc\">
            <strong>";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["total_jobs"]) ? $context["total_jobs"] : null), "html", null, true);
        echo "</strong> jobs in this category
            ";
        // line 42
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 43
            echo "                - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : null), "html", null, true);
            echo "</strong>
            ";
        }
        // line 45
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "EnsJoobetBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 41,  126 => 33,  76 => 19,  70 => 17,  100 => 22,  96 => 21,  181 => 57,  178 => 56,  174 => 14,  161 => 10,  153 => 5,  104 => 51,  90 => 47,  83 => 45,  37 => 13,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 63,  111 => 37,  107 => 29,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 45,  143 => 56,  135 => 36,  131 => 35,  119 => 56,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 14,  59 => 14,  47 => 9,  38 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 13,  166 => 71,  163 => 62,  158 => 67,  156 => 6,  151 => 43,  142 => 40,  138 => 54,  136 => 56,  123 => 28,  121 => 32,  117 => 44,  115 => 31,  105 => 40,  91 => 19,  69 => 17,  62 => 23,  49 => 19,  35 => 10,  101 => 27,  94 => 25,  89 => 23,  85 => 22,  79 => 18,  75 => 17,  68 => 16,  56 => 9,  50 => 21,  87 => 46,  72 => 16,  66 => 24,  55 => 15,  25 => 5,  21 => 2,  43 => 6,  41 => 7,  28 => 3,  24 => 4,  31 => 8,  29 => 5,  26 => 6,  19 => 1,  98 => 26,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  40 => 5,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 11,  162 => 59,  154 => 58,  149 => 42,  147 => 58,  144 => 49,  141 => 48,  133 => 65,  130 => 41,  125 => 44,  122 => 43,  116 => 55,  112 => 42,  109 => 34,  106 => 25,  103 => 32,  99 => 50,  95 => 28,  92 => 21,  86 => 18,  82 => 22,  80 => 20,  73 => 18,  64 => 17,  60 => 13,  57 => 10,  54 => 9,  51 => 14,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
