<?php

if (!function_exists('getLinksFromCSV')) {
    function getLinksFromCSV($filename, $kolom)
    {
        $path = public_path();
        
        $csv = fopen($path.'/'.$filename, 'r');
        // skip header
        $header = fgetcsv($csv);

        while(($line = fgetcsv($csv, separator:';')) !== FALSE)
        {
            if ($line[$kolom] != "") {                
                $data[] = $line[$kolom];
            }
        }        
        fclose($csv);

        return $data;
    }
}


if(!function_exists('writeCsv')){
    function writeCsv($filename, $data)
    {
        # code...
        $path = public_path();
        
        $csv = fopen($path.'/'.$filename, 'a+');

        fputcsv($csv, $data, separator:';');
    }
}

if(!function_exists('getDesc')) {
    function getDesc($goutteClient, $link)
    {
        $crawler = $goutteClient->request('GET', $link);
        try {
            //code...
            $desc = $crawler->filter('#gsc_oci_descr')->filter('.gsh_small')->filter('.gsh_csp')->text();
        } catch (\Throwable $th) {
            //throw $th;
            $desc = 'not found';
        }
        return $desc;
    }
}
if(!function_exists('getPdfLink')){
    function getPdfLink($goutteClient, $link)
    {
        $crawler = $goutteClient->request('GET', $link);
        try {
            //code...
            $pdfLink = $crawler->filter('#gsc_oci_title_gg')->filter('.gsc_oci_title_ggi')->filter('a')->Link()->getUri();
        } catch (\Throwable $th) {
            //throw $th;
            $pdfLink = '#';
        }
        return $pdfLink;
    }
}
