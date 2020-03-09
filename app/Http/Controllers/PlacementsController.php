<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlacementsRequest;
use App\Http\Requests\UpdatePlacementsRequest;
use App\Repositories\PlacementsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PlacementsController extends AppBaseController
{
    /** @var  PlacementsRepository */
    private $placementsRepository;

    public function __construct(PlacementsRepository $placementsRepo)
    {
        $this->middleware('auth');
        $this->placementsRepository = $placementsRepo;
    }

    /**
     * Display a listing of the Placements.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $placements = $this->placementsRepository->all();

        return view('placements.index')
            ->with('placements', $placements);
    }

    /**
     * Show the form for creating a new Placements.
     *
     * @return Response
     */
    public function create()
    {
        return view('placements.create');
    }

    /**
     * Store a newly created Placements in storage.
     *
     * @param CreatePlacementsRequest $request
     *
     * @return Response
     */
    public function store(CreatePlacementsRequest $request)
    {
        $input = $request->all();

        $placements = $this->placementsRepository->create($input);

        Flash::success('Placements saved successfully.');

        return redirect(route('placements.index'));
    }

    /**
     * Display the specified Placements.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $placements = $this->placementsRepository->find($id);

        if (empty($placements)) {
            Flash::error('Placements not found');

            return redirect(route('placements.index'));
        }

        return view('placements.show')->with('placements', $placements);
    }

    /**
     * Show the form for editing the specified Placements.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $placements = $this->placementsRepository->find($id);

        if (empty($placements)) {
            Flash::error('Placements not found');

            return redirect(route('placements.index'));
        }

        return view('placements.edit')->with('placements', $placements);
    }

    /**
     * Update the specified Placements in storage.
     *
     * @param int $id
     * @param UpdatePlacementsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlacementsRequest $request)
    {
        $placements = $this->placementsRepository->find($id);

        if (empty($placements)) {
            Flash::error('Placements not found');

            return redirect(route('placements.index'));
        }

        $placements = $this->placementsRepository->update($request->all(), $id);

        Flash::success('Placements updated successfully.');

        return redirect(route('placements.index'));
    }

    /**
     * Remove the specified Placements from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $placements = $this->placementsRepository->find($id);

        if (empty($placements)) {
            Flash::error('Placements not found');

            return redirect(route('placements.index'));
        }

        $this->placementsRepository->delete($id);

        Flash::success('Placements deleted successfully.');

        return redirect(route('placements.index'));
    }
}
