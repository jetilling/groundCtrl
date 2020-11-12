@extends('layouts.app')

@section('content')
<section class="hero is-fullheight-with-navbar is-medium is-light" style="padding-top: 50px;">
    <div class="columns is-centered">
        <h2 class="title">Notes</h2>
    </div>
    <div class="container is-fluid" style="padding-top: 30px;">
        
      <div class="columns">
        <div class="column is-one-quarter note-list">
          <!-- card loop -->
          <div class="box">
                <article class="media v-center">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>Note title</strong>
                            </p>
                        </div>
                    </div>
                    <div class="media-right display-flex">
                      <span class="icon">
                        <i class="far fa-edit"></i>
                      </span>
                      <form method="POST" action="/home/notes">
                        @csrf
                        @method("PATCH")
                        <input type="hidden" name="completed" value="true" />
                        <button class="icon-button" type="submit">
                          <span class="icon">
                            <i class="far fa-lg fa-trash-alt"></i>
                          </span>
                        </button>
                      </form>
                    </div>
                </article>
            </div>
            <div class="box">
                <article class="media v-center">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>Note title</strong>
                            </p>
                        </div>
                    </div>
                    <div class="media-right display-flex">
                      <span class="icon">
                        <i class="far fa-edit"></i>
                      </span>
                      <form method="POST" action="/home/notes">
                        @csrf
                        @method("PATCH")
                        <input type="hidden" name="completed" value="true" />
                        <button class="icon-button" type="submit"><span class="icon">
                          <i class="far fa-lg fa-trash-alt"></i>
                        </span></button>
                      </form>
                    </div>
                </article>
            </div>
            <div class="box">
                <article class="media v-center">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>Note title</strong>
                            </p>
                        </div>
                    </div>
                    <div class="media-right display-flex">
                      <span class="icon">
                        <i class="far fa-edit"></i>
                      </span>
                      <form method="POST" action="/home/notes">
                        @csrf
                        @method("PATCH")
                        <input type="hidden" name="completed" value="true" />
                        <button class="icon-button" type="submit"><span class="icon">
                          <i class="far fa-lg fa-trash-alt"></i>
                        </span></button>
                      </form>
                    </div>
                </article>
            </div>
            <div class="box">
                <article class="media v-center">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>Note title</strong>
                            </p>
                        </div>
                    </div>
                    <div class="media-right display-flex">
                      <span class="icon">
                        <i class="far fa-edit"></i>
                      </span>
                      <form method="POST" action="/home/notes">
                        @csrf
                        @method("PATCH")
                        <input type="hidden" name="completed" value="true" />
                        <button class="icon-button" type="submit"><span class="icon">
                          <i class="far fa-lg fa-trash-alt"></i>
                        </span></button>
                      </form>
                    </div>
                </article>
            </div>
          <!-- card loop end -->
        </div>
  
      </div>
    </div>
</section>
@endsection