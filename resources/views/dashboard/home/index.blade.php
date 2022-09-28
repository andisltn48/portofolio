<x-app-layout>
    <div class="row">
        <div class="col-lg-12 d-flex grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-between">
                <h4 class="card-title mb-3">Home Setting</h4>
              </div>
              <form class="forms-sample" action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{$heroContent->name}}" required name="name">
                </div>
                
                <div class="form-group">
                  <label>Background Hero</label>
                  <br>
                  <img src="{{$heroContent->image}}" alt="" class="mb-3 img-fluid">
                  <input type="file" name="image" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" required>
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>