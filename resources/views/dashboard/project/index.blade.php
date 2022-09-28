<x-app-layout>
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
                      Title
                    </th>
                    <th>
                      Category Job
                    </th>
                    <th>
                      Job Type
                    </th>
                    <th>
                      Image
                    </th>
                    <th>
                      Created At
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1">
                      <img src="../../images/faces/face1.jpg" alt="image"/>
                    </td>
                    <td>
                      Herman Beck
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $ 77.99
                    </td>
                    <td>
                      May 15, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="../../images/faces/face2.jpg" alt="image"/>
                    </td>
                    <td>
                      Messsy Adam
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $245.30
                    </td>
                    <td>
                      July 1, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="../../images/faces/face3.jpg" alt="image"/>
                    </td>
                    <td>
                      John Richards
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $138.00
                    </td>
                    <td>
                      Apr 12, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="../../images/faces/face4.jpg" alt="image"/>
                    </td>
                    <td>
                      Peter Meggik
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $ 77.99
                    </td>
                    <td>
                      May 15, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="../../images/faces/face5.jpg" alt="image"/>
                    </td>
                    <td>
                      Edward
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $ 160.25
                    </td>
                    <td>
                      May 03, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="../../images/faces/face6.jpg" alt="image"/>
                    </td>
                    <td>
                      John Doe
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $ 123.21
                    </td>
                    <td>
                      April 05, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="../../images/faces/face7.jpg" alt="image"/>
                    </td>
                    <td>
                      Henry Tom
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $ 150.00
                    </td>
                    <td>
                      June 16, 2015
                    </td>
                  </tr>
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
          
          <form action="{{route('project.store')}}" method="POST">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputName1">Title</label>
                  <input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Category Job</label>
                  <select name="category_job" class="form-control" id="exampleSelectGender">
                    <option value="Full-time">Full-time</option>
                    <option value="Intern">Intern</option>
                    <option value="Freelance">Freelance</option>
                  </select>
                </div>   
                <div class="form-group">
                  <label for="exampleSelectGender">Job Type</label>
                  <select name="job_type" class="form-control" id="exampleSelectGender">
                    <option value="Back End">Back End</option>
                    <option value="Front End">Front End</option>
                    <option value="Full Stack">Full Stack</option>
                  </select>
                </div>    
                <div class="form-group">
                  <label>Image</label>
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

    <script>
      $(".btn-create").on("click", function()
      {
          $("#create-modal").modal('show');
      });

      CKEDITOR.replace('exampleTextarea1')
    </script>
</x-app-layout>