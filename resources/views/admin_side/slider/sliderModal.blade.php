                <div class="modal fade" id="modal-animation-10">
                  <div class="modal-dialog">
                    <div class="modal-content animated bounceIn">
                      <div class="modal-header">
                        <h5 class="modal-title"><i class="fa fa-star"></i>Add Slider Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="post" enctype="multipart/form-data">  
                            @csrf 
                      <div class="modal-body">
                          <div class="form-group row">
                            <label for="input-5" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="input-5" value="{{ old('title') }}" name="company" required>
                            </div>
                            @error('title')
                              <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="form-group row">
                            <label for="input-5" class="col-sm-2 col-form-label">Text</label>
                            <div class="col-sm-10">
                              <input type="text" name="title_text" class="form-control @error('title_text') is-invalid @enderror" id="input-5" value="{{ old('title_text') }}" required>
                            </div>
                            @error('title_text')
                              <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="form-group row">
                            <label for="input-7" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                              <select class="form-control @error('status') is-invalid @enderror" id="input-7" name="status" required>
                                  <option>Status</option>
                                  <option value="publish">Publish</option>
                                  <option value="unpublish">Unpublish</option>
                              </select>
                            </div>
                            @error('status')
                              <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="form-group row">
                            <label for="input-8" class="col-sm-2 col-form-label">Select File</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" id="input-8" name="sliderImage" required>
                            </div>
                              @error('sliderImage')
                                <span class="invalid-feedback">{{$message}}</span>
                              @enderror
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>