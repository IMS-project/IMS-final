<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepermissionsRequest;
use App\Http\Requests\UpdatepermissionsRequest;
use App\Repositories\permissionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class permissionsController extends AppBaseController
{
    /** @var  permissionsRepository */
    private $permissionsRepository;

    public function __construct(permissionsRepository $permissionsRepo)
    {
        $this->permissionsRepository = $permissionsRepo;
    }

    /**
     * Display a listing of the permissions.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $permissions = $this->permissionsRepository->all();

        return view('permissions.index')
            ->with('permissions', $permissions);
    }

    /**
     * Show the form for creating a new permissions.
     *
     * @return Response
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created permissions in storage.
     *
     * @param CreatepermissionsRequest $request
     *
     * @return Response
     */
    public function store(CreatepermissionsRequest $request)
    {
        $input = $request->all();

        $permissions = $this->permissionsRepository->create($input);

        Flash::success('Permissions saved successfully.');

        return redirect(route('permissions.index'));
    }

    /**
     * Display the specified permissions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error('Permissions not found');

            return redirect(route('permissions.index'));
        }

        return view('permissions.show')->with('permissions', $permissions);
    }

    /**
     * Show the form for editing the specified permissions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error('Permissions not found');

            return redirect(route('permissions.index'));
        }

        return view('permissions.edit')->with('permissions', $permissions);
    }

    /**
     * Update the specified permissions in storage.
     *
     * @param int $id
     * @param UpdatepermissionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepermissionsRequest $request)
    {
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error('Permissions not found');

            return redirect(route('permissions.index'));
        }

        $permissions = $this->permissionsRepository->update($request->all(), $id);

        Flash::success('Permissions updated successfully.');

        return redirect(route('permissions.index'));
    }

    /**
     * Remove the specified permissions from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error('Permissions not found');

            return redirect(route('permissions.index'));
        }

        $this->permissionsRepository->delete($id);

        Flash::success('Permissions deleted successfully.');

        return redirect(route('permissions.index'));
    }
}
