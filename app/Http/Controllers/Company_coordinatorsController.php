<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompany_coordinatorsRequest;
use App\Http\Requests\UpdateCompany_coordinatorsRequest;
use App\Repositories\Company_coordinatorsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Company_coordinatorsController extends AppBaseController
{
    /** @var  Company_coordinatorsRepository */
    private $companyCoordinatorsRepository;

    public function __construct(Company_coordinatorsRepository $companyCoordinatorsRepo)
    {
        $this->companyCoordinatorsRepository = $companyCoordinatorsRepo;
    }

    /**
     * Display a listing of the Company_coordinators.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $companyCoordinators = $this->companyCoordinatorsRepository->all();

        return view('company_coordinators.index')
            ->with('companyCoordinators', $companyCoordinators);
    }

    /**
     * Show the form for creating a new Company_coordinators.
     *
     * @return Response
     */
    public function create()
    {
        return view('company_coordinators.create');
    }

    /**
     * Store a newly created Company_coordinators in storage.
     *
     * @param CreateCompany_coordinatorsRequest $request
     *
     * @return Response
     */
    public function store(CreateCompany_coordinatorsRequest $request)
    {
        $input = $request->all();

        $companyCoordinators = $this->companyCoordinatorsRepository->create($input);

        Flash::success('Company Coordinators saved successfully.');

        return redirect(route('companyCoordinators.index'));
    }

    /**
     * Display the specified Company_coordinators.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $companyCoordinators = $this->companyCoordinatorsRepository->find($id);

        if (empty($companyCoordinators)) {
            Flash::error('Company Coordinators not found');

            return redirect(route('companyCoordinators.index'));
        }

        return view('company_coordinators.show')->with('companyCoordinators', $companyCoordinators);
    }

    /**
     * Show the form for editing the specified Company_coordinators.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $companyCoordinators = $this->companyCoordinatorsRepository->find($id);

        if (empty($companyCoordinators)) {
            Flash::error('Company Coordinators not found');

            return redirect(route('companyCoordinators.index'));
        }

        return view('company_coordinators.edit')->with('companyCoordinators', $companyCoordinators);
    }

    /**
     * Update the specified Company_coordinators in storage.
     *
     * @param int $id
     * @param UpdateCompany_coordinatorsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompany_coordinatorsRequest $request)
    {
        $companyCoordinators = $this->companyCoordinatorsRepository->find($id);

        if (empty($companyCoordinators)) {
            Flash::error('Company Coordinators not found');

            return redirect(route('companyCoordinators.index'));
        }

        $companyCoordinators = $this->companyCoordinatorsRepository->update($request->all(), $id);

        Flash::success('Company Coordinators updated successfully.');

        return redirect(route('companyCoordinators.index'));
    }

    /**
     * Remove the specified Company_coordinators from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $companyCoordinators = $this->companyCoordinatorsRepository->find($id);

        if (empty($companyCoordinators)) {
            Flash::error('Company Coordinators not found');

            return redirect(route('companyCoordinators.index'));
        }

        $this->companyCoordinatorsRepository->delete($id);

        Flash::success('Company Coordinators deleted successfully.');

        return redirect(route('companyCoordinators.index'));
    }
}
