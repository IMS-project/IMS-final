<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChatsRequest;
use App\Http\Requests\UpdateChatsRequest;
use App\Repositories\ChatsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ChatsController extends AppBaseController
{
    /** @var  ChatsRepository */
    private $chatsRepository;

    public function __construct(ChatsRepository $chatsRepo)
    {
        $this->chatsRepository = $chatsRepo;
    }

    /**
     * Display a listing of the Chats.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $chats = $this->chatsRepository->all();

        return view('chats.index')
            ->with('chats', $chats);
    }

    /**
     * Show the form for creating a new Chats.
     *
     * @return Response
     */
    public function create()
    {
        return view('chats.create');
    }

    /**
     * Store a newly created Chats in storage.
     *
     * @param CreateChatsRequest $request
     *
     * @return Response
     */
    public function store(CreateChatsRequest $request)
    {
        $input = $request->all();

        $chats = $this->chatsRepository->create($input);

        Flash::success('Chats saved successfully.');

        return redirect(route('chats.index'));
    }

    /**
     * Display the specified Chats.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $chats = $this->chatsRepository->find($id);

        if (empty($chats)) {
            Flash::error('Chats not found');

            return redirect(route('chats.index'));
        }

        return view('chats.show')->with('chats', $chats);
    }

    /**
     * Show the form for editing the specified Chats.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $chats = $this->chatsRepository->find($id);

        if (empty($chats)) {
            Flash::error('Chats not found');

            return redirect(route('chats.index'));
        }

        return view('chats.edit')->with('chats', $chats);
    }

    /**
     * Update the specified Chats in storage.
     *
     * @param int $id
     * @param UpdateChatsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChatsRequest $request)
    {
        $chats = $this->chatsRepository->find($id);

        if (empty($chats)) {
            Flash::error('Chats not found');

            return redirect(route('chats.index'));
        }

        $chats = $this->chatsRepository->update($request->all(), $id);

        Flash::success('Chats updated successfully.');

        return redirect(route('chats.index'));
    }

    /**
     * Remove the specified Chats from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $chats = $this->chatsRepository->find($id);

        if (empty($chats)) {
            Flash::error('Chats not found');

            return redirect(route('chats.index'));
        }

        $this->chatsRepository->delete($id);

        Flash::success('Chats deleted successfully.');

        return redirect(route('chats.index'));
    }
}
