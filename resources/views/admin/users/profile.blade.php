@extends('layouts.manage')

@section('title', 'User Profile');

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="{{ Auth::user()->name }}">
                        </div>

                        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                        <p class="text-muted text-center">Software Engineer</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                </div>

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <div class="card-body">
                        <strong><i class="fa fa-book mr-1"></i> Education</strong>

                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>
                        <p class="text-muted">Pretoria, South Africa</p>

                        <hr>

                        <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>
                        <p class="text-muted">
                            <span class="tag tag-danger">UI Design</span>
                            <span class="tag tag-success">Coding</span>
                            <span class="tag tag-info">Javascript</span>
                            <span class="tag tag-warning">PHP</span>
                            <span class="tag tag-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
                        </p>

                        <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#activity" data-toggle="tab">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                    </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="{{ Auth::user()->name }}">
                                    <span class="username">
                                        <a href="#">{{ Auth::user()->name }}</a>
                                        <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                                    </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div>
                
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore the hate as they create awesome
                                    tools to help create filler text for everyone from bacon lovers
                                    to Charlie Sheen fans.
                                </p>

                                <p>
                                    <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i> Share</a>
                                    <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i> Like</a>
                                    <span class="float-right">
                                        <a href="#" class="link-black text-sm">
                                            <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                        </a>
                                    </span>
                                </p>
                                <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                            </div>
                        </div>

                        <div class="tab-pane" id="timeline">
                            <!-- The timeline -->
                            <ul class="timeline timeline-inverse">
                                <!-- timeline time label -->
                                <li class="time-label">
                                    <span class="bg-danger">
                                        10 Feb. 2014
                                    </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                            <i class="fa fa-envelope bg-primary"></i>

                <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                <div class="timeline-body">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                quora plaxo ideeli hulu weebly balihoo...
                </div>
                <div class="timeline-footer">
                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </div>
                </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                <i class="fa fa-user bg-info"></i>

                <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                </h3>
                </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                <i class="fa fa-comments bg-warning"></i>

                <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                <div class="timeline-body">
                Take me to your leader!
                Switzerland is small and neutral!
                We are more like Germany, ambitious and misunderstood!
                </div>
                <div class="timeline-footer">
                <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                </div>
                </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline time label -->
                <li class="time-label">
                <span class="bg-success">
                3 Jan. 2014
                </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                <i class="fa fa-camera bg-purple"></i>

                <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                <div class="timeline-body">
                <img src="http://placehold.it/150x100" alt="..." class="margin">
                <img src="http://placehold.it/150x100" alt="..." class="margin">
                <img src="http://placehold.it/150x100" alt="..." class="margin">
                <img src="http://placehold.it/150x100" alt="..." class="margin">
                </div>
                </div>
                </li>
                <!-- END timeline item -->
                <li>
                <i class="fa fa-clock-o bg-gray"></i>
                </li>
                </ul>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                <input type="email" class="form-control" id="inputName" placeholder="Name">
                </div>
                </div>
                <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                </div>
                <div class="form-group">
                <label for="inputName2" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName2" placeholder="Name">
                </div>
                </div>
                <div class="form-group">
                <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                <div class="col-sm-10">
                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                </div>
                </div>
                <div class="form-group">
                <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                <label>
                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                </label>
                </div>
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Submit</button>
                </div>
                </div>
                </form>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection