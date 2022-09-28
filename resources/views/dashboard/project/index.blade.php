<x-app-layout>
    <style>
      .table td img {
        width: 56px;
        height: 36px;
        border-radius: 0%;
      }
      .nowrap {
        white-space:nowrap;
      }
    </style>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Projects</h4>
            <div class="row">
              <div class="col text-right">
                <button type="submit" class="btn btn-success btn-create mr-2">
                  <i class="typcn typcn-plus menu-icon"></i>
                  New Project
                </button>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      No
                    </th>
                    <th>
                      Title
                    </th>
                    <th class="nowrap">
                      Category Job
                    </th>
                    <th class="nowrap">
                      Job Type
                    </th>
                    <th>
                      Image
                    </th>
                    <th class="nowrap">
                      Created At
                    </th>
                    <th class="nowrap">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($projects as $project)
                    <tr>
                      <td class="" style="font-weight: bold;">
                        {{$no}}
                      </td>
                      <td>
                        {{$project->title}}
                      </td>
                      <td class="nowrap">
                        {{$project->category_job}}
                      </td>
                      <td class="nowrap">
                        {{$project->job_type}}
                      </td>
                      <td>
                        <a href="{{$project->image}}">
                          <img src="{{$project->image}}" width="200" alt="project image">
                        </a>
                      </td>
                      <td class="nowrap">
                        {{$project->created_at}}
                      </td>
                      <td class="nowrap">
                        <button type="submit" class="btn btn-warning btn-edit mr-2">
                          <i class="typcn typcn-edit menu-icon"></i>
                          Edit
                        </button>
                        <button type="submit" class="btn btn-danger btn-create mr-2">
                          <i class="typcn typcn-trash menu-icon"></i>
                          Delete
                        </button>
                      </td>
                    </tr>
                    @php
                      $no = $no+1;
                    @endphp
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="create-modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title font-weight-bold">Create Project</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputName1">Title</label>
                  <input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Category Job <span class="text-danger">*</span></label>
                  <select name="category_job" class="form-control" id="exampleSelectGender" required>
                    <option value="Full-time">Full-time</option>
                    <option value="Intern">Intern</option>
                    <option value="Freelance">Freelance</option>
                  </select>
                </div>   
                <div class="form-group">
                  <label for="exampleSelectGender">Job Type <span class="text-danger">*</span></label>
                  <select name="job_type" class="form-control" id="exampleSelectGender" required>
                    <option value="Back End">Back End</option>
                    <option value="Front End">Front End</option>
                    <option value="Full Stack">Full Stack</option>
                  </select>
                </div>    
                <div class="form-group">
                  <label>Image <span class="text-danger">*</span></label>
                  <input type="file" name="image" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"></textarea>
                </div>   
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Simpan</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
              </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="edit-modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title font-weight-bold">Edit Project</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputName1">Title</label>
                  <input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Category Job <span class="text-danger">*</span></label>
                  <select name="category_job" class="form-control" id="exampleSelectGender" required>
                    <option value="Full-time">Full-time</option>
                    <option value="Intern">Intern</option>
                    <option value="Freelance">Freelance</option>
                  </select>
                </div>   
                <div class="form-group">
                  <label for="exampleSelectGender">Job Type <span class="text-danger">*</span></label>
                  <select name="job_type" class="form-control" id="exampleSelectGender" required>
                    <option value="Back End">Back End</option>
                    <option value="Front End">Front End</option>
                    <option value="Full Stack">Full Stack</option>
                  </select>
                </div>    
                <div class="form-group">
                  <label>Image <span class="text-danger">*</span></label>
                  <input type="file" name="image" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" name="description" id="exampleTextarea2" rows="4"></textarea>
                </div>   
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Simpan</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
              </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      $(".btn-create").on("click", function()
      {
          $("#create-modal").modal('show');
      });

      $(".btn-edit").on("click", function()
      {
          $("#edit-modal").modal('show');
      });

      CKEDITOR.replace('exampleTextarea1')
      CKEDITOR.replace('exampleTextarea2')
    </script>
</x-app-layout>