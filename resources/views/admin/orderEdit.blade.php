@extends('layouts.masterAdmin')
@section('container')

<div class="area">  
        <h2>Orders</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="defaultcontainer">
        <div class="tableprofile">
            <div class="row">
                <form action="{{ route('admin.order.update', $order->id) }}" method="post" autocomplete="off">
                    @csrf
                    @method('put')

                        <div class="form-group">
                                <div class="form-label-group2">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ $order->address }}" required>
                                </div>
                            </div>
                    
                        <div class="form-group">
								<div class="form-label-grou2">
									<label for="status">Status</label>
									<select name="status">
											<option value="Pending" @if($order->status == 'Pending') selected  @endif>  Pending</option>
											<option value="Canceled" @if($order->status == 'Canceled') selected  @endif>Cancel</option>
											<option value="Delivered" @if($order->status == 'Delivered') selected  @endif>Delivered</option>
									</select>
								</div>
							</div>
                <button class="button" type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
   </div>
</div>



@endsection
