@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default panel-shadow">
                <div class="panel-heading panel-custom-heading">
                    Comments :
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('comment') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label"></label>


                            <div class="md-form col-md-offset-1 col-md-10">
                                <textarea name="name" id="task-name" class="form-control"{{-- value="{{ old('task') }}"--}} placeholder="Leave Your Comment Here"></textarea>
                                {{--<label for="task-name" class=""></label>--}}
                            </div>

                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Comment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default panel-shadow">
                    <div class="panel-heading panel-custom-heading">
                        All Comments :
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table" id="comments-table">
                            <thead>
                                <th></th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text">

                                            <div class="uname">
                                                <span><i id="icon" class="fa fa-user" style="font-size: 19px; color: rgb(255, 255, 255); height: 35px; width: 35px; line-height: 33px; border-radius:29px ; text-align: center; background-color: rgb(2, 117, 216);"></i> </span>
                                                {{ $task->uname .':'}}</div>
                                            <div class="col-md-offset-1 comment-details">{{ $task->name }}</div>
                                            <div class="post-time col-md-offset-7">
                                                {{'Posted on : '.$task->created_at}}
                                            </div>
                                        </td>

                                        <!-- Task Delete Button -->
                                       {{-- <td>
                                            <form action="{{url('comment/' . $task->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>--}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <section id="rotating-card" class="col-md-offset-4 col-md-4">
        <!-- Live preview-->
        <div class="row">
            <div class="">

                <!--Rotating card-->
                <div class="card-wrapper">
                    <div id="card-1" class="card-rotating effect__click">

                        <!--Front Side-->
                        <div class="face front">

                            <!-- Image-->
                            <div class="card-up">
                                <img src="https://gust-production.s3.amazonaws.com/uploads/startup/panoramic_image/645112/facebook.jpg" class="img-fluid" alt="Image with a photo of clouds.">
                            </div>
                            <!--Avatar-->
                            <div class="avatar"><img src="{{url('/index.jpg')}}" class="rounded-circle img-responsive" alt="Sample avatar image.">
                            </div>
                            <!--Content-->
                            <div class="card-block">
                                <h4>Bragadeeswaran</h4>
                                <p>Web developer</p>
                                <!--Triggering button-->
                                <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"></i> Click here to rotate</a>
                                <div><a class="twitter-follow-button"
                                   href="https://twitter.com/praga_mahendra"
                                   data-size="large">
                                    Follow @PragadeeshMahendran</a>
                                </div>
                                <div class="row">
                                <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
                                <div id="SkypeButton_Call_pragadeeshmahendran_1" class="col-md-offset-2 col-md-3">
                                    <script type="text/javascript">
                                        Skype.ui({
                                            "name": "call",
                                            "element": "SkypeButton_Call_pragadeeshmahendran_1",
                                            "participants": ["pragadeeshmahendran"],
                                            "imageSize": 24
                                        });
                                    </script>
                                </div>
                                <!-- Place this tag in your head or just before your close body tag. -->
                                <script src="https://apis.google.com/js/platform.js" async defer></script>

                                <!-- Place this tag where you want the widget to render. -->
                                <div class="g-follow col-md-3" data-annotation="bubble" data-height="24" data-href="//plus.google.com/u/0/116744251126402211335" data-rel="author"></div>
                                </div>
                            </div>
                        </div>
                        <!--/.Front Side-->

                        <!--Back Side-->
                        <div class="face back">

                            <!--Content-->
                            <h4>About me</h4>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat?</p>
                            <hr>
                            <!--Social Icons-->
                            <ul class="inline-ul">
                                <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="icons-sm li-ic"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i> Click here to rotate back</a>

                        </div>
                        <!--/.Back Side-->

                    </div>
                </div>
                <!--/.Rotating card-->

            </div>
        </div>
        <!-- /.Live preview-->
    </section>

@endsection
