<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/ccc_basic/templates/layout/page.html.twig */
class __TwigTemplate_576a4dcce89a2fe28b8a2d21bede8448090bc380e33ff2ca9deb64b52596c769 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 13];
        $filters = ["render" => 1, "escape" => 3, "date" => 98];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['render', 'escape', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["main_menu"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])));
        // line 2
        $context["secondary_menu"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])));
        // line 3
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "layout-container", 1 => (((        // line 5
($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) ? ("with-navigation") : ("")), 2 => ((        // line 6
($context["secondary_menu"] ?? null)) ? ("with-subnav") : (""))], "method")), "html", null, true);
        // line 7
        echo ">

  <!-- ______________________ HEADER _______________________ -->

  <header id=\"header\">
    <div class=\"container\">
      ";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 14
            echo "        <div id=\"header-region\">
          ";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 18
        echo "    </div>
  </header><!-- /#header -->

  <navbar id=\"navbar\">
    <div class=\"container\">
      ";
        // line 23
        if ($this->getAttribute(($context["page"] ?? null), "navbar", [])) {
            // line 24
            echo "        <div id=\"navbar-region\">
          ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 28
        echo "    </div>
  </navbar><!-- /#navbar -->
  
  ";
        // line 31
        if ((($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) {
            // line 32
            echo "    <nav id=\"navigation\" class=\"menu";
            if (($context["main_menu"] ?? null)) {
                echo " with-primary";
            }
            if (($context["secondary_menu"] ?? null)) {
                echo " with-secondary";
            }
            echo "\">
      <div class=\"container\">
        ";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null)), "html", null, true);
            echo "
        ";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null)), "html", null, true);
            echo "
      </div>
    </nav><!-- /#navigation -->
  ";
        }
        // line 39
        echo "
  <!-- ______________________ MAIN _______________________ -->

  <div id=\"main\">
    <div class=\"container\">
      <section id=\"content\">

        <div id=\"content-header\">

          ";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "

          ";
        // line 50
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "highlighted", []))) {
            // line 51
            echo "            <div id=\"highlighted\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "</div>
          ";
        }
        // line 53
        echo "
          ";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "

          ";
        // line 56
        if (($context["title"] ?? null)) {
            // line 57
            echo "            <h1 class=\"title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>
          ";
        }
        // line 59
        echo "
          ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
          ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

          ";
        // line 63
        if (($context["tabs"] ?? null)) {
            // line 64
            echo "            <div class=\"tabs\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
            echo "</div>
          ";
        }
        // line 66
        echo "
          ";
        // line 67
        if (($context["action_links"] ?? null)) {
            // line 68
            echo "            <ul class=\"action-links\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
            echo "</ul>
          ";
        }
        // line 70
        echo "
        </div><!-- /#content-header -->

        <div id=\"content-area\">
          ";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        </div>

      </section><!-- /#content -->

      ";
        // line 79
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", []))) {
            // line 80
            echo "        <aside id=\"sidebar-first\" class=\"column sidebar first\">
          ";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </aside><!-- /#sidebar-first -->
      ";
        }
        // line 84
        echo "
      ";
        // line 85
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 86
            echo "        <aside id=\"sidebar-second\" class=\"column sidebar second\">
          ";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </aside><!-- /#sidebar-second -->
      ";
        }
        // line 90
        echo "    </div><!-- /.container -->
  </div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->
    
  <footer id=\"footer\">
    <div class=\"container\">
      ";
        // line 97
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
      ";
        // line 98
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        echo "      
      <p class=\"copyright\">&copy; Copyright ";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["currentYear"] ?? null)), "html", null, true);
        echo " | Site by <a target=\"_blank\" href=\"http://3cwebservices.com/\">3C Web Services</a></p>
    </div>
  </footer><!-- /#footer -->
  

</div><!-- /.layout-container -->
";
    }

    public function getTemplateName()
    {
        return "themes/ccc_basic/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 99,  253 => 98,  249 => 97,  240 => 90,  234 => 87,  231 => 86,  229 => 85,  226 => 84,  220 => 81,  217 => 80,  215 => 79,  207 => 74,  201 => 70,  195 => 68,  193 => 67,  190 => 66,  184 => 64,  182 => 63,  177 => 61,  173 => 60,  170 => 59,  164 => 57,  162 => 56,  157 => 54,  154 => 53,  148 => 51,  146 => 50,  141 => 48,  130 => 39,  123 => 35,  119 => 34,  108 => 32,  106 => 31,  101 => 28,  95 => 25,  92 => 24,  90 => 23,  83 => 18,  77 => 15,  74 => 14,  72 => 13,  64 => 7,  62 => 6,  61 => 5,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ccc_basic/templates/layout/page.html.twig", "/home/fraserri/public_html/thebluefundy.ca/themes/ccc_basic/templates/layout/page.html.twig");
    }
}
