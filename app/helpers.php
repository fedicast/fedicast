<?php

function in_array_array(array $needles, array $haystack, bool $strict = false) : bool
{
    foreach ($needles as $needle) {
        if (in_array($needle, $haystack, $strict) === true) {
            return true;
        }
    }
    return false;
}

/**
 * Looks up the issue count for the Fedicast project or -1 on error.
 * @return int
 */
function getGithubIssuesCount() : int {
    return Cache::remember('github.issues.open', 300, function () : int {
        $client = new GuzzleHttp\Client(['base_uri' => 'https://api.github.com/search/']);

        $response = $client->request('GET', 'issues?q=repo:fedicast/fedicast+type:issue+state:open&per_page=1', [
            'headers' => [
                'Accept'     => 'application/json',
            ]
        ]);

        if ($response->getReasonPhrase() === 'OK') {
            $json = json_decode($response->getBody()->getContents(), true);
            if (json_last_error() === JSON_ERROR_NONE) {
                return (int)$json['total_count'];
            }
        }

        return -1;
    });
}
