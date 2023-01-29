<form class="form" action="{{ route('category.post') }}" method="POST" novalidate>
                        @csrf                        
                    <div>
	                   @if(Session::has('success'))
                             <div class="alert alert-success">
                                {{Session::get('success')}} 
                             </div>
                      @endif
                   </div>
                        <div class="form-body">

                         <div class="form-group">
                          <h5> Category Name <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control mb-1" >
                                </div>
                         </div>

                         <div class="form-group">
                          <h5> Description <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="description" class="form-control mb-1" >
                                </div>
                         </div>

     
                        <div class="form-actions center">
                            <a class="btn btn-warning mr-1" href="{{route('category.show')}}">
                                <i class="ft-x"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Save
                            </button>
                        </div>
                </form>
                