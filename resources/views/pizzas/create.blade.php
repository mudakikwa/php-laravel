
       @extends('layout.layout')
       @section('content')
            <form action="/pizzas" method="POST">
                @csrf
                <h1>Create new pizza</h1>
                <input type="text" name="name">
                <input type="text" name="type">
                <input type="text" name="base">
                <button type="submit">Submit</button>
            </form>
        @endsection
