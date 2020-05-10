<?php declare(strict_types = 1);

namespace Example\Page;

interface PageReader
{
    public function readBySlug(string $slug) : string;
}
