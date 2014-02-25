<?php

/* EnsJoobetBundle:Job:new.html.twig */
class __TwigTemplate_88a47af5855c86166c9e1a2dd3ebfd052505e07f0d58b34cf042d9b83ba2cb2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJoobetBundle::layout.html.twig");

        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_field_errors($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        ob_start();
        // line 6
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 7
            echo "                <ul class=\"error_list\">
                    ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "                        <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators"), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "                </ul>
            ";
        }
        // line 13
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 14
        echo "    ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "        <h1>Job creation</h1>
        <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ens_job_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
            <table id=\"job_form\">
                <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <input type=\"submit\" value=\"Preview your job\" />
                    </td>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <th>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category"), 'errors');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type"), 'errors');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company"), 'errors');
        echo "
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'errors');
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url"), 'errors');
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "position"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "position"), 'errors');
        echo "
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "position"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location"), 'errors');
        echo "
                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'errors');
        echo "
                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "how_to_apply"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "how_to_apply"), 'errors');
        echo "
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "how_to_apply"), 'widget');
        echo "
                    </td>
                </tr>

                <tr>
                    <th>";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "is_public"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "is_public"), 'errors');
        echo "
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "is_public"), 'widget');
        echo "
                        <br /> Whether the job can also be published on affiliate websites or not.
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors');
        echo "
                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget');
        echo "
                    </td>
                </tr>
                </tbody>
            </table>
            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </form>
    ";
    }

    public function getTemplateName()
    {
        return "EnsJoobetBundle:Job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 107,  271 => 106,  266 => 104,  249 => 96,  237 => 90,  232 => 88,  225 => 84,  216 => 81,  205 => 76,  200 => 74,  184 => 67,  157 => 55,  152 => 53,  129 => 42,  120 => 39,  113 => 35,  145 => 49,  126 => 33,  76 => 17,  70 => 17,  100 => 22,  96 => 21,  181 => 57,  178 => 56,  174 => 14,  161 => 56,  153 => 5,  104 => 32,  90 => 47,  83 => 45,  37 => 13,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 112,  278 => 86,  268 => 85,  264 => 84,  258 => 99,  252 => 80,  247 => 78,  241 => 91,  229 => 73,  220 => 70,  214 => 69,  177 => 63,  169 => 60,  140 => 55,  132 => 51,  128 => 63,  111 => 37,  107 => 29,  61 => 13,  273 => 96,  269 => 94,  254 => 98,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 83,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 45,  143 => 56,  135 => 36,  131 => 35,  119 => 56,  108 => 36,  102 => 32,  71 => 16,  67 => 15,  63 => 14,  59 => 14,  47 => 9,  38 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 13,  166 => 71,  163 => 62,  158 => 67,  156 => 6,  151 => 43,  142 => 40,  138 => 54,  136 => 46,  123 => 28,  121 => 32,  117 => 44,  115 => 31,  105 => 40,  91 => 19,  69 => 17,  62 => 23,  49 => 19,  35 => 5,  101 => 27,  94 => 25,  89 => 23,  85 => 20,  79 => 18,  75 => 17,  68 => 15,  56 => 9,  50 => 21,  87 => 46,  72 => 16,  66 => 24,  55 => 15,  25 => 5,  21 => 2,  43 => 6,  41 => 7,  28 => 3,  24 => 4,  31 => 8,  29 => 5,  26 => 6,  19 => 1,  98 => 26,  93 => 28,  88 => 21,  78 => 21,  46 => 7,  44 => 8,  40 => 5,  32 => 4,  27 => 3,  22 => 2,  209 => 77,  203 => 78,  199 => 67,  193 => 70,  189 => 69,  187 => 84,  182 => 66,  176 => 64,  173 => 62,  168 => 60,  164 => 11,  162 => 59,  154 => 58,  149 => 42,  147 => 58,  144 => 49,  141 => 48,  133 => 65,  130 => 41,  125 => 41,  122 => 43,  116 => 55,  112 => 42,  109 => 34,  106 => 25,  103 => 32,  99 => 50,  95 => 28,  92 => 21,  86 => 18,  82 => 19,  80 => 20,  73 => 18,  64 => 14,  60 => 13,  57 => 11,  54 => 9,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
