<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Orion\Http\Controllers\Controller;

class PostsController extends Controller
{
    protected $model = Post::class;

    protected function searchableBy(): array
    {
        return ['title', 'body'];
    }

    protected function filterableBy(): array
    {
        return ['title', 'body', 'created_at', 'updated_at', 'published', 'id', 'category'];
    }

    protected function sortableBy(): array
    {
        return ['title', 'category'];
    }

    protected function exposedScopes(): array
    {
        return ['published', 'whereCategory'];
    }
}
