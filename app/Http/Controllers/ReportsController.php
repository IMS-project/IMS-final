<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReportsRequest;
use App\Http\Requests\UpdateReportsRequest;
use App\Repositories\ReportsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ReportsController extends AppBaseController
{
    /** @var  ReportsRepository */
    private $reportsRepository;

    public function __construct(ReportsRepository $reportsRepo)
    {
        $this->reportsRepository = $reportsRepo;
    }

    /**
     * Display a listing of the Reports.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reports = $this->reportsRepository->all();

        return view('reports.index')
            ->with('reports', $reports);
    }

    /**
     * Show the form for creating a new Reports.
     *
     * @return Response
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Store a newly created Reports in storage.
     *
     * @param CreateReportsRequest $request
     *
     * @return Response
     */
    public function store(CreateReportsRequest $request)
    {
        $input = $request->all();

        $reports = $this->reportsRepository->create($input);

        Flash::success('Reports saved successfully.');

        return redirect(route('reports.index'));
    }

    /**
     * Display the specified Reports.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reports = $this->reportsRepository->find($id);

        if (empty($reports)) {
            Flash::error('Reports not found');

            return redirect(route('reports.index'));
        }

        return view('reports.show')->with('reports', $reports);
    }

    /**
     * Show the form for editing the specified Reports.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reports = $this->reportsRepository->find($id);

        if (empty($reports)) {
            Flash::error('Reports not found');

            return redirect(route('reports.index'));
        }

        return view('reports.edit')->with('reports', $reports);
    }

    /**
     * Update the specified Reports in storage.
     *
     * @param int $id
     * @param UpdateReportsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReportsRequest $request)
    {
        $reports = $this->reportsRepository->find($id);

        if (empty($reports)) {
            Flash::error('Reports not found');

            return redirect(route('reports.index'));
        }

        $reports = $this->reportsRepository->update($request->all(), $id);

        Flash::success('Reports updated successfully.');

        return redirect(route('reports.index'));
    }

    /**
     * Remove the specified Reports from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reports = $this->reportsRepository->find($id);

        if (empty($reports)) {
            Flash::error('Reports not found');

            return redirect(route('reports.index'));
        }

        $this->reportsRepository->delete($id);

        Flash::success('Reports deleted successfully.');

        return redirect(route('reports.index'));
    }
}
