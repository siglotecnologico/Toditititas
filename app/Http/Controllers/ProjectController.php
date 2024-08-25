<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function show($id)
{
    // Leer el archivo JSON
    $json = Storage::disk('local')->get('projects.json');
    $projectsArray = json_decode($json, true);

    // Verifica si se decodificó correctamente
    if (json_last_error() !== JSON_ERROR_NONE) {
        abort(500, 'Error decoding JSON: ' . json_last_error_msg());
    }

    // Asegúrate de acceder al array correcto
    $projects = $projectsArray['projects'];

    // Buscar el proyecto por ID
    $project = collect($projects)->firstWhere('id', (int)$id);

    // Verificar si el proyecto existe
    if (!$project) {
        abort(404, 'Project not found');
    }

    // Pasar los datos a la vista
    return view('proyectosdetalle', compact('project'));
}



}
