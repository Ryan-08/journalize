<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class GoutteController extends Controller
{
    public function doCrawlGS()
    {
        # initialization Client        
        $goutteClient = new Client(HttpClient::create(['timeout' => 60]));

        $links = getLinksFromCSV('rpu2.csv', 4);
        // dump($links);
        foreach ($links as $key => $link) {
            # code...
            // GET web for each id user            
            $crawler = $goutteClient->request('GET', $link);

            // find data from web
            set_time_limit(0);
            // $result [] = 
            $crawler->filter('#gsc_a_t')->filter('#gsc_a_b')->filter('tr')->each(function ($row) {

                if ($row->filter('.gsc_a_at')->count() > 0) {
                    # code...
                    $title = $row->filter('.gsc_a_at');
                    $author = $row->filter('.gs_gray');
                    $cite = $row->filter('.gsc_a_ac.gs_ibl');
                    $year = $row->filter('.gsc_a_h.gsc_a_hc.gs_ibl');
                    //code...
                    $link = $title->Link();
                    $titleLink = $link->getUri();
                    $data = [
                        $title->text(),
                        $author->text(),
                        $cite->text(),
                        $year->text(),
                        $titleLink,
                    ];
                } else {
                    $data = [];
                }

                if (!empty($data)) {
                    writeCsv('output.csv', $data);
                }
            });
        }
        return redirect()->route('home');
    }

    public function SaveToDB()
    {
        # code...
        $path = public_path();

        $csv = fopen($path . '/output.csv', 'r');

        while (($line = fgetcsv($csv, separator: ';')) !== FALSE) {
            // dd($line);
            $savedData = $this->create($line);
        }
        fclose($csv);

        // dd($savedData);
        // return $data;
        return redirect()->route('home');
    }


    public function create(array $data)
    {
        return Research::create([
            'title' => $data[0],
            'author' => $data[1],
            'citation' => $data[2],
            'tahun' => $data[3],
            'link' => $data[4],
        ]);
    }

    public function adminDashboard()
    {
        $context = [
            'page' => 'Admin | Dashboard',
        ];
        return view('admin.dashboard', compact('context'));
    }
}
