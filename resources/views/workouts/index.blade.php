<x-app-layout>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel 10 CRUD Example from scratch - ItSolutionStuff.com</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('workouts.create') }}"> Create New </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Description</th>
        <th>Video Link</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($workouts as $workout)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $workout->name }}</td>
        <td>{{ $workout->description }}</td>
        <td>{{ $workout->video_url }}</td>

        <td>
            <form action="{{ route('workouts.destroy', $workout->id) }}" method="POST">

                {{-- <a class="btn btn-info" href="{{ route('workouts.show',$workout->id) }}">Show</a> --}}

                <a class="btn btn-primary" href="{{ route('workouts.edit', $workout->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-primary bg-dark">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $workouts->links() !!}
</x-app-layout>
