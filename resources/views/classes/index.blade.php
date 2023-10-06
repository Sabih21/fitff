<x-app-layout>

  <div class="container mt-5">
    <table class="table table-bordered">
      <tr>
          {{-- <th>No</th> --}}
          <th>Name</th>
          <th>Duration</th>
          <th>Description</th>
          <th>Price</th>
          <th>Rating</th>
          <th>Activated Muscles</th>
          <th width="280px">Action</th>
      </tr>
      @foreach ($classes as $classess)
      <tr>
          {{-- <td>{{ ++$i }}</td> --}}
          <td>{{ $classess->name }}</td>
          <td>{{ $classess->duration }}</td>
          <td>{{ $classess->description }}</td>
          <td>{{ $classess->price }}</td>
          <td>{{ $classess->rating }}</td>
          <td>{{ $classess->activatemuscles }}</td>



          <td>
              <form action="{{ route('classes.destroy',$classess->id) }}" method="POST">
 
                  {{-- <a class="btn btn-info" href="{{ route('workouts.show',$workout->id) }}">Show</a> --}}
  
                  <a class="btn btn-primary" href="{{ route('classes.edit',$classess->id) }}">Edit</a>
 
                  @csrf
                  @method('DELETE')
    
                  <button type="submit" class="btn btn-danger bg-danger">Delete</button>
              </form>
          </td>
      </tr>
      @endforeach
  </table>
  </div>


</x-app-layout>
