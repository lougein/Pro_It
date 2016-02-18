<?php

/* MyAppGrapheBundle:Graphe:LineChart.html.twig */
class __TwigTemplate_02cb722ab56898ca5483a2dbd871a6238e828bd968282df87f6fe952d7063a19 extends Twig_Template
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
        // line 2
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"
type=\"text/javascript\"></script>  
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script> 
<script type=\"text/javascript\"> 
    ";
        // line 7
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo " 
</script>  
<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div> ";
    }

    public function getTemplateName()
    {
        return "MyAppGrapheBundle:Graphe:LineChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 7,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"*/
/* type="text/javascript"></script>  */
/* <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script> */
/* <script type="text/javascript"> */
/*     {{ chart(chart) }} */
/* </script>  */
/* <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div> */
