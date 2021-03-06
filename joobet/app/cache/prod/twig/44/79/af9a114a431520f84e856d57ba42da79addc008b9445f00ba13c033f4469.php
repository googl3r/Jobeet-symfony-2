<?php

/* EnsJoobetBundle:Job:edit.html.twig */
class __TwigTemplate_4479af9a114a431520f84e856d57ba42da79addc008b9445f00ba13c033f4469 extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : null), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field_errors($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        ob_start();
        // line 5
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 6
            echo "                <ul>
                    ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "                        <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators"), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "                </ul>
            ";
        }
        // line 12
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 13
        echo "    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "        <h1>Job edit</h1>
        <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
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
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "category"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "category"), 'errors');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "category"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "type"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "type"), 'errors');
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "type"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "company"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "company"), 'errors');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "company"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "file"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "file"), 'errors');
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "file"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "url"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "url"), 'errors');
        echo "
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "url"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "position"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "position"), 'errors');
        echo "
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "position"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "location"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "location"), 'errors');
        echo "
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "location"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "description"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "description"), 'errors');
        echo "
                        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "description"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "how_to_apply"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "how_to_apply"), 'errors');
        echo "
                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "how_to_apply"), 'widget');
        echo "
                    </td>
                </tr>

                <tr>
                    <th>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "is_public"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "is_public"), 'errors');
        echo "
                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "is_public"), 'widget');
        echo "
                        <br /> Whether the job can also be published on affiliate websites or not.
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email"), 'errors');
        echo "
                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email"), 'widget');
        echo "
                    </td>
                </tr>
                </tbody>
            </table>
            ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'rest');
        echo "
        </form>
    ";
    }

    public function getTemplateName()
    {
        return "EnsJoobetBundle:Job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 106,  271 => 105,  266 => 103,  249 => 95,  237 => 89,  232 => 87,  225 => 83,  216 => 80,  205 => 75,  200 => 73,  184 => 66,  157 => 54,  152 => 52,  129 => 41,  120 => 38,  113 => 34,  145 => 48,  126 => 33,  76 => 16,  70 => 17,  100 => 22,  96 => 21,  181 => 57,  178 => 56,  174 => 14,  161 => 55,  153 => 5,  104 => 31,  90 => 47,  83 => 45,  37 => 13,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 111,  278 => 86,  268 => 85,  264 => 84,  258 => 98,  252 => 80,  247 => 78,  241 => 90,  229 => 73,  220 => 70,  214 => 69,  177 => 62,  169 => 60,  140 => 55,  132 => 51,  128 => 63,  111 => 37,  107 => 29,  61 => 12,  273 => 96,  269 => 94,  254 => 97,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 82,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 45,  143 => 56,  135 => 36,  131 => 35,  119 => 56,  108 => 36,  102 => 32,  71 => 15,  67 => 15,  63 => 14,  59 => 14,  47 => 9,  38 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 13,  166 => 71,  163 => 62,  158 => 67,  156 => 6,  151 => 43,  142 => 40,  138 => 54,  136 => 45,  123 => 28,  121 => 32,  117 => 44,  115 => 31,  105 => 40,  91 => 19,  69 => 17,  62 => 23,  49 => 19,  35 => 4,  101 => 27,  94 => 25,  89 => 23,  85 => 19,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 21,  87 => 46,  72 => 16,  66 => 24,  55 => 15,  25 => 5,  21 => 2,  43 => 6,  41 => 6,  28 => 3,  24 => 4,  31 => 8,  29 => 5,  26 => 6,  19 => 1,  98 => 26,  93 => 28,  88 => 20,  78 => 21,  46 => 7,  44 => 7,  40 => 5,  32 => 3,  27 => 2,  22 => 2,  209 => 76,  203 => 78,  199 => 67,  193 => 69,  189 => 68,  187 => 84,  182 => 66,  176 => 64,  173 => 61,  168 => 59,  164 => 11,  162 => 59,  154 => 58,  149 => 42,  147 => 58,  144 => 49,  141 => 47,  133 => 65,  130 => 41,  125 => 40,  122 => 43,  116 => 55,  112 => 42,  109 => 33,  106 => 25,  103 => 32,  99 => 50,  95 => 28,  92 => 21,  86 => 18,  82 => 18,  80 => 20,  73 => 18,  64 => 13,  60 => 13,  57 => 10,  54 => 9,  51 => 14,  48 => 8,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
