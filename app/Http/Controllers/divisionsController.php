<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedivisionsRequest;
use App\Http\Requests\UpdatedivisionsRequest;
use App\Repositories\divisionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class divisionsController extends AppBaseController
{
    /** @var  divisionsRepository */
    private $divisionsRepository;

    public function __construct(divisionsRepository $divisionsRepo)
    {
        $this->divisionsRepository = $divisionsRepo;
    }

    /**
     * Display a listing of the divisions.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $divisions = $this->divisionsRepository->all();

        return view('divisions.index')
            ->with('divisions', $divisions);
    }

    /**
     * Show the form for creating a new divisions.
     *
     * @return Response
     */
    public function create()
    {
        return view('divisions.create');
    }

    /**
     * Store a newly created divisions in storage.
     *
     * @param CreatedivisionsRequest $request
     *
     * @return Response
     */
    public function store(CreatedivisionsRequest $request)
    {
        $input = $request->all();

        $divisions = $this->divisionsRepository->create($input);

        Flash::success('Divisions saved successfully.');

        return redirect(route('divisions.index'));
    }

    /**
     * Display the specified divisions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $divisions = $this->divisionsRepository->find($id);

        if (empty($divisions)) {
            Flash::error('Divisions not found');

            return redirect(route('divisions.index'));
        }

        return view('divisions.show')->with('divisions', $divisions);
    }

    /**
     * Show the form for editing the specified divisions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $divisions = $this->divisionsRepository->find($id);

        if (empty($divisions)) {
            Flash::error('Divisions not found');

            return redirect(route('divisions.index'));
        }

        return view('divisions.edit')->with('divisions', $divisions);
    }

    /**
     * Update the specified divisions in storage.
     *
     * @param int $id
     * @param UpdatedivisionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedivisionsRequest $request)
    {
        $divisions = $this->divisionsRepository->find($id);

        if (empty($divisions)) {
            Flash::error('Divisions not found');

            return redirect(route('divisions.index'));
        }

        $divisions = $this->divisionsRepository->update($request->all(), $id);

        Flash::success('Divisions updated successfully.');

        return redirect(route('divisions.index'));
    }

    /**
     * Remove the specified divisions from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $divisions = $this->divisionsRepository->find($id);

        if (empty($divisions)) {
            Flash::error('Divisions not found');

            return redirect(route('divisions.index'));
        }

        $this->divisionsRepository->delete($id);

        Flash::success('Divisions deleted successfully.');

        return redirect(route('divisions.index'));
    }
}
