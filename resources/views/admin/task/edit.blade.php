@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="ml-5"><b>Edit Task<b></h4>
        </div>
        <div class="card-body">
            <form action="{{ route('tasks.update', $tasks->id) }}" method="POST" enctype="multipart/form-data" id="form">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <span>Company Name</span>
                        <input type="text" class="form-control mt-2" name="company_name"
                            value="{{ $tasks->company_name }}" id="companyName">
                        @error('company_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <span>Module</span>
                        <input type="text" class="form-control mt-2" name="module" id="module"
                            value="{{ $tasks->module }}">
                        @error('module')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <span>Task</span>
                        <textarea class="form-control mt-2" name="task" id="task" rows="5">{{ $tasks->task }}</textarea>
                        @error('task')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <div>
                            <span>Upload Image</span>
                            <input type="file" name="image" class="form-control mt-2" id="image" multiple>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="card-body bg-light">
                            @if ($tasks->image)
                                <img src="{{ asset('assets/uploads/' . $tasks->image) }}" class="images">
                            @endif
                        </div>
                        <div class="card-body mt-2 btn btn-light">
                            <div class="row">
                                <div class="form-group  mt-2 col-md-4">
                                    <label for="done">Done</label>
                                    <input type="checkbox" {{ $tasks->done == '1' ? 'checked' : '' }} name="done">
                                </div>
                                <div class="form-group  mt-2 col-md-4">
                                    <label for="published">Published</label>
                                    <input type="checkbox" {{ $tasks->published == '1' ? 'checked' : '' }}
                                        name="published">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2 col-md-4">
                        <span>Assigned To</span>
                        <input type="text" class="form-control mt-2" name="assigned_to" id="assigned_to"
                            placeholder="Assigned To" value="{{ $tasks->assigned_to }}">
                        @error('assigned_to')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group  mt-2 col-md-4">
                        <span>Progress</span>
                        <select class="form-select form-select-sm mt-2" name="progress"
                            aria-label=".form-select-lg example">
                            <option selected>{{ $tasks->progress }}</option>
                            <option value="Not Started">Not Started</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Complete">Complete</option>
                            <option value="On Hold">On Hold</option>
                            <option value="Overdue">Overdue</option>
                        </select>
                        @error('progress')
                            <span class="text-danger">{{ $mesage }}</span>
                        @enderror
                    </div>

                    <div class="form-group  mt-2 col-md-4">
                        <span>QA</span>
                        <input type="text" class="form-control mt-2" name="q_a" id="quality"
                            placeholder="Quality Analyst" value="{{ $tasks->q_a }}">
                        @error('q_a')
                            <span class="text-white">{{ $message }} </span>
                        @enderror   
                    </div>
                    <div class="form-group mt-2 col-md-3">
                        <span>Start Date</span>
                        <input type="date" class="form-control mt-2" name="start_date" id="startDate"
                            value="{{ $tasks->start_date }}">
                        @error('start_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-3">
                        <span>End Date</span>
                        <input type="date" class="form-control mt-2" name="end_date" id="EndDate"
                            value="{{ $tasks->end_date }}">
                        @error('end_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="{{ route('tasks.index') }}" id="cancel" name="cancel"
                        class="btn btn-danger col-md-1 offset-md-5">Cancel</a>
                    <button type="submit" class=" btn btn-primary col-md-1 offset-md-1">Submit</button>
                </div>
            </form>

        </div>
    </div>
@endsection
