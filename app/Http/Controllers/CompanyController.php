<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
  public function all()
  {
    $companies = Company::orderBy('id', 'desc')->get();
    return response()->json([
      'data' => $companies,
      'draw' => 1,
      'recordsTotal' => count($companies),
      'recordsFiltered' => count($companies),
    ]);
  }
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('companies.index');
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $company = new Company();
    return view('companies.create', compact('company'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validateData = $request->validate([
      'name' => 'required|string|max:255',
      'address' => 'required|string|max:255',
      'phone' => 'required|string|max:255',
      'nit' => 'required|string|max:255',
    ]);
    $currentNit =  $validateData['nit'];
    //Check if exist a company with the same NIT
    $company = Company::where('nit', $currentNit)->first();
    if ($company) {
      return response()->json([
        'success' => false,
        'message' => 'Ya existe una empresa con el NIT ingresado',
      ], 409);
    }
    try {
      $company = Company::create($validateData);
    } catch (\Throwable $th) {
      return response()->json([
        'success' => false,
        'message' => $th->getMessage(),
      ], 500);
    }
    return response()->json([
      'success' => true,
      'message' => 'Empresa creada correctamente',
      'data' => $company,
    ], 200);
  }

  /**
   * Display the specified resource.
   */
  public function show(Company $company)
  {
    return view('companies.show', compact('company'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Company $company)
  {
    return view('companies.edit', compact('company'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Company $company)
  {
    $validateData = $request->validate([
      'name' => 'required|string|max:255',
      'address' => 'required|string|max:255',
      'phone' => 'required|string|max:255',
      'active' => 'required|boolean',
    ]);
    try {
      $company->update($validateData);
    } catch (\Throwable $th) {
      return response()->json([
        'success' => false,
        'message' => $th->getMessage(),
      ], 500);
    }
    return response()->json([
      'success' => true,
      'message' => 'Empresa actualizada correctamente',
    ], 200);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Company $company)
  {
    $isActive = $company->active;
    if($isActive) {
      return response()->json([
        'success' => false,
        'message' => 'La empresa no puede ser eliminada porque está activa',
      ], 409);
    }
    $company->delete();
    return response()->json([
      'success' => true,
      'message' => 'Empresa eliminada correctamente',
    ], 200);
  }
}
