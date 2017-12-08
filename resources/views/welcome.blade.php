@extends('layouts.app')

//this will add laravel’s default navbar to your page

@section('content')

    <div class="container">
        @if (Auth::check())
            <h2>Tasks List</h2>
            <a href="/task" class="btn btn-primary">Add new Task</a>
            <table class="table">
                <thead><tr>
                    <th>Tasks</th>
                    <th>Description</th>
                    <th>Last Update</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>@foreach($user->tasks as $task)
                    <tr>
                        <td>
                            {{$task->title}}
                        </td>
                        <td>
                            {{$task->description}}
                        </td>
                        <td>
                            {{$task->updated_at}}
                        </td>
                        <td>
                            @php
                            switch ($task->status){
                                case 'todo':
                                    echo 'A faire';
                                    break;
                                    case 'pending':
                                        echo 'En cours';
                                        break;
                                    case 'testing':
                                        echo 'A Tester';
                                        break;
                                    case 'production':
                                        echo 'A mettre en production';
                                        break;
                            }
                            @endphp
                        </td>
                        <td>

                            <form action="/task/{{$task->id}}">
                                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                                <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Delete</button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>


                @endforeach</tbody>
            </table>
        @else
            <h3>You need to log in. <a href="/login">Click here to login</a></h3>
        @endif

    </div>

@endsection