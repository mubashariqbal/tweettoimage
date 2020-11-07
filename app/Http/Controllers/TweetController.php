<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class TweetController extends Controller
{

    public function image($tweet)
    {
        $hash = md5($tweet);
        @mkdir(storage_path('app/tweets/'), '0744', true);
        $path = storage_path('app/tweets/'.$hash.'.jpg');
        $url = route('tweet.html', $tweet);
        Browsershot::url($url)
            ->windowSize(560, 500)
            ->fullPage()
            ->waitUntilNetworkIdle()
            ->setScreenshotType('jpeg', 100)
            ->save($path);

        return response()->file($path);

    }

    public function html($tweet)
    {

        $embed = file_get_contents('https://publish.twitter.com/oembed?url='.urlencode($tweet));
        $json = json_decode($embed);

        $html= $json->html;

        $theme = "light"; // dark / light
        $conversation = "none"; // none / true

        $html = str_replace('<blockquote', '<blockquote data-conversation="'.$conversation.'" data-dnt="true" data-theme="'.$theme.'"', $html);

        return view('tweets.html', compact('json', 'tweet', 'embed', 'html'));
    }

}
