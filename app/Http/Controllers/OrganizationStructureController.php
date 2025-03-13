<?php

namespace App\Http\Controllers;

use App\Models\CoreManagement;
use App\Models\Division;
use Illuminate\Http\Request;

class OrganizationStructureController extends Controller
{
    public function index() {
        $coreManagements = CoreManagement::all();

        $divisions = Division::with(["members", function ($query) {
            $query->where("position", "=", "Ketua");
        }])->get();

        return view('organization', compact('coreManagements', 'divisions'));
    }

    public function show($id)
    {
        $division = Division::with('members')->findOrFail($id);

        return view('organization_show', compact('division'));
    }
}
