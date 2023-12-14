<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;
use App\Models\Post;
use Illuminate\Support\Facades\URL;

class WebScraper extends Command
{
    protected $signature = 'web:scrape';
    protected $description = 'Crawl data from a website and save to database';

    public function cleanHTML($html)
    {
        // Duyệt qua các thẻ, chỉ giữ lại các thẻ như h2, h3, p và span
        $allowed_tags = '<h2><h3><p><span><img>';
        $html = strip_tags($html, $allowed_tags);

        // Loại bỏ các thuộc tính không mong muốn của các thẻ span
        $html = preg_replace('/<span(.*?)style="(.*?)"(.*?)>/i', '<span$1$3>', $html);

        return $html;
    }

    public function handle()
    {
        $page = 1;
        do {
            $url = "https://serialkillershop.com/blogs/true-crime?page={$page}";
            $client = new Client();
            $response = $client->get($url);
            $html = $response->getBody()->getContents();

            $crawler = new Crawler($html);

            $urls = $crawler->filter('.article-item__title a')->each(function (Crawler $node) {
                $href = $node->attr('href');
                $absoluteUrl = url()->to($href);

                $this->info($absoluteUrl);
                return 'https://serialkillershop.com' . $href;
            });
            // print_r($urls);

            foreach ($urls as $url) {
                $this->processPostUrl($url);
            }
            $page++;
        } while (!empty($urls));
    }

    private function processPostUrl($url)
    {
        $client = new Client();
        $response = $client->get($url);
        $html = $response->getBody()->getContents();

        $crawler = new Crawler($html);

        $title = $crawler->filter('h1.page__title')->text();

        $this->info("Title of {$url}: {$title}");





        $content = $crawler->filter('.article__content.rte')->html();

        $content = $this->cleanHTML($content);

        $this->info("Content of {$url}: {$content}");

        $ogImageContent = $crawler->filter('meta[property="og:image"]')->attr('content');

        $this->info("og:image content of {$url}: {$ogImageContent}");

        $isExist = Post::where('title', $title)->first();
        if ($isExist) {
            return;
        }
        Post::create([
            'title' => $title,
            'content' => $content,
            'image' => $ogImageContent
        ]);
        $this->info('created');
    }
}
