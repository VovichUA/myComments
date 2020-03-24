<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Entities\Comment;

/**
 * Class CommentRepository
 * @package App\Repositories
 */
class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    /**
     * @return string
     */
    public function model(): string
    {
        return Comment::class;
    }

    /**
     * @inheritDoc
     */
    public function comments(): Collection
    {
        return Comment::whereNull('parent_id')->with('childComment')->get();
    }
}
