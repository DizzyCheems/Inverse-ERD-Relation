<form class="form" action="{{ route('item.post') }}" method="POST" novalidate>
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
                             <h5>Member Assigned/Person to Receive This Item<span class="required"></span></h5>
                                <div class="controls">   
                                    <select name="member_id" id="lang" class="form-control"  >
                                    @foreach($members as $members)   
                                      <option value="{{$members['id']}}">{{$members['name']}}</option>
                                    @endforeach 
                                    <option value="#"><a href="{{route('member.create')}}">Create New Member</a></option>
                                    </select>
                                </div>  
                         </div>
                <!---Implement that Contains Laravel Helper to query employee Role--->
                            <div class="form-group">
                             <h5>Item Name<span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control mb-1" required data-validation-required-message="• This field is required">
                                </div>
                         </div>
     
                        <div class="form-group">
                          <h5> Tailor Assigned <span class="required"></span></h5>
                                <div class="controls">
                                <select name="labor_tailor" id="lang" class="form-control"  >
                                    @foreach($employees as $employees)   
                                      <option value="{{$employees['firstname']}}">{{$employees['firstname']}},{{$employees['lastname']}},{{$employees['role']}},</option>
                                    @endforeach 
                                </select>
                                </div>
                         </div>

                         <div class="form-group">
                          <h5> Tailor Compensation <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="cost_tailor" class="form-control mb-1" >
                                </div>
                         </div>

                         <div class="form-group">
                          <h5> Cutter Assigned <span class="required"></span></h5>
                                <div class="controls">
                                <input type="text" name="labor_cutter" class="form-control mb-1" required data-validation-required-message="• This field is required">
                            </div>
                         </div>

                         <div class="form-group">
                          <h5> Cutter Compensation <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="cost_cutter" class="form-control mb-1" >
                                </div>
                         </div>

                         <div class="form-group">
                          <h5> Heatpress Assigned <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="labor_heatpress" class="form-control mb-1" >
                                </div>
                         </div>

                         <div class="form-group">
                          <h5> Heatpress Compensation <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="cost_heatpress" class="form-control mb-1" >
                                </div>
                         </div>

                         <div class="form-group">
                          <h5> Price <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="price" class="form-control mb-1" >
                                </div>
                         </div>

                         <div class="form-group">
                          <h5> Category <span class="required"></span></h5>
                                <div class="controls">
                                <select name="category" id="lang" class="form-control"  >
                                    @foreach($categories as $categories)   
                                      <option value="{{$categories['name']}}">{{$categories['name']}}</option>
                                    @endforeach 
                                    </select></div>
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