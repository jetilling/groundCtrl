@extends('layouts.app')

@section('content')
<section class="hero is-fullheight-with-navbar is-medium is-light" style="padding-top: 50px;">
    <div class="columns is-centered">
        <h2 class="title">Tasks</h2>
    </div>
    <div class="container is-fluid" style="padding-top: 30px;">
        <form method="POST" action="/home/tasks">
          @csrf
          <div class="columns is-centered">
            <div class="column is-one-quarter">
              <input class="input" name="name" />
            </div>
            <div class="column is-one-fifth">
              <button class="button" type="submit">Add Task</button>
            </div>
          </div>
        </form>
      <div class="columns is-multiline" style="padding-top: 30px;">
        <!-- For loop here -->
        @foreach ($uncompletedTasks as $task)
        <div class="column is-one-quarter">
            <div class="box">
                <article class="media v-center">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>{{ $task->name }}</strong>
                            </p>
                        </div>
                    </div>
                    <div class="media-right">
                      <form method="POST" action="/home/tasks/{{ $task->id }}">
                        @csrf
                        @method("PATCH")
                        <input type="hidden" name="completed" value="true" />
                        <button class="button" type="submit">Complete</button>
                      </form>
                    </div>
                </article>
            </div>
        </div>
        <!-- end loop -->
        @endforeach
      </div>
    </div>
</section>
@endsection