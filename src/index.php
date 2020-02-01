<?php 


namespace laravelsdk\HelloWorld;
use GuzzleHttp\Client;

class Index
{
    public function greet($greet = "Hello World")
    {
        print_r("yes".$greet);die;
        return $greet;
    }

    public function getdata(){
        try {
            $url = 'https://api.bigcommerce.com/stores/6lo95it47j/v2/hooks';
            $client = new \GuzzleHttp\Client([
                'headers' => ['Content-Type' => 'application/json','Accept' => 'application/json','X-Auth-Token' => 'qmcxek5gf0d8wymwr9gmb2t64ceo8r0','X-Auth-Client' => 'ikwibw9x8t3wx3axh71dqkiihwn5xsf']
            ]);
            $response = $client->get($url);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Could not retrieve data']);
        }
        $response = json_decode($response->getBody(), true);
        return $response;
    }
}

