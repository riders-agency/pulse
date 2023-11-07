<?php
namespace RidersAgency;
class PulseClient {
    public function send($uuid, $data) {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://pulse.riders.agency/send', [
            'query' => [
                'uuid' => $uuid,
                'data' => $data,
            ]
        ]);
        return $response;
    }
}