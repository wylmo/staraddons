<?php

/* PrestaShopBundle:Admin:macros.html.twig */
class __TwigTemplate_c528a172f753ea49c9197c6a8b574debc254ccd9a93c3142b1bfea52a4bd142f extends Twig_Template
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
        // line 28
        echo "
";
        // line 32
        echo "
";
    }

    // line 25
    public function getform_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["name"]) ? $context["name"] : null), 'label', array("label_attr" => array("tooltip" => (isset($context["tooltip"]) ? $context["tooltip"] : null), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (_twig_default_filter((isset($context["placement"]) ? $context["placement"] : null), "top")) : ("top")))));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcheck($__variable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "  ";
            echo twig_escape_filter($this->env, (((array_key_exists("variable", $context) && (twig_length_filter($this->env, (isset($context["variable"]) ? $context["variable"] : null)) > 0))) ? ((isset($context["variable"]) ? $context["variable"] : null)) : (false)), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "  <span data-toggle=\"tooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("position", $context)) ? (_twig_default_filter((isset($context["position"]) ? $context["position"] : null), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "</i>
  </span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  103 => 34,  89 => 33,  71 => 30,  59 => 29,  41 => 26,  27 => 25,  22 => 32,  19 => 28,);
    }

    public function getSource()
    {
        return "";
    }
}
