<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelawyersRequest;
use App\Http\Requests\UpdatelawyersRequest;
use App\Repositories\lawyersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class lawyersController extends AppBaseController
{
    /** @var  lawyersRepository */
    private $lawyersRepository;

    public function __construct(lawyersRepository $lawyersRepo)
    {
        $this->lawyersRepository = $lawyersRepo;
    }

    /**
     * Display a listing of the lawyers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $lawyers = $this->lawyersRepository->all();

        return view('lawyers.index')
            ->with('lawyers', $lawyers);
    }

    /**
     * Show the form for creating a new lawyers.
     *
     * @return Response
     */
    public function create()
    {
        return view('lawyers.create');
    }

    /**
     * Store a newly created lawyers in storage.
     *
     * @param CreatelawyersRequest $request
     *
     * @return Response
     */
    public function store(CreatelawyersRequest $request)
    {
        $input = $request->all();

        $lawyers = $this->lawyersRepository->create($input);

        Flash::success('Lawyers saved successfully.');

        return redirect(route('lawyers.index'));
    }

    /**
     * Display the specified lawyers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lawyers = $this->lawyersRepository->find($id);

        if (empty($lawyers)) {
            Flash::error('Lawyers not found');

            return redirect(route('lawyers.index'));
        }

        return view('lawyers.show')->with('lawyers', $lawyers);
    }

    /**
     * Show the form for editing the specified lawyers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lawyers = $this->lawyersRepository->find($id);

        if (empty($lawyers)) {
            Flash::error('Lawyers not found');

            return redirect(route('lawyers.index'));
        }

        return view('lawyers.edit')->with('lawyers', $lawyers);
    }

    /**
     * Update the specified lawyers in storage.
     *
     * @param int $id
     * @param UpdatelawyersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelawyersRequest $request)
    {
        $lawyers = $this->lawyersRepository->find($id);

        if (empty($lawyers)) {
            Flash::error('Lawyers not found');

            return redirect(route('lawyers.index'));
        }

        $lawyers = $this->lawyersRepository->update($request->all(), $id);

        Flash::success('Lawyers updated successfully.');

        return redirect(route('lawyers.index'));
    }

    /**
     * Remove the specified lawyers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lawyers = $this->lawyersRepository->find($id);

        if (empty($lawyers)) {
            Flash::error('Lawyers not found');

            return redirect(route('lawyers.index'));
        }

        $this->lawyersRepository->delete($id);

        Flash::success('Lawyers deleted successfully.');

        return redirect(route('lawyers.index'));
    }
}
