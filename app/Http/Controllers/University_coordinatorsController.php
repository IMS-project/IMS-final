<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUniversity_coordinatorsRequest;
use App\Http\Requests\UpdateUniversity_coordinatorsRequest;
use App\Repositories\University_coordinatorsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class University_coordinatorsController extends AppBaseController
{
    /** @var  University_coordinatorsRepository */
    private $universityCoordinatorsRepository;

    public function __construct(University_coordinatorsRepository $universityCoordinatorsRepo)
    {
        $this->middleware('auth');
        $this->universityCoordinatorsRepository = $universityCoordinatorsRepo;
    }

    /**
     * Display a listing of the University_coordinators.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $universityCoordinators = $this->universityCoordinatorsRepository->all();

        return view('university_coordinators.index')
            ->with('universityCoordinators', $universityCoordinators);
    }

    /**
     * Show the form for creating a new University_coordinators.
     *
     * @return Response
     */
    public function create()
    {
        return view('university_coordinators.create');
    }

    /**
     * Store a newly created University_coordinators in storage.
     *
     * @param CreateUniversity_coordinatorsRequest $request
     *
     * @return Response
     */
    public function store(CreateUniversity_coordinatorsRequest $request)
    {
        $input = $request->all();

        $universityCoordinators = $this->universityCoordinatorsRepository->create($input);

        Flash::success('University Coordinators saved successfully.');

        return redirect(route('universityCoordinators.index'));
    }

    /**
     * Display the specified University_coordinators.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $universityCoordinators = $this->universityCoordinatorsRepository->find($id);

        if (empty($universityCoordinators)) {
            Flash::error('University Coordinators not found');

            return redirect(route('universityCoordinators.index'));
        }

        return view('university_coordinators.show')->with('universityCoordinators', $universityCoordinators);
    }

    /**
     * Show the form for editing the specified University_coordinators.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $universityCoordinators = $this->universityCoordinatorsRepository->find($id);

        if (empty($universityCoordinators)) {
            Flash::error('University Coordinators not found');

            return redirect(route('universityCoordinators.index'));
        }

        return view('university_coordinators.edit')->with('universityCoordinators', $universityCoordinators);
    }

    /**
     * Update the specified University_coordinators in storage.
     *
     * @param int $id
     * @param UpdateUniversity_coordinatorsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUniversity_coordinatorsRequest $request)
    {
        $universityCoordinators = $this->universityCoordinatorsRepository->find($id);

        if (empty($universityCoordinators)) {
            Flash::error('University Coordinators not found');

            return redirect(route('universityCoordinators.index'));
        }

        $universityCoordinators = $this->universityCoordinatorsRepository->update($request->all(), $id);

        Flash::success('University Coordinators updated successfully.');

        return redirect(route('universityCoordinators.index'));
    }

    /**
     * Remove the specified University_coordinators from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $universityCoordinators = $this->universityCoordinatorsRepository->find($id);

        if (empty($universityCoordinators)) {
            Flash::error('University Coordinators not found');

            return redirect(route('universityCoordinators.index'));
        }

        $this->universityCoordinatorsRepository->delete($id);

        Flash::success('University Coordinators deleted successfully.');

        return redirect(route('universityCoordinators.index'));
    }
}
