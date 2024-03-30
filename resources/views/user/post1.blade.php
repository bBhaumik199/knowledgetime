<x-userlayout>
    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="page-wrapper">
                        <div class="blog-title-area">
                            <span class="color-green"><a href="garden-category.html" title="">Gardening</a></span>
                            <h3>{{ $post->title }}</h3>
                            <div class="blog-meta big-meta">
                                <small><a href="" title="">{{ $date}}</a></small>
                                <small><a href="blog-author.html" title="">by {{$post->author->name}}</a></small>
                                {{-- <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small> --}}
                            </div><!-- end meta -->
                            @include('user.sharing')
                            <div class="single-post-media">
                                <img src="{{ asset('images/'.$post->banner_image) }}" alt="" class="img-fluid">
                            </div><!-- end media -->
                            <div class="blog-content">
                                <div class="pp">
                                    <p>{{$post->first_para}}</p>
                                    <h3><strong>{{$post->bold_text}}</strong></h3>
                                    <p>There are two ways to get rid of it.</p>
                                    <ol class="check">
                                        <li>
                                            Stop locking your device (Encouraged by nosy people and hackers)

                                        </li>
                                        <li>Make the OS to give you the password prompt directly (Encouraged by Common
                                            sense)</li>

                                    </ol>

                                    <p>Let’s say you don’t want your system to be left unlocked as people might get into
                                        it. So, let’s get rid of this lock screen so that you can enter your password
                                        directly.</p>


                                    <ol>
                                        <li>Press Windows key and search for “Edit Group Policy”.</li>
                                        <li>Press Enter (Obviously Haha).</li>
                                        <li>It should look like this </li>
                                        <img src="{{ asset('images/a1i2.png') }}" alt=""
                                            class="img-fluid img-fullwidth">

                                        <li>Now Follow this path carefully. <br />
                                            <code>
                                                Computer Configuration > Administrative Templates > Control Panel >
                                                Personalization
                                            </code>
                                        </li>
                                        <li>Remember to click on the arrow that can be seen on the left side of these
                                            menus and not the name of the menu itself. You will not be able to see an
                                            arrow ad the left side of “Personalization” so click on the menu name at
                                            this point.</li>
                                        <li>
                                            This is how your screen would look if you are on the right track.
                                        </li>
                                        <img src="{{ asset('images/a1i3.png') }}" alt=""
                                            class="img-fluid img-fullwidth">
                                        <li>Now look at the right side of the screen and locate “Do not display the lock
                                            screen” (In case you are a bit blind or functioning on just 3 hours of
                                            sleep, the menu is 4th from the top) and double click on it</li>
                                        <img src="{{ asset('images/a1i4.png') }}" alt=""
                                            class="img-fluid img-fullwidth">


                                        <li>Change it to Enabled and you are good to go.
                                            Verify it by locking your system (Win key + L) and you should see the
                                            password screen directly.
                                            No lock screen wallpaper anymore. Our enchantment is completed here.
                                        </li>
                                    </ol>

                                    <p> <a href="{{ asset('downloadablefiles/'.$post->downloadable_file_name) }}"
                                            target="_blank" rel="noopener noreferrer"><img
                                                src="{{ asset('images/downloadimage.png') }}" class="float-left"
                                                width="340" alt=""></a> Too much for your brain? Allow us to
                                        use magic to save your brain and your efforts. See the image ont the left side?
                                        That image is the portal to the magical land of solution. Clicking on that image
                                        will download a file which has the magic words to make your problem go away in
                                        just one step. </p>

                                    <h3><strong>Download the file by clicking on the image. Right click that file and
                                            select "Run as Admin". Your problem is solved</strong></h3>


                                    <p>That is enough for today. Hopefully your problem is solved. Read carefully and do
                                        it again if it's not solved yet or approach us via commenting below.
                                </div><!-- end pp -->
                            </div><!-- end content -->

                            {{-- <div class="blog-title-area">
                                <div class="tag-cloud-single">
                                    <span>Tags</span>
                                    <small><a href="#" title="">lifestyle</a></small>
                                    <small><a href="#" title="">colorful</a></small>
                                    <small><a href="#" title="">trending</a></small>
                                    <small><a href="#" title="">another tag</a></small>
                                </div><!-- end meta --> --}}

                                @include('user.sharing')

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="banner-spot clearfix">
                                            <div class="banner-img">
                                                <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                            </div><!-- end banner-img -->
                                        </div><!-- end banner -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <hr class="invis1">

                                <div class="custombox authorbox clearfix">
                                    <h4 class="small-title">About author</h4>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <img src="upload/author.jpg" alt=""
                                                class="img-fluid rounded-circle">
                                        </div><!-- end col -->

                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <h4><a href="#">{{ $post->author->name }}</a></h4>
                                            <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a>
                                                amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt
                                                nisl eget, finibus odio. Duis tempus elit quis risus congue feugiat.
                                                Thanks for stop Forest Time!</p>

                                            <div class="topsocial">
                                                <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                    title="Youtube"><i class="fa fa-youtube"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                    title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                    title="Instagram"><i class="fa fa-instagram"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                    title="Website"><i class="fa fa-link"></i></a>
                                            </div><!-- end social -->

                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end author-box -->

                                <hr class="invis1">

                                <div class="custombox clearfix">
                                    <h4 class="small-title">You may also like</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="garden-single.html" title="">
                                                        <img src="upload/garden_single_03.jpg" alt=""
                                                            class="img-fluid">
                                                        <div class="hovereffect">
                                                            <span class=""></span>
                                                        </div><!-- end hover -->
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="garden-single.html" title="">We are guests of
                                                            ABC Design Studio</a></h4>
                                                    <small><a href="blog-category-01.html"
                                                            title="">Trends</a></small>
                                                    <small><a href="blog-category-01.html" title="">21 July,
                                                            2017</a></small>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div><!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="garden-single.html" title="">
                                                        <img src="upload/garden_single_02.jpg" alt=""
                                                            class="img-fluid">
                                                        <div class="hovereffect">
                                                            <span class=""></span>
                                                        </div><!-- end hover -->
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="garden-single.html" title="">Nostalgia at work
                                                            with family</a></h4>
                                                    <small><a href="blog-category-01.html"
                                                            title="">News</a></small>
                                                    <small><a href="blog-category-01.html" title="">20 July,
                                                            2017</a></small>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end custom-box -->

                                <hr class="invis1">
                                
                                <div class="custombox clearfix">
                                     <x-forms.tinymce-editor/>
                                 </div>
                                 {{--
                                    <h4 class="small-title">3 Comments</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="comments-list">
                                                <div class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="upload/author.jpg" alt=""
                                                            class="rounded-circle">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading user_name">Amanda Martines <small>5
                                                                days ago</small></h4>
                                                        <p>Exercitation photo booth stumptown tote bag Banksy, elit
                                                            small batch freegan sed. Craft beer elit seitan
                                                            exercitation, photo booth et 8-bit kale chips proident
                                                            chillwave deep v laborum. Aliquip veniam delectus, Marfa
                                                            eiusmod Pinterest in do umami readymade swag. Selfies iPhone
                                                            Kickstarter, drinking vinegar jean.</p>
                                                        <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="upload/author_01.jpg" alt=""
                                                            class="rounded-circle">
                                                    </a>
                                                    <div class="media-body">

                                                        <h4 class="media-heading user_name">Baltej Singh <small>5 days
                                                                ago</small></h4>

                                                        <p>Drinking vinegar stumptown yr pop-up artisan sunt. Deep v
                                                            cliche lomo biodiesel Neutra selfies. Shorts fixie consequat
                                                            flexitarian four loko tempor duis single-origin coffee.
                                                            Banksy, elit small.</p>

                                                        <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="media last-child">
                                                    <a class="media-left" href="#">
                                                        <img src="upload/author_02.jpg" alt=""
                                                            class="rounded-circle">
                                                    </a>
                                                    <div class="media-body">

                                                        <h4 class="media-heading user_name">Marie Johnson <small>5 days
                                                                ago</small></h4>
                                                        <p>Kickstarter seitan retro. Drinking vinegar stumptown yr
                                                            pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra
                                                            selfies. Shorts fixie consequat flexitarian four loko tempor
                                                            duis single-origin coffee. Banksy, elit small.</p>

                                                        <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end custom-box -->

                                <hr class="invis1">

                                <div class="custombox clearfix">
                                    <h4 class="small-title">Leave a Reply</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="form-wrapper" method="post" action="/post/add-comment/{{ $post->id }}">
                                                @csrf
                                                <input type="text" class="form-control" name="name" placeholder="Your name">
                                                @error('name')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="text" class="form-control" name="email"
                                                    placeholder="Email address">
                                                    @error('email')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="text" class="form-control" name="website" placeholder="Website">
                                                <textarea class="form-control" placeholder="Your comment" name="comments"></textarea>
                                                @error('comment')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                                <button type="submit" class="btn btn-primary">Submit Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                                
                            {{-- </div><!-- end page-wrapper --> --}}
                        </div><!-- end col -->
</x-userlayout>
