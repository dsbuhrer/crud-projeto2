<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        // dd($cars->toArray());
        return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'price' => 'required|numeric|min:0',
        ];

        $messages = [
            'name.required' => 'O campo nome é obrigatório.',
            'model.required' => 'O campo modelo é obrigatório.',
            'brand.required' => 'O campo marca é obrigatório.',
            'year.required' => 'O campo ano é obrigatório.',
            'year.integer' => 'O campo ano deve ser um número inteiro.',
            'year.min' => 'O campo ano deve ser maior ou igual a 1900.',
            'year.max' => 'O campo ano não pode ser superior ao ano atual.',
            'price.required' => 'O campo preço é obrigatório.',
            'price.numeric' => 'O campo preço deve ser um número.',
            'price.min' => 'O campo preço não pode ser negativo.'
        ];

        $request->validate($rules, $messages);

        $input = $request->all();
        Car::create($input);

        return redirect('cars')->with('message', 'Carro adicionado!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::find($id);
        return view('car.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::find($id);

        return view('car.edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::find($id);
        $rules = [
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'price' => 'required|numeric|min:0',
        ];

        $messages = [
            'name.required' => 'O campo nome é obrigatório.',
            'model.required' => 'O campo modelo é obrigatório.',
            'brand.required' => 'O campo marca é obrigatório.',
            'year.required' => 'O campo ano é obrigatório.',
            'year.integer' => 'O campo ano deve ser um número inteiro.',
            'year.min' => 'O campo ano deve ser maior ou igual a 1900.',
            'year.max' => 'O campo ano não pode ser superior ao ano atual.',
            'price.required' => 'O campo preço é obrigatório.',
            'price.numeric' => 'O campo preço deve ser um número.',
            'price.min' => 'O campo preço não pode ser negativo.'
        ];

        $request->validate($rules, $messages);
        $input = $request->all();
        
        $car->update($input);
        return redirect('cars')->with('message', 'Carro '. $car ->name. ' atualizado!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::destroy($id);

        return redirect('cars')->with('message', 'Item de ID ' . $id . ' excluído com sucesso!');
    }
}
