<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use App\Http\Requests\CommentCreateRequest;
use App\Repositories\CommentRepositoryInterface;

/**
 * Class CommentsController
 * @package App\Http\Controllers
 */
class CommentsController extends Controller
{
    /**
     * @var CommentRepositoryInterface
     */
    protected $comment;

    /**
     * CommentsController constructor.
     * @param CommentRepositoryInterface $comment
     */
    public function __construct(CommentRepositoryInterface $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return Factory|JsonResponse|View
     */
    public function index(): View
    {
        $comments = $this->comment->all()->where('parent_id',null);

        return view('comments.index', compact('comments'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function create(Request $request): RedirectResponse
    {
        $this->comment->create($request->all());

        return redirect('/comment');
    }

    /**
     * @param CommentCreateRequest $request
     * @return RedirectResponse|Redirector
     */
    public function store(CommentCreateRequest $request): RedirectResponse
    {
        $this->comment->update($request->all(),$request->all('id')['id']);

        return redirect('/comment');
    }

    /**
     * @param $id
     * @return RedirectResponse|Redirector
     */
    public function destroy($id): RedirectResponse
    {
        $this->comment->delete($id);

        return redirect('/comment');
    }

}
