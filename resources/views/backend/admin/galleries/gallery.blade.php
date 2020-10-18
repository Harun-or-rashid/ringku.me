@extends('backend.partial.app')
@section('title','Category')
@section('main_section')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="form-control-navbar badge badge-info">All Category</h5>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Category Name</th>
                            <th>Parent Category</th>
                            <th>Action</th>
                        </tr>

                            @foreach($categories as $data)
                            <tr>
                            <td>{{$data->category_name}}</td>
                            <td>{{$data->parent_id}}</td>
                                <td>
                                    <a href="{{route('category.edit',$data->id)}}">
                                        <i class="fa fa-edit text-warning">Edit</i>
                                    </a>
                                    <span>||</span>
                                    <a href="{{route('category.delete',$data->id)}}">
                                        <i class="fa fa-trash text-red">Delete</i>
                                    </a>
                                </td>
                            </tr>
                                @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>






    <script>


    </script>
@endsection
