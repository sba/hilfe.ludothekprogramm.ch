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

/* @Page:C:/htdocs/grav-admin-test.local/user/pages/03.start/01.lupo-starten */
class __TwigTemplate_a0d80a9e73b259d216cba8dc7500671748bed9b3e0818421c143dcf622b5c252 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
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
        return "@Page:C:/htdocs/grav-admin-test.local/user/pages/03.start/01.lupo-starten";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p><img alt=\"start-win10\" src=\"/user/pages/images/start-win10.png\" /></p>
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
</table>", "@Page:C:/htdocs/grav-admin-test.local/user/pages/03.start/01.lupo-starten", "");
    }
}
