<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface CommentRepositoryInterface
 * @package App\Repositories
 */
interface CommentRepositoryInterface extends RepositoryInterface
{
    /**
     * @return Collection
     */
    public function comments(): Collection;
}
