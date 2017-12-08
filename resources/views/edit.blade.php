@extends('layouts.app')

//this will add laravel’s default navbar to your page

@section('content')

    <div class="container">
        <h1>Edit the Task</h1>

        <form method="POST" action="/task/{{ $task->id }}">

            <div class="form-group">
                <input type="text" name="title" placeholder="Insérez un titre" class="form-control" value="{{ $task->title }}"></input>
            </div>

            <div class="form-group">
                <textarea name="description" class="form-control" placeholder="description de la tache">{{ $task->description }}</textarea>
            </div>

            <div class="form-group">
                <select name="status">
                    <option value="todo" @php echo ($task->status = 'todo') ? 'selected' : '' @endphp>A faire</option>
                    <option value="pending" @php echo ($task->status = 'pending') ? 'selected' : '' @endphp>En cours</option>
                    <option value="testing" @php echo ($task->status = 'testing') ? 'selected' : '' @endphp>A tester</option>
                    <option value="production" @php echo ($task->status = 'production') ? 'selected' : '' @endphp>A mettre en production</option>
                </select>
            </div>


            <div class="form-group">
                <button type="submit" name="update" class="btn btn-primary">Update task</button>
            </div>
            {{ csrf_field() }}
        </form>



    </div>

@endsection