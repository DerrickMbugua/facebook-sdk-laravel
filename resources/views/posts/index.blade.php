@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Posts</h2>
            </div>
            <div class="col">
                <a href="javascript:void(0)" class="btn btn-primary" style="float: right">Add Post</a>
            </div>
        </div>
        <table id="datatable" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Message</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
    @push('script')
        <script>
            $( document ).ready(function() {
                $(".datatable").DataTable();
            });
        </script>
    @endpush
@endsection
