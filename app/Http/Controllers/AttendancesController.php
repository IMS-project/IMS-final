<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAttendancesRequest;
use App\Http\Requests\UpdateAttendancesRequest;
use App\Repositories\AttendancesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AttendancesController extends AppBaseController
{
    /** @var  AttendancesRepository */
    private $attendancesRepository;

    public function __construct(AttendancesRepository $attendancesRepo)
    {
        $this->attendancesRepository = $attendancesRepo;
    }

    /**
     * Display a listing of the Attendances.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $attendances = $this->attendancesRepository->all();

        return view('attendances.index')
            ->with('attendances', $attendances);
    }

    /**
     * Show the form for creating a new Attendances.
     *
     * @return Response
     */
    public function create()
    {
        return view('attendances.create');
    }

    /**
     * Store a newly created Attendances in storage.
     *
     * @param CreateAttendancesRequest $request
     *
     * @return Response
     */
    public function store(CreateAttendancesRequest $request)
    {
        $input = $request->all();

        $attendances = $this->attendancesRepository->create($input);

        Flash::success('Attendances saved successfully.');

        return redirect(route('attendances.index'));
    }

    /**
     * Display the specified Attendances.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $attendances = $this->attendancesRepository->find($id);

        if (empty($attendances)) {
            Flash::error('Attendances not found');

            return redirect(route('attendances.index'));
        }

        return view('attendances.show')->with('attendances', $attendances);
    }

    /**
     * Show the form for editing the specified Attendances.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $attendances = $this->attendancesRepository->find($id);

        if (empty($attendances)) {
            Flash::error('Attendances not found');

            return redirect(route('attendances.index'));
        }

        return view('attendances.edit')->with('attendances', $attendances);
    }

    /**
     * Update the specified Attendances in storage.
     *
     * @param int $id
     * @param UpdateAttendancesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAttendancesRequest $request)
    {
        $attendances = $this->attendancesRepository->find($id);

        if (empty($attendances)) {
            Flash::error('Attendances not found');

            return redirect(route('attendances.index'));
        }

        $attendances = $this->attendancesRepository->update($request->all(), $id);

        Flash::success('Attendances updated successfully.');

        return redirect(route('attendances.index'));
    }

    /**
     * Remove the specified Attendances from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $attendances = $this->attendancesRepository->find($id);

        if (empty($attendances)) {
            Flash::error('Attendances not found');

            return redirect(route('attendances.index'));
        }

        $this->attendancesRepository->delete($id);

        Flash::success('Attendances deleted successfully.');

        return redirect(route('attendances.index'));
    }
}
