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
                        <button data-link="{{route('project.update',$project->id)}}" data-id="{{$project->id}}" type="submit" class="btn btn-warning btn-edit mr-2">
                          <i class="typcn typcn-edit menu-icon"></i>
                          Edit
                        </button>
                        <button data-link="{{route('project.destroy',$project->id)}}" type="submit" class="btn btn-danger btn-delete mr-2">
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
          
          <form method="POST" enctype="multipart/form-data" id="form-edit">
              @method('PUT')
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label>Title</label>
                  <input name="title" type="text" class="form-control" id="title-edit" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="category-edit">Category Job <span class="text-danger">*</span></label>
                  <select name="category_job" class="form-control" id="category-edit" required>
                    <option value="Full-time">Full-time</option>
                    <option value="Intern">Intern</option>
                    <option value="Freelance">Freelance</option>
                  </select>
                </div>   
                <div class="form-group">
                  <label for="job-edit">Job Type <span class="text-danger">*</span></label>
                  <select name="job_type" class="form-control" id="job-edit" required>
                    <option value="Back End">Back End</option>
                    <option value="Front End">Front End</option>
                    <option value="Full Stack">Full Stack</option>
                  </select>
                </div>    
                <div class="form-group">
                  <label>Image</label>
                  <br>
                  <img width="350" alt="" class="mb-2" id="img-edit">
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
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="delete-modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title font-weight-bold">Delete Project</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form method="POST" id="form-delete">
              @csrf
              @method('DELETE')
              <div class="modal-body">
                  <p>This action will delete the data and the deleted data cannot be recovered, are you sure you want to continue?</p>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Yes, sure</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
          var id = $(this).data('id');
          var link = $(this).data('link');
          $.ajax({
              url: "{{route('project.get-detail')}}",
              data: {
                id : id
              },
              type: 'GET',
              success: function(res) {
                console.log(res)
                $("#title-edit").val(res.projects.title);
                $("#category-edit").val(res.projects.category_job).change();
                $("#job-edit").val(res.projects.job_type).change();
                $("#img-edit").attr("src", res.projects.image)
                $("#form-edit").attr("action", link)
                CKEDITOR.instances['exampleTextarea2'].setData(res.projects.description);
              }
          });
          $("#edit-modal").modal('show');
      });

      $(".btn-delete").on("click", function()
      {
          var link = $(this).data('link');
          
          $("#form-delete").attr("action", link)
          $("#delete-modal").modal('show');
      });

      CKEDITOR.replace('exampleTextarea1')
      CKEDITOR.replace('exampleTextarea2')
    </script>
</x-app-layout>