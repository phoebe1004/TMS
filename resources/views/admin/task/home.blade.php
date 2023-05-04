@extends('layouts.admin')

@section('content')
    <div class="card-body">
        <table id="table" class="table table-primary table-bordered table-striped">

            <thead class="table">
                <tr>
                    <th>ID</th>
                    <th>Done</th>
                    <th>Published</th>
                    <th>Company Name</th>
                    <th>Module</th>
                    <th>Task</th>
                    <th>Image</th>
                    <th>Assigned To</th>
                    <th>Progress</th>
                    <th>QA</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($tasks as $task)
                    <tr class="task{{ $task->id }}">
                        <td>{{ $task->id }}</td>
                        <td>
                            <input type="checkbox" name="done" id="done"
                                @if ($task->done) checked @endif value={{ old('done', $task->done) }}>
                        </td>
                        <td>
                            <input type="checkbox" name="published" id="published"
                                @if ($task->published) checked @endif
                                value={{ old('published', $task->published) }}>
                        </td>
                        <td>{{ $task->company_name }}</td>
                        <td>{{ $task->module }}</td>

                        <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#example3Modal">
                                <span><i class="fa fa-eye fa-beat"></i></span>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="example3Modal" tabindex="-1" aria-labelledby="exampleModal3Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModal3Label">{{ $task->company_name }}
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-body">
                                                        {{ $task->task }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>

    </div>
    </td>
    <td>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="{{ asset('assets/uploads/' . $task->image) }}" class="image" alt="Image here" multiple>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Company Name: {{ $task->company_name }}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="offset-sm-2 mt-3">
                        <h5><b>Image:</b></h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('assets/uploads/' . $task->image) }}" class="image-new"
                                        alt="Image here" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        </div>
    </td>
    <td>{{ $task->assigned_to }}</td>
    <td>{{ $task->progress }}</td>
    <td>{{ $task->q_a }}</td>
    <td>{{ $task->start_date }}</td>
    <td>{{ $task->end_date }}</td>
    <td>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('tasks.edit', $task->id) }}">
                <button class="btn btn-primary"><i class="fa fa-pen-to-square fa-bounce"></i></button></a>

            <a href="#" onclick="return confirm('Delete {{ $task->name }}?');">
                <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type=submit class="btn btn-danger"><i class="fa fa-trash fa-beat"></i></button>
                </form>
            </a>
        </div>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>

    </div>
    </div>
    <script>
        function handleSubmit() {
            document.getElementById('form').submit();
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();


        });

        $(function() {

            $("[data-bs-target='#exampleModal']").click((e)=> {
                console.log(e.target.currentSrc)}
            );

        })
    </script>
    {{-- End Table --}}
@endsection
