<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDepartmentsRequest;
use App\Http\Requests\UpdateDepartmentsRequest;
use App\Repositories\DepartmentsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DepartmentsController extends AppBaseController
{
    /** @var  DepartmentsRepository */
    private $departmentsRepository;

    public function __construct(DepartmentsRepository $departmentsRepo)
    {
        $this->departmentsRepository = $departmentsRepo;
    }

    /**
     * Display a listing of the Departments.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $departments = $this->departmentsRepository->all();

        return view('departments.index')
            ->with('departments', $departments);
    }

    /**
     * Show the form for creating a new Departments.
     *
     * @return Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created Departments in storage.
     *
     * @param CreateDepartmentsRequest $request
     *
     * @return Response
     */
    public function store(CreateDepartmentsRequest $request)
    {
        $input = $request->all();

        $departments = $this->departmentsRepository->create($input);

        Flash::success('Departments saved successfully.');

        return redirect(route('departments.index'));
    }

    /**
     * Display the specified Departments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $departments = $this->departmentsRepository->find($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('departments.index'));
        }

        return view('departments.show')->with('departments', $departments);
    }

    /**
     * Show the form for editing the specified Departments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $departments = $this->departmentsRepository->find($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('departments.index'));
        }

        return view('departments.edit')->with('departments', $departments);
    }

    /**
     * Update the specified Departments in storage.
     *
     * @param int $id
     * @param UpdateDepartmentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDepartmentsRequest $request)
    {
        $departments = $this->departmentsRepository->find($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('departments.index'));
        }

        $departments = $this->departmentsRepository->update($request->all(), $id);

        Flash::success('Departments updated successfully.');

        return redirect(route('departments.index'));
    }

    /**
     * Remove the specified Departments from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $departments = $this->departmentsRepository->find($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('departments.index'));
        }

        $this->departmentsRepository->delete($id);

        Flash::success('Departments deleted successfully.');

        return redirect(route('departments.index'));
    }
}
