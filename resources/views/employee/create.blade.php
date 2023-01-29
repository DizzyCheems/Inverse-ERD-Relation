<form class="form" action="{{ route('employee.post') }}" method="POST" novalidate>
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
                          <h5> Firstname <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="firstname" class="form-control mb-1" >
                                </div>
                         </div>

                         <div class="form-group">
                          <h5> Lastname <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="lastname" class="form-control mb-1" >
                                </div>
                         </div>

                         
                         <div class="form-group">
                          <h5> Contact <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="contact" class="form-control mb-1" >
                                </div>
                         </div>

                         <div class="form-group">
                          <h5> Role <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="role" class="form-control mb-1" >
                                </div>
                         </div>
     
                        <div class="form-actions center">
                            <a class="btn btn-warning mr-1" href="{{route('item.show')}}">
                                <i class="ft-x"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Save
                            </button>
                        </div>
                </form>
                