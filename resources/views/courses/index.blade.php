<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Course Catalog
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <style>
                    .table {
                        width: 100%;
                        margin-bottom: 1rem;
                        color: #212529;
                        border-collapse: collapse;
                    }
                    .table th,
                    .table td {
                        padding: 0.75rem;
                        vertical-align: top;
                        border-top: 1px solid #dee2e6;
                    }
                    .table thead th {
                        vertical-align: bottom;
                        border-bottom: 2px solid #dee2e6;
                        background-color: #f8f9fa;
                    }
                    .table-striped tbody tr:nth-of-type(odd) {
                        background-color: rgba(0, 0, 0, 0.03);
                    }
                    .table-hover tbody tr:hover {
                        background-color: rgba(0, 0, 0, 0.06);
                    }
                </style>

                @if($courses->isEmpty())
                    <p class="text-gray-600">No courses found.</p>
                @else
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Units</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $course->course_code }}</td>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->units }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
