<?php

namespace App\Content;

use Illuminate\Support\Collection;

class Bookmarks
{
    static string $title = "Bookmarks";
    static string $description = "A list of articles, videos, and sites that have resonated with me.";

    static public function items(): Collection
    {
        return collect([
            [
                'name' => 'Mindset of successful Programmers',
                'url' => 'https://www.youtube.com/watch?v=nogh434ykF0',
                'type' => 'Video',
                'description' => "This video really hits home – I've always struggled with having unrealistic expectations for myself and have wasted a lot of time spending time learning reading about writing software instead of... actually writing software.",
            ],
            [
                'name' => 'How to get out of tutorial hell',
                'url' => 'https://www.youtube.com/watch?v=343EWZS9O88',
                'type' => 'Video',
                'description' => "Choc full of great tips for getting some momentum building towards writing software.",
            ],
            [
                'name' => 'Software Engineering Anxiety',
                'url' => 'https://www.youtube.com/watch?v=-Afvtij-o2w',
                'type' => 'Video',
                'description' => "A short overview of two potential sources of anxiety that software engineers face and tips for dealing with them.",
            ],
            [
                'name' => 'Your Approach to Programming Is Wrong',
                'url' => 'https://www.youtube.com/watch?v=UAZflJ02JJo',
                'type' => 'Video',
                'description' => "As the producer writes, this is advice I wish I would have drilled into my head sooner.",
            ],
        ]);
    }
}
