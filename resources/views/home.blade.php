@extends('layouts.app')

@section('content')
<section class="hero is-fullheight-with-navbar is-medium is-light" style="padding-top: 50px;">
    <div class="columns is-centered">
        <h2 class="title"><span id="date"></span></h2>
    </div>
    <div class="container is-fluid" style="padding-top: 30px;">
        <div class="columns is-multiline">
            <div class="column is-one-quarter">
                <div class="box set-box-heights" style = "background-color: {{ $homeData->task->pendingTasks ? '#ff6666' : '#63cf89' }}">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h6 class="title is-6">
                                    <a class="box-title" href="/home/tasks">{{ $homeData->task->boxText }}</a>
                                </h6>
                                <form method="POST" action="/home/tasks/home">
                                    @csrf
                                    <div class="columns">
                                        <div class="column is-two-thirds">
                                            <input class="input is-small" type="text" name="name" />
                                        </div>
                                        <div class="column is-one-third">
                                            <button class="button is-small" type="submit">Add Task</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="box set-box-heights">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h6 class="title is-6">
                                    <a class="box-title" href="/home/notes">Notes</a>
                                </h6>
                                <div class="columns">
                                    <div class="column is-two-thirds">
                                        <input class="input is-small" type="text" />
                                    </div>
                                    <div class="column is-one-third">
                                        <button class="button is-small">Start Note</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="column is-half">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <div class="columns"> 
                                    <div class="column is-three-quarters">
                                        <h6 class="title is-6">
                                            <a class="box-title" href="/home/articles">Articles</a>
                                        </h6>
                                    </div>
                                    <div class="column is-one-quarter position-end">
                                        <button class="button is-small is-link">Add Article</button>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-two-thirds">
                                        <input class="input is-small" type="text" placeholder="Search Articles..." />
                                    </div>
                                    <div class="column is-one-third">
                                        <button class="button is-small">Search</button>
                                    </div>
                                </div>
                                <!-- Start article loop here -->
                                <div> 
                                    <hr>
                                    <div>
                                        <h6 class="title is-6"><a href="#">Nourish your imagination and you'll be free forever</a></h6>
                                        <p>Imagination enables us to leave the here and now, to explore the past, as well as alternative presents and the future, before coming back. Imagination is a loop by which we temporarily disengage from ongoing life.</p>
                                        <span class="tag">Psyche</span>
                                        <span class="tag">Philosophy</span>
                                        <span class="tag">Life</span>
                                        <span class="tag">Agency</span>
                                    
                                    </div>
                                </div>
                                <div> 
                                    <hr>
                                    <div>
                                        <h6 class="title is-6"><a href="#">Nourish your imagination and you'll be free forever</a></h6>
                                        <p>Imagination enables us to leave the here and now, to explore the past, as well as alternative presents and the future, before coming back. Imagination is a loop by which we temporarily disengage from ongoing life.</p>
                                        <span class="tag">Psyche</span>
                                        <span class="tag">Philosophy</span>
                                        <span class="tag">Life</span>
                                        <span class="tag">Agency</span>
                                    
                                    </div>
                                </div>
                                <div> 
                                    <hr>
                                    <div>
                                        <h6 class="title is-6"><a href="#">Nourish your imagination and you'll be free forever</a></h6>
                                        <p>Imagination enables us to leave the here and now, to explore the past, as well as alternative presents and the future, before coming back. Imagination is a loop by which we temporarily disengage from ongoing life.</p>
                                        <span class="tag">Psyche</span>
                                        <span class="tag">Philosophy</span>
                                        <span class="tag">Life</span>
                                        <span class="tag">Agency</span>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div> 
            
            <div class="column is-one-quarter">
                <div class="box set-box-heights">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h6 class="title is-6">Calendar</h6>
                                
                            </div>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
