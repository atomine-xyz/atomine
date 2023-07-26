<?php

namespace App\Services;

use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;

use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use League\CommonMark\Extension\DefaultAttributes\DefaultAttributesExtension;
use League\CommonMark\MarkdownConverter;

class MarkdownParser
{
    static public function parse($text, $options) {
        $environment = new Environment($options);

        $environment->addExtension(new CommonMarkCoreExtension());
        $environment->addExtension(new GithubFlavoredMarkdownExtension());
        $environment->addExtension(new DefaultAttributesExtension());

        $converter = new MarkdownConverter($environment);
        return $converter->convert($text);
    }
}
