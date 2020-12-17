@extends('adminmaster')
@section('title', 'Dashboard | DU-CMS')
@section('mainContent')
      <!--Start Dashboard Content-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Slider Lists</h4>
     </div>
     <div class="col-sm-3">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light m-1 float-sm-right" data-toggle="modal" data-target="#modal-animation-10"> <i class="fa fa-plus"></i> <span>Add Slider</span> </button>
     </div>
     </div>
      @if(Session::has('success') || Session::has('alert'))
            <div class="alert {{Session::has('success') ? 'alert-success' : 'alert-danger'}} alert-dismissible show alert-round" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <div class="alert-icon">
           <i class="icon-check"></i>
            </div>
            <div class="alert-message">
              {!! session('success').session('alert') !!}
            </div>
           </div>
      @endif
      @if(Session::has('error') || Session::has('alert'))
            <div class="alert {{Session::has('error') ? 'alert-info' : 'alert-danger'}} alert-dismissible show alert-round" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <div class="alert-icon">
           <i class="icon-check"></i>
            </div>
            <div class="alert-message">
              {!! session('error').session('alert') !!}
            </div>
           </div>
      @endif
      @include('admin_side.slider.sliderModal')
     <hr>
      <div class="row mt-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
        <div class="table-responsive">
                <table class="table">
                  <thead class="thead-primary">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Added By</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($getSlider as $sData)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td> <img src="{{url('Storage/app/'.$sData->image)}}" style="height: auto;width: 180%;" data-toggle="modal" data-target="#modal-animation-img{{$sData->id}}"></td>
                        <td>{{ \Illuminate\Support\Str::limit($sData->title, 15, $end='...') }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($sData->text, 25, $end='...') }}</td>
                        <td>{{$sData->createdBy}}</td> 
                        <td>{{date('d-m-Y', strtotime($sData->created_at))}}</td>
                       <td class="text-center">
                        @if($sData->publicity == '0')
                        <form method="post" action="">
                          @csrf
                          <input type="hidden" name="sId" value="{{$sData->id}}">
<button type="button" class="btn btn-sm btn-outline-primary waves-effect waves-light"> <i class="fa fa-eye-slash"></i> </button>
                        </form>
                        @else
                        <form method="post" action="">
                          @csrf
                          <input type="hidden" name="sId" value="{{$sData->id}}">
<button type="button" class="btn btn-sm btn-outline-primary waves-effect waves-light"> <i class="fa fa-eye"></i> </button>
                        </form> 
                        @endif 
                       </td>
                 <td>
                    <div class="btn-group m-1">
                       <button type="button" class="btn btn-sm btn-outline-primary waves-effect waves-light" data-toggle="modal" data-target="#modal-animation-11{{$sData->id}}"> <i class="fa fa-edit"></i> </button>
                        <form method="post" action="{{route('sliderRemove')}}">
                          @csrf
                          <input type="hidden" name="slider_Key" class="form-control" id="input-5" value="{{$sData->id}}">
                       <button type="submit" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return confirm('Are you sure to delete?')"> <i class="fa fa fa-trash-o"></i> </button>
                     </form>
                    </div>                
                 </td>
                 @include('admin_side.slider.editSlider')
                 @include('admin_side.slider.viewImage')
                    </tr>
                  @empty
                    <tr>
                      <td colspan="7">
                            <div class="alert alert-warning text-center" role="alert">
                              Oops !! No Data To show Now !!
                            </div>                   
                      </td>
                    </tr>
                  @endforelse
                  </tbody>
                </table>
             </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->


@push('scripts')
@if(Session::has('modalError'))
<script>
  $('#{{session("modalError")}}').modal('show');
</script>
@endif 
@endpush
@endsection