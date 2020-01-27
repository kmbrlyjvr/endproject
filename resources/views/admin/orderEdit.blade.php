@extends('layouts.masterAdmin')
@section('container')

       <div class="area">  
            <h2>Orders</h2>

<div class="defaultcontainer">
        <div class="tableprofile">
            <div class="row">
                <form action="{{ route('admin.updateOrder', $order->id) }}" method="post" autocomplete="off">
                    @csrf
                    @method('put')
                 <!--   <div class="form-group">
                            <div class="form-label-grou2">
                                <label for="trouser">Trouser</label>
                                <select name="trouser" id="trouser" value="">
                                        <option value="utility">Utility</option>
                                        <option value="slack">Slack</option>
                                        <option value="overall">Overall</option>
                                </select>
                            </div>
                        </div>-->

                        <div class="form-group">
                                <div class="form-label-group2">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="name" value="{{ $order->user->address }}" required>
                                </div>
                            </div>


					<div class="form-group">
                            <div class="form-label-group2">
                                <label>ZIP Code</label>
                                <input type="text" class="form-control" name="name" value="{{ $order->user->zip }}" required>
                            </div>
                        </div>

                    
                        <div class="form-group">
								<div class="form-label-grou2">
									<label for="status">Status</label>
									<select name="status" id="status" value="Pending">
											<option value="Pending">Pending</option>
											<option value="Canceled">Cancel</option>
											<option value="Delivered">Delivered</option>
									</select>
								</div>
							</div>
                <button class="button" type="submit" class="btn btn-primary">update</button>
                </form>
        </div>
    </div>
   </div>
</div>

</body>
</html>



@endsection
