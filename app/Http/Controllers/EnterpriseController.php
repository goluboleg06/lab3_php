<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    // Показати всі підприємства
    public function index()
    {
        $enterprises = Enterprise::all();
        return view('enterprises.index', compact('enterprises'));
    }

    // Показати форму для створення нового підприємства
    public function create()
    {
        return view('enterprises.create');
    }

    // Зберегти нове підприємство
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'title' => 'required',
            'employees' => 'required|integer',
            'industry' => 'required',
            'address' => 'required',
        ]);

        Enterprise::create($request->all());
        return redirect()->route('enterprises.index')->with('success', 'Підприємство додано успішно.');
    }

    // Показати конкретне підприємство
    public function show(Enterprise $enterprise)
    {
        return view('enterprises.show', compact('enterprise'));
    }

    // Показати форму для редагування підприємства
    public function edit(Enterprise $enterprise)
    {
        return view('enterprises.edit', compact('enterprise'));
    }

    // Оновити підприємство
    public function update(Request $request, Enterprise $enterprise)
    {
        $request->validate([
            'code' => 'required',
            'title' => 'required',
            'employees' => 'required|integer',
            'industry' => 'required',
            'address' => 'required',
        ]);

        $enterprise->update($request->all());
        return redirect()->route('enterprises.index')->with('success', 'Підприємство оновлено успішно.');
    }

    // Видалити підприємство
    public function destroy(Enterprise $enterprise)
    {
        $enterprise->delete();
        return redirect()->route('enterprises.index')->with('success', 'Підприємство видалено успішно.');
    }
}
