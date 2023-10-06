<x-app-layout>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Edit a Class</h3>
        <form action="{{ route('classes.update') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="" name="name" required>
          </div>
          <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" id="" name="duration" required>
          </div>
          <div class="form-group">
            <label for="name">Description</label>
            <textarea type="text" class="form-control" id="" name="description" required></textarea>
          </div>
          <div class="form-group">
            <label for="body">Price</label>
            <input class="form-control" id="body" name="price" rows="3" required>
          </div>
          <div class="form-group">
            <label for="body">Rating</label>
            <input class="form-control" id="body" name="rating" rows="3" required>
          </div>
          <div class="form-label">
            <label for="body">Activated Muscles</label>
            <select class="form-select" multiple="multiple" name="activatedmuscles[]">
              <option value="f1">F1</option>
              <option value="f2">F2</option>
              <option value="f3">F3</option>
              <option value="f4">F4</option>
              <option value="f5">F5</option>
              <option value="f6">F6</option>
              <option value="f7">F7</option>
              <option value="f8">F8</option>
              <option value="f9">F9</option>
              <option value="f10">F10</option>
              <option value="f11">F11</option>
              <option value="f12">F12</option>
              <option value="f13">F13</option>
              <option value="f14">F14</option>
            </select>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Edit Class</button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
