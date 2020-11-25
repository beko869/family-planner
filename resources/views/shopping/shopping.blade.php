@extends('layouts.app')

@section('title', 'Shopping List')

@section('content')
    <form action="/shopping-list" method="POST" class="form-horizontal">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Task</label>
            <div class="col-sm-6">
                <input type="text" name="description" id="description" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Shopping List Entry
                </button>
            </div>
        </div>
    </form>    

    @if (count($shoppingEntries) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Shopping List Entries
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Description</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($shoppingEntries as $shoppingEntry)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $shoppingEntry->description }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection