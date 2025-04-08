<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Inscripciones</title>
    <!-- Vinculamos Tailwind CSS -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.datatables.net/v/dt/dt-2.2.2/datatables.min.css" rel="stylesheet" integrity="sha384-2vMryTPZxTZDZ3GnMBDVQV8OtmoutdrfJxnDTg0bVam9mZhi7Zr3J1+lkVFRr71f" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/v/dt/dt-2.2.2/datatables.min.js" integrity="sha384-2Ul6oqy3mEjM7dBJzKOck1Qb/mzlO+k/0BQv3D3C7u+Ri9+7OBINGa24AeOv5rgu" crossorigin="anonymous"></script>

</head>
<body class="bg-gray-100 font-sans antialiased">

<div class="container mx-auto px-4 py-6">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Lista de Inscripciones</h2>

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg p-4">
        <table id="InscriptionTable" class="min-w-full border divide-y divide-gray-200">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Estudiante</th>
                    <th class="px-4 py-2 text-left">Curso</th>
                    <th class="px-4 py-2 text-left">Fecha</th>
                    <th class="px-4 py-2 text-left">Calificación</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($inscripciones as $inscripcion)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $inscripcion->id_inscripcion }}</td>
                        <td class="px-4 py-2">{{ $inscripcion->estudiante->nombre }}</td>
                        <td class="px-4 py-2">{{ $inscripcion->curso->nombre }}</td>
                        <td class="px-4 py-2">{{ $inscripcion->fecha_inscripcion }}</td>
                        <td class="px-4 py-2">{{ $inscripcion->calificacion ?? '—' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- {{ $inscripciones -> links() }} -->
        <p class="text-sm text-gray-600 mt-4">Tiempo de ejecución: {{ $duracion }} segundos</p> 
    </div>
</div>

<script>
$(document).ready(function(){
    $("#InscriptionTable").DataTable({
        dom: 'bfrtip',
        columnDefs: [
            {
                targets: -1,
                orderable: false,
                searchable: false
            }
        ],
        language:{
            url: 'https://cdn.datatables.net/plug-ins/2.2.2/i18n/es-ES.json'
        }
    });
})
</script>

</body>
</html>