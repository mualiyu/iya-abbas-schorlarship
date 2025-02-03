@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Scholarship Applications</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Institution</th>
                                    <th>Course</th>
                                    <th>Level</th>
                                    <th>Local Government</th>
                                    <th>Ward</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($applications as $application)
                                <tr>
                                    <td>{{ $application->name }}</td>
                                    <td>{{ $application->institution }}</td>
                                    <td>{{ $application->course_of_study }}</td>
                                    <td>{{ $application->level }}</td>
                                    <td>{{ $application->local_government }}</td>
                                    <td>{{ $application->ward }}</td>
                                    <td>
                                        <a href="{{ route('admin.applications.show', $application->id) }}" class="btn btn-sm btn-info">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $applications->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
