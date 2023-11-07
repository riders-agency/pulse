namespace RA;

class PulseClient {
    public function send($uuid, $data) {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://pulse.riders.agency/send', [
            'query' => [
                'uuid' => $uuid,
                'data' => json_encode($data),
            ]
        ]);

        # Process the response as needed

        return $response;
    }
}
