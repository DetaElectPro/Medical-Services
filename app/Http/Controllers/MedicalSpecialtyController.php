<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicalSpecialtyRequest;
use App\Http\Requests\UpdateMedicalSpecialtyRequest;
use App\Models\MedicalField;
use App\Models\MedicalSpecialty;
use App\Repositories\MedicalSpecialtyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MedicalSpecialtyController extends AppBaseController
{
    /** @var  MedicalSpecialtyRepository */
    private $medicalSpecialtyRepository;

    public function __construct(MedicalSpecialtyRepository $medicalSpecialtyRepo)
    {
        $this->medicalSpecialtyRepository = $medicalSpecialtyRepo;
    }

    /**
     * Display a listing of the MedicalSpecialty.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index()
    {
        $medicalSpecialties =MedicalSpecialty::with('medical')->paginate();

        return view('medical_specialties.index')
            ->with('medicalSpecialties', $medicalSpecialties);
    }

    /**
     * Show the form for creating a new MedicalSpecialty.
     *
     * @return Response
     */
    public function create()
    {
        $field = MedicalField::all(['name', 'id']);
        return view('medical_specialties.create', compact('field'));
    }

    /**
     * Store a newly created MedicalSpecialty in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $medicalSpecialty = $this->medicalSpecialtyRepository->create($input);

        Flash::success('Medical Specialty saved successfully.');

        return redirect(route('medicalSpecialties.index'));
    }

    /**
     * Display the specified MedicalSpecialty.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medicalSpecialty = $this->medicalSpecialtyRepository->find($id);

        if (empty($medicalSpecialty)) {
            Flash::error('Medical Specialty not found');

            return redirect(route('medicalSpecialties.index'));
        }

        return view('medical_specialties.show')->with('medicalSpecialty', $medicalSpecialty);
    }

    /**
     * Show the form for editing the specified MedicalSpecialty.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medicalSpecialty = $this->medicalSpecialtyRepository->find($id);

        if (empty($medicalSpecialty)) {
            Flash::error('Medical Specialty not found');

            return redirect(route('medicalSpecialties.index'));
        }
        $field = MedicalField::all(['name', 'id']);

        return view('medical_specialties.edit', compact('field'))->with('medicalSpecialty', $medicalSpecialty);
    }

    /**
     * Update the specified MedicalSpecialty in storage.
     *
     * @param int $id
     * @param UpdateMedicalSpecialtyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMedicalSpecialtyRequest $request)
    {
        $medicalSpecialty = $this->medicalSpecialtyRepository->find($id);

        if (empty($medicalSpecialty)) {
            Flash::error('Medical Specialty not found');

            return redirect(route('medicalSpecialties.index'));
        }

        $medicalSpecialty = $this->medicalSpecialtyRepository->update($request->all(), $id);

        Flash::success('Medical Specialty updated successfully.');

        return redirect(route('medicalSpecialties.index'));
    }

    /**
     * Remove the specified MedicalSpecialty from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $medicalSpecialty = $this->medicalSpecialtyRepository->find($id);

        if (empty($medicalSpecialty)) {
            Flash::error('Medical Specialty not found');

            return redirect(route('medicalSpecialties.index'));
        }

        $this->medicalSpecialtyRepository->delete($id);

        Flash::success('Medical Specialty deleted successfully.');

        return redirect(route('medicalSpecialties.index'));
    }
}
