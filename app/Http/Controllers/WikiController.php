<?php

namespace App\Http\Controllers;

use App\Services\MarkdownParser;

use League\CommonMark\Extension\CommonMark\Node\Block\Heading;
use League\CommonMark\Extension\CommonMark\Node\Block\HtmlBlock;
use League\CommonMark\Extension\CommonMark\Node\Block\ListBlock;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;
use League\CommonMark\Node\Block\Paragraph;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WikiController extends Controller
{

    public function show(Request $request, $url = "/") {
        $catalogs = MarkdownParser::parse(base64_decode($this->request("https://api.github.com/repos/atomine-xyz/wiki/contents/pages/menu.md")->json()['content']), $this->getParseOptions());
        $page = $this->scan($url);
        return view('wiki', ['catalogs' => $catalogs, 'content' => $page]);
    }

    private function request($url) {
        $response = Http::withHeaders([
            'Authorization' => "token " . env("GITHUB_TOKEN")
        ])->get($url);
        if ($response->notFound()) {
            abort(404);
        }
        return $response;
    }

    private function scan($url) {
        $splittedUrl = explode('/', $url);
        if (count($splittedUrl) == 1) {
            abort(404);
        }
        if ($url == "/") {
            $page = MarkdownParser::parse(base64_decode($this->request("https://api.github.com/repos/atomine-xyz/wiki/contents/pages/index.md")->json()['content']), $this->getParseOptions());
        }
        else {
            $page = MarkdownParser::parse(base64_decode($this->request("https://api.github.com/repos/atomine-xyz/wiki/contents/pages/" . $url . ".md")->json()['content']), $this->getParseOptions());
        }
        return $page;
    }

    private function getParseOptions() {
        return [
            'html_input' => 'allow',
            'default_attributes' => [
                Heading::class => [
                    'class' => static function(Heading $node) {
                        switch ($node->getLevel()) {
                            case 1: return 'text-3xl font-extrabold';
                            case 2: return 'text-2xl font-bold pb-2 pt-4';
                            case 3: return 'text-xl font-bold pt-2';
                        }
                    }
                ],
                Paragraph::class => [
                    'class' => 'text-lg'
                ],
                ListBlock::class => [
                    'class' => static function(ListBlock $node) {
                        return 'font-regular leading-loose';
                    }
                ]
            ]
        ];
    }
}
