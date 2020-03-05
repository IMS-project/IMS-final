<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSupervisorsRequest;
use App\Http\Requests\UpdateSupervisorsRequest;
use App\Repositories\SupervisorsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SupervisorsController extends AppBaseController
{
    /** @var  SupervisorsRepository */
    private $supervisorsRepository;

    public function __construct(SupervisorsRepository $supervisorsRepo)
    {
        $this->supervisorsRepository = $supervisorsRepo;
    }

    /**
     * Display a listing of the Supervisors.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $supervisors = $this->supervisorsRepository->all();

        return view('supervisors.index')
            ->with('supervisors', $supervisors);
    }

    /**
     * Show the form for creating a new Supervisors.
     *
     * @return Response
     */
    public function create()
    {
        return view('supervisors.create');
    }

    /**
     * Store a newly created Supervisors in storage.
     *
     * @param CreateSupervisorsRequest $request
     *
     * @return Response
     */
    public function store(CreateSupervisorsRequest $request)
    {
        $input = $request->all();

        $supervisors = $this->supervisorsRepository->create($input);

        Flash::success('Supervisors saved successfully.');

        return redirect(route('supervisors.index'));
    }

    /**
     * Display the specified Supervisors.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $supervisors = $this->supervisorsRepository->find($id);

        if (empty($supervisors)) {
            Flash::error('Supervisors not found');

            return redirect(route('supervisors.index'));
        }

        return view('supervisors.show')->with('supervisors', $supervisors);
    }

    /**
     * Show the form for editing the specified Supervisors.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $supervisors = $this->supervisorsRepository->find($id);

        if (empty($supervisors)) {
            Flash::error('Supervisors not found');

            return redirect(route('supervisors.index'));
        }

        return view('supervisors.edit')->with('supervisors', $supervisors);
    }

    /**
     * Update the specified Supervisors in storage.
     *
     * @param int $id
     * @param UpdateSupervisorsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSupervisorsRequest $request)
    {
        $supervisors = $this->supervisorsRepository->find($id);

        if (empty($supervisors)) {
            Flash::error('Supervisors not found');

            return redirect(route('supervisors.index'));
        }

        $supervisors = $this->supervisorsRepository->update($request->all(), $id);

        Flash::success('Supervisors updated successfully.');

        return redirect(route('supervisors.index'));
    }

    /**
     * Remove the specified Supervisors from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $supervisors = $this->supervisorsRepository->find($id);

        if (empty($supervisors)) {
            Flash::error('Supervisors not found');

            return redirect(route('supervisors.index'));
        }

        $this->supervisorsRepository->delete($id);

        Flash::success('Supervisors deleted successfully.');

        return redirect(route('supervisors.index'));
    }
}
