@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="ml-5"><b>Add Task<b></h4>
        </div>
        <div class="card-body">
            <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data" id="form">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <span>Company Name</span>
                        <input type="text" class="form-control mt-2" name="company_name" id="companyName"
                            placeholder="Company Name">
                        @error('company_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <span>Module</span>
                        <input type="text" class="form-control mt-2" name="module" id="module" placeholder="module">
                        @error('module')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <span>Task</span>
                        <textarea class="form-control mt-2" name="task" id="task" rows="5" placeholder="Input task here"></textarea>
                        @error('task')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <div>
                            <span>Upload Image</span>
                            {{-- <label for="image" class="form-label">Upload Image</label> --}}
                            <input type="file" name="image" class="form-control mt-2" id="image" multiple>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="btn btn-light mt-3">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <span>Done</span>
                                    <input type="checkbox" name="done">
                                </div>
                                <div class="form-group col-md-4">
                                    <span>Published</span>
                                    <input type="checkbox" name="published">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group mt-2 col-md-4">
                        <span>Assigned To</span>
                        <input type="text" class="form-control mt-2" name="assigned_to" id="assigned_to"
                            placeholder="Assigned to">
                        @error('assigned_to')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group  mt-2 col-md-4">
                        <span>Progress</span>
                        <select class="form-select form-select-sm mt-2" name="progress"
                            aria-label=".form-select-lg example">
                            <option selected>--Select--</option>
                            <option value="Not Started">Not Started</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Complete">Complete</option>
                            <option value="On Hold">On Hold</option>
                            <option value="Overdue">Overdue</option>
                        </select>
                        @error('progress')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group  mt-2 col-md-4">
                        <span>QA</span>
                        <input type="text" class="form-control mt-2" name="q_a" id="quality"
                            placeholder="Quality Analyst">
                        @error('q_a')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-3">
                        <span>Start Date</span>
                        <input type="date" class="form-control mt-2" name="start_date" id="startDate">
                        @error('start_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-2 col-md-3">
                        <span>End Date</span>
                        <input type="date" class="form-control mt-2" name="end_date" id="EndDate">
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
