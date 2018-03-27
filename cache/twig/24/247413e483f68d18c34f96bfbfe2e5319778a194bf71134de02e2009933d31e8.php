<?php

/* @Page:C:/htdocs/lupohelp/user/pages/03.start/01.lupo-starten */
class __TwigTemplate_46a32f49d083be6b3f296695830db960b117493cf90833aa64109a6095dd517a extends Twig_Template
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
        // line 1
        echo "<p><img alt=\"start-win10\" src=\"/user/pages/images/start-win10.png\" /></p>
<p>LUPO unter «Alle Apps» im Startmenü von Windows 10</p>
<p><img alt=\"start-win8\" src=\"/user/pages/images/start-win8.png\" /></p>
<p>LUPO Apps in Windows 8.1</p>
<table>
<thead>
<tr>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>LUPO</td>
<td>LUPO, das Ludothekprogramm. Gleiche Verknüpfung wie auf dem Desktop.</td>
</tr>
<tr>
<td>LUPO Datensicherung</td>
<td>Zurücklesen (Wiederherstellen) von Datensicherungen</td>
</tr>
<tr>
<td>LUPO Handbuch</td>
<td>Zeigt dieses Handbuch im Acrobat-Reader an.</td>
</tr>
<tr>
<td>LUPO Installation reparieren</td>
<td>Falls LUPO nicht mehr gestartet werden kann hilft dies oftmals</td>
</tr>
<tr>
<td>LUPO Daten-Update</td>
<td>Konvertiert die LUPO Datenbank ins aktuelle Format. Nötig beim Update.</td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/htdocs/lupohelp/user/pages/03.start/01.lupo-starten";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Page:C:/htdocs/lupohelp/user/pages/03.start/01.lupo-starten", "");
    }
}
