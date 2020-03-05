<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdvisorRequest;
use App\Http\Requests\UpdateAdvisorRequest;
use App\Repositories\AdvisorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AdvisorController extends AppBaseController
{
    /** @var  AdvisorRepository */
    private $advisorRepository;

    public function __construct(AdvisorRepository $advisorRepo)
    {
        $this->advisorRepository = $advisorRepo;
    }

    /**
     * Display a listing of the Advisor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $advisors = $this->advisorRepository->all();

        return view('advisors.index')
            ->with('advisors', $advisors);
    }

    /**
     * Show the form for creating a new Advisor.
     *
     * @return Response
     */
    public function create()
    {
        return view('advisors.create');
    }

    /**
     * Store a newly created Advisor in storage.
     *
     * @param CreateAdvisorRequest $request
     *
     * @return Response
     */
    public function store(CreateAdvisorRequest $request)
    {
        $input = $request->all();

        $advisor = $this->advisorRepository->create($input);

        Flash::success('Advisor saved successfully.');

        return redirect(route('advisors.index'));
    }

    /**
     * Display the specified Advisor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $advisor = $this->advisorRepository->find($id);

        if (empty($advisor)) {
            Flash::error('Advisor not found');

            return redirect(route('advisors.index'));
        }

        return view('advisors.show')->with('advisor', $advisor);
    }

    /**
     * Show the form for editing the specified Advisor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $advisor = $this->advisorRepository->find($id);

        if (empty($advisor)) {
            Flash::error('Advisor not found');

            return redirect(route('advisors.index'));
        }

        return view('advisors.edit')->with('advisor', $advisor);
    }

    /**
     * Update the specified Advisor in storage.
     *
     * @param int $id
     * @param UpdateAdvisorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdvisorRequest $request)
    {
        $advisor = $this->advisorRepository->find($id);

        if (empty($advisor)) {
            Flash::error('Advisor not found');

            return redirect(route('advisors.index'));
        }

        $advisor = $this->advisorRepository->update($request->all(), $id);

        Flash::success('Advisor updated successfully.');

        return redirect(route('advisors.index'));
    }

    /**
     * Remove the specified Advisor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $advisor = $this->advisorRepository->find($id);

        if (empty($advisor)) {
            Flash::error('Advisor not found');

            return redirect(route('advisors.index'));
        }

        $this->advisorRepository->delete($id);

        Flash::success('Advisor deleted successfully.');

        return redirect(route('advisors.index'));
    }
}
