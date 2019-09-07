<?php
$html = '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE dita PUBLIC "-//OASIS//DTD DITA Composite//EN" "ditabase.dtd"><dita ditaarch:DITAArchVersion="1.2" domains="(topic task)                            (topic concept)                            (topic concept glossentry)                            (topic concept glossgroup)                            (topic reference)                            (topic troubleshooting++task) (topic task)                            (topic abbrev-d)                            a(props deliveryTarget)                            (topic equation-d)                            (topic hazard-d)                            (topic hi-d)                            (topic indexing-d)                            (topic markup-d)                            (topic mathml-d)                            (topic pr-d)                            (topic relmgmt-d)                            (topic sw-d)                            (topic svg-d)                            (topic ui-d)                            (topic ut-d)                            (topic markup-d xml-d)                            (topic task strictTaskbody-c)   " xmlns:ditaarch="http://dita.oasis-open.org/architecture/2005/"><concept class="- topic/topic concept/concept " ditaarch:DITAArchVersion="1.3" id="id1617ME00X0Y"><title class="- topic/title "><ph class="- topic/ph " props="autonumber">53.235</ph> Research and development contracting (SF 298).</title><conbody class="- topic/body concept/conbody "><p class="- topic/p " id="d3821e13"><i class="+ topic/ph hi-d/i "><ph class="- topic/ph "></ph> (2/89), Report <ins class="ice-ins ice-cts-1" data-changedata="" data-cid="2" data-last-change-time="1567867486528" data-time="1567867481424" data-userid="1" data-username="admin">al added one </ins><del class="ice-del ice-cts-1" data-changedata="" data-cid="2" data-last-change-time="1567867486528" data-time="1567867481424" data-userid="1" data-username="admin">Documentation</del> Page</i>. <ph class="- topic/ph "></ph> is prescribed for use in submitting <ins class="ice-ins ice-cts-1" data-changedata="" data-cid="15" data-last-change-time="1567867495305" data-time="1567867491268" data-userid="1" data-username="admin">deleted second </ins><del class="ice-del ice-cts-1" data-changedata="" data-cid="15" data-last-change-time="1567867495305" data-time="1567867491268" data-userid="1" data-username="admin">scientific</del> and technical reports to contracting officers and to technical information <ins class="ice-ins ice-cts-1" data-changedata="" data-cid="30" data-last-change-time="1567867504264" data-time="1567867498529" data-userid="1" data-username="admin"> and here is the third </ins><del class="ice-del ice-cts-1" data-changedata="" data-cid="30" data-last-change-time="1567867504264" data-time="1567867498529" data-userid="1" data-username="admin">libraries</del>, as specified in <ph class="- topic/ph "></ph>.</p>
 <ph class="- topic/ph ">
						            <xref href="https://www.gsa.gov/forms-library/report-documentation-page"
                        format="html"
                        scope="external"
                        class="- topic/xref "> SF 298</xref>
					          </ph> 
</conbody></concept></dita>
';
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
print_r($xreftext->attributes());
print $xreftext[0]."\n";
}

$xrefs1 = $xml->xpath('//del');
        foreach ($xrefs1 as $xreftext1) {
print_r($xreftext1->attributes());
print $xreftext1[0]."\n";
}

}
?>
