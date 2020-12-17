                <div class="modal fade" id="modal-animation-img{{$sData->id}}">
                  <div class="modal-dialog">
                    <div class="modal-content animated bounceIn">
                      <div class="modal-header">
                        <h5 class="modal-title"><i class="fa fa-star"></i>Slider Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <img src="{{url('Storage/app/'.$sData->image)}}" style="height: auto;width: 100%;">
                      </div>
                    </div>
                  </div>
                </div>