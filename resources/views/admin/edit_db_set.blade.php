@extends('layout.master')
@section('page_judul', 'Edit Database Setting')
@section('content')
    <div id="page_info" class="card rounded p-3">
        <div class="py-2 my-2 clear-fix">
            <h3 class="float-start">Edit DB Setting (Developer Only)</h3>
        </div>
        <form action="#" method="POST">
            @csrf
            @method('PUT')
            <table class="table">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input class="form-control" type="text" name="name" value="{{ $item->name }}">
                        </td>
                    </tr>
                    <tr>
                        <td>Value</td>
                        <td><input class="form-control" type="text" name="value" value="{{ $item->value }}"></td>
                    </tr>
                    <tr>
                        <td>Info</td>
                        <td><input class="form-control" type="text" name="info" value="{{ $item->info }}"></td>
                    </tr>
                    <tr>
                        <td>Is active</td>
                        <td><input class="form-control" type="text" name="is_active" value="{{ $item->is_active }}"></td>
                    </tr>

                </tbody>
            </table>
            <a type="SUBMIT" class="btn btn-success"> Update </a>
        </form>
    </div>
@endsection
