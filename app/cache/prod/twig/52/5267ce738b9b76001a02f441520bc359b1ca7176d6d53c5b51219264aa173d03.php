<?php

/* PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig */
class __TwigTemplate_0f1453b50c69f529f32431edacae1eace9d4637ef13f59a7204c87baf94eb81d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"ps-dropdown dropdown btn-group\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topMenuData"]) ? $context["topMenuData"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 27
            echo "        ";
            $context["refMenu"] = $this->getAttribute($context["menu"], "refMenu", array());
            // line 28
            echo "        <span type=\"button\"  id=\"";
            echo twig_escape_filter($this->env, (isset($context["refMenu"]) ? $context["refMenu"] : null), "html", null, true);
            echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"js-selected-item selected-item module-category-selector-label\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "name", array()), "html", null, true);
            echo "
            </span>
            <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
        </span>
        <div class=\"ps-dropdown-menu dropdown-menu module-category-selector\" aria-labelledby=\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["refMenu"]) ? $context["refMenu"] : null), "html", null, true);
            echo "\">
            <ul class=\"items-list js-items-list\">
                <li class=\"module-category-reset\">
                    <a class=\"dropdown-item\" href=\"#\">
                            ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Categories", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "
                    </a>
                </li>
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayCast($this->getAttribute($context["menu"], "subMenu", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
                // line 42
                echo "                    <li class=\"module-category-menu\" data-category-ref=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "refMenu", array()), "html", null, true);
                echo "\" data-category-display-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "name", array()), "html", null, true);
                echo "\">
                        <a  class=\"dropdown-item\" href=\"#\">
                            ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "name", array()), "html", null, true);
                echo "<span class=\"pull-right\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["subMenu"], "modules", array())), "html", null, true);
                echo "</span>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subMenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </ul>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 51,  79 => 48,  67 => 44,  59 => 42,  55 => 41,  49 => 38,  42 => 34,  35 => 30,  29 => 28,  26 => 27,  22 => 26,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
