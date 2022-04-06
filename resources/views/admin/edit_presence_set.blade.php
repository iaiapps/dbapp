@extends('layout.master')
@section('page_judul', 'Edit Database Setting')
@section('content')
    <div id="page_info" class="card rounded p-3">
        <div class="py-2 my-2 clear-fix">
            <h3 class="float-start">Edit Presence Setting (Developer Only)</h3>
        </div>
        <form action="{{ route('admin.update.setPresence') }}" method="POST">
            @csrf
            @method('PUT')
            <table class="table">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input class="form-control" type="text" name="name" value="{{ $item->name }}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>Value</td>
                        <td><input class="form-control" type="text" name="value" value="{{ $item->value }}"></td>
                    </tr>
                </tbody>
            </table>
            <button type="SUBMIT" class="btn btn-success"> Update </button>
        </form>
    </div>
@endsection
