@extends('layouts.app')

@section('content')
<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Works Table</h2>
            </div>
            <div class="pull-right mb-2">
            @if(Auth::user()->role === 'admin')
                <a class="btn btn-success" href="{{ route('works.create') }}"> Create Works</a>
            @endif
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Title:</th>
            <th>Link:</th>
            <th>Image:</th>
            @if(Auth::user()->role === 'admin')
            <th width="450">Action</th>
            @endif
        </tr>
        @foreach ($works as $work)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $work->title }}</td>
            <td>{{ $work->link }}</td>
            <td> @if($work->image)
                        <img src="{{'storage/' . $work->image}}" alt="" style="width: 50px; height:50px;">
                        @else
                        <img src="assets/img/ils.jpg" alt="" style="width: 50px; height:50px;">
                        @endif</td>
            <td>
                <!-- <a class="btn btn-success" href="{{ route('works.create') }}"> Create</a> -->
                @if(Auth::user()->role === 'admin')
                <a class="btn btn-primary" href="{{ route('works.edit',$work->id) }}">Edit</a>
                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $work->id }}">Delete</button>
                @endif
                
                <div class="modal fade" id="deleteModal{{$work->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$work->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{$work->id}}">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete?
            </div>
            <div class="modal-footer">
                <!-- Cancel Button -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <!-- Delete Button -->
                <form id="deleteForm{{$work->id}}" action="{{ route('works.destroy', $work->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
            </td>
        </tr>
        @endforeach
    </table>
  
@endsection