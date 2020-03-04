<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompaniesRequest;
use App\Http\Requests\UpdateCompaniesRequest;
use App\Repositories\CompaniesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CompaniesController extends AppBaseController
{
    /** @var  CompaniesRepository */
    private $companiesRepository;

    public function __construct(CompaniesRepository $companiesRepo)
    {
        $this->companiesRepository = $companiesRepo;
    }

    /**
     * Display a listing of the Companies.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $companies = $this->companiesRepository->all();

        return view('companies.index')
            ->with('companies', $companies);
    }

    /**
     * Show the form for creating a new Companies.
     *
     * @return Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created Companies in storage.
     *
     * @param CreateCompaniesRequest $request
     *
     * @return Response
     */
    public function store(CreateCompaniesRequest $request)
    {
        $input = $request->all();

        $companies = $this->companiesRepository->create($input);

        Flash::success('Companies saved successfully.');

        return redirect(route('companies.index'));
    }

    /**
     * Display the specified Companies.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $companies = $this->companiesRepository->find($id);

        if (empty($companies)) {
            Flash::error('Companies not found');

            return redirect(route('companies.index'));
        }

        return view('companies.show')->with('companies', $companies);
    }

    /**
     * Show the form for editing the specified Companies.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $companies = $this->companiesRepository->find($id);

        if (empty($companies)) {
            Flash::error('Companies not found');

            return redirect(route('companies.index'));
        }

        return view('companies.edit')->with('companies', $companies);
    }

    /**
     * Update the specified Companies in storage.
     *
     * @param int $id
     * @param UpdateCompaniesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompaniesRequest $request)
    {
        $companies = $this->companiesRepository->find($id);

        if (empty($companies)) {
            Flash::error('Companies not found');

            return redirect(route('companies.index'));
        }

        $companies = $this->companiesRepository->update($request->all(), $id);

        Flash::success('Companies updated successfully.');

        return redirect(route('companies.index'));
    }

    /**
     * Remove the specified Companies from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $companies = $this->companiesRepository->find($id);

        if (empty($companies)) {
            Flash::error('Companies not found');

            return redirect(route('companies.index'));
        }

        $this->companiesRepository->delete($id);

        Flash::success('Companies deleted successfully.');

        return redirect(route('companies.index'));
    }
}
