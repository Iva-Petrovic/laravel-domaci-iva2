<?php

namespace App\Http\Controllers;

use App\Http\Resources\IspitResource;
use App\Models\Ispit;
use Illuminate\Http\Request;


class IspitController extends Controller
{
    public function getAllIspits()
    {
        $data = Ispit::join('students', 'students.id', '=', 'ispits.student_id')
            ->get(['ispits.predmet_id', 'ispits.student_id', 'ispits.Rezultat', 'students.Ime', 'students.Prezime', 'students.Broj indeksa']);

        return $data;
    }

    public function addIspit()
    {
        request()->validate([
            'predmet_id' => 'required',
            'student_id' => 'required',
            'Rezultat' => 'required'
        ]);
        return Ispit::create([
            'predmet_id' => intval(request('predmet_id')),
            'student_id' => intval(request('student_id')),
            'Rezultat' => request('Rezultat')
        ]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ispit $ispit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ispit $ispit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ispit $ispit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ispit $ispit)
    {
        //
    }
}