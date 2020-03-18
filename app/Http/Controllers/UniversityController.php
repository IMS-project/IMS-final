<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUniversityRequest;
use App\Http\Requests\UpdateUniversityRequest;
use App\Repositories\UniversityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\University;

class UniversityController extends AppBaseController
{
    /** @var  UniversityRepository */
    private $universityRepository;

    public function __construct(UniversityRepository $universityRepo)
    {
        $this->middleware('auth');
        $this->universityRepository = $universityRepo;
    }

    /**
     * Display a listing of the University.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $universities = $this->universityRepository->all();

        return view('universities.index')
            ->with('universities', $universities);
    }

    /**
     * Show the form for creating a new University.
     *
     * @return Response
     */
    public function create()
    {
        return view('universities.create');
    }

    /**
     * Store a newly created University in storage.
     *
     * @param CreateUniversityRequest $request
     *
     * @return Response
     */
    public function store(CreateUniversityRequest $request)
    {
        $input = $request->all();

        $university = $this->universityRepository->create($input);

        Flash::success('University saved successfully.');

        return redirect(route('universities.index'));
    }


    /**
     * Display the specified University.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $university = $this->universityRepository->find($id);

        if (empty($university)) {
            Flash::error('University not found');

            return redirect(route('universities.index'));
        }

        return view('universities.show')->with('university', $university);
    }

    /**
     * Show the form for editing the specified University.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $university = $this->universityRepository->find($id);

        if (empty($university)) {
            Flash::error('University not found');

            return redirect(route('universities.index'));
        }

        return view('universities.edit')->with('university', $university);
    }

    /**
     * Update the specified University in storage.
     *
     * @param int $id
     * @param UpdateUniversityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUniversityRequest $request)
    {
        $university = $this->universityRepository->find($id);

        if (empty($university)) {
            Flash::error('University not found');

            return redirect(route('universities.index'));
        }

        $university = $this->universityRepository->update($request->all(), $id);

        Flash::success('University updated successfully.');

        return redirect(route('universities.index'));
    }

    /**
     * Remove the specified University from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $university = $this->universityRepository->find($id);

        if (empty($university)) {
            Flash::error('University not found');

            return redirect(route('universities.index'));
        }

        $this->universityRepository->delete($id);

        Flash::success('University deleted successfully.');

        return redirect(route('universities.index'));
    }
}
