<?php
$html = '<?xml version="1.0" encoding="UTF-8"?>
<dita>
<p>1.000 Scope of part.</p>

<p>This part sets <ins class="ice-cts-1 ice-ins" data-changedata="" data-cid="24" data-last-change-time="1567869249265" data-time="1567869248451" data-userid="1" data-username="admin"> faf af</ins><del class="ice-cts-1 ice-del" data-changedata="" data-cid="24" data-last-change-time="1567869249265" data-time="1567869248451" data-userid="1" data-username="admin">forth</del> basic <ins class="ice-cts-1 ice-ins" data-changedata="" data-cid="13" data-last-change-time="1567869247644" data-time="1567869246909" data-userid="1" data-username="admin"> fas fsa fa</ins><del class="ice-cts-1 ice-del" data-changedata="" data-cid="13" data-last-change-time="1567869247644" data-time="1567869246909" data-userid="1" data-username="admin">policies</del> and general information about the Federal Acquisition <ins class="ice-cts-1 ice-ins" data-changedata="" data-cid="31" data-last-change-time="1567869251113" data-time="1567869250548" data-userid="1" data-username="admin"> faf </ins><del class="ice-cts-1 ice-del" data-changedata="" data-cid="31" data-last-change-time="1567869251113" data-time="1567869250548" data-userid="1" data-username="admin">Regulations</del> System including <ins class="ice-cts-1 ice-ins" data-changedata="" data-cid="5" data-last-change-time="1567869246097" data-time="1567869245414" data-userid="1" data-username="admin">af fsa f</ins><del class="ice-cts-1 ice-del" data-changedata="" data-cid="5" data-last-change-time="1567869246097" data-time="1567869245414" data-userid="1" data-username="admin">purpose</del>, authority, applicability, issuance, arrangement, numbering, dissemination, implementation, supplementation, maintenance, administration, and deviation. subparts  1.2 , 1.3 , and 1.4 prescribe a<ins class="ice-cts ice-ins" data-changedata="" data-cid="3" data-last-change-time="1565353448376" data-time="1565353448376" data-userid="" data-username="">K</ins>dministrative procedures for <ins class="ice-cts ice-ins" data-changedata="" data-cid="4" data-last-change-time="1565353454137" data-time="1565353451626" data-userid="" data-username="">lhlhlh ljj l</ins>maintaining the FAR <ins class="ice-ins ice-cts-1" data-changedata="" data-cid="6" data-last-change-time="1567873245475" data-time="1567873242840" data-userid="1" data-username="admin">saf a s af</ins></p>

<p><ins class="ice-ins ice-cts-1" data-changedata="" data-cid="6" data-last-change-time="1567873245475" data-time="1567873242840" data-userid="1" data-username="admin">afasf</ins></p>

<p><del class="ice-del ice-cts-1" data-changedata="" data-cid="6" data-last-change-time="1567873245475" data-time="1567873242840" data-userid="1" data-username="admin">System</del>.</p>

<p><ins class="ice-cts ice-ins" data-changedata="" data-cid="2" data-last-change-time="1565353446619" data-time="1565353446619" data-userid="" data-username="">A</ins>asf a fa</p>

<p>afsa </p>
</dita>';
#$doc = DOMDocument::loadHTML($html);
#$xpath = new DOMXPath($doc);
#$query = "//div[@id='btn-loc']";
#$query = "//ins[@data-username]";
#$entries = $xpath->query($query);
#foreach ($entries as $entry) {
#var_dump($entry->attributes);  
#echo "Found: " . $entry->getAttribute("attrloc");
#}
$search = ['<!--', '-->', '</dita><p>&nbsp;</p>'];
      $replace = ['<', '>', '</dita>'];
      $html = html_entity_decode(str_replace($search, $replace, $html));
      $html = str_replace('&', '&amp;', $html);
$xml = simplexml_load_string($html);
      if (is_object($xml)) {
        $xrefs = $xml->xpath('//ins');
        foreach ($xrefs as $xreftext) {
print $xreftext->attributes()['data-username'][0]." -- \n";
print $xreftext[0]."\n";
}

$xrefs1 = $xml->xpath('//del');
        foreach ($xrefs1 as $xreftext1) {
#print_r($xreftext1->attributes());
#print $xreftext1[0]."\n";
}

}
?>
