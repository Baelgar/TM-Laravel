@extends('layouts.app')

//this will add laravel’s default navbar to your page

@section('content')

    <div class="container">
        <h2>Add New Task</h2>

        <form method="POST" action="/task">

            <div class="form-group">
                <input type="text" name="title" placeholder="Insérez un titre" class="form-control" value=""></input>
            </div>

            <div class="form-group">
                <textarea name="description" class="form-control" placeholder="description de la tache"></textarea>
            </div>

            <div class="form-group">
                <select name="status">
                    <option value="todo">A faire</option>
                    <option value="pending">En cours</option>
                    <option value="testing">A tester</option>
                    <option value="production">A mettre en production</option>
                </select>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
            {{ csrf_field() }}
        </form>


    </div>

@endsection