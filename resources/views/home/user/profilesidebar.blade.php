                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                        <div class="profile-bx text-center">
                            <div class="user-profile-thumb">
                                <img src="{{asset('assets')}}/images/user-profile.jpg" alt="" />
                            </div>
                            <div class="profile-info">
                                <h4> {{Auth::user()->name}}</h4>
                                <span> {{Auth::user()->email}}</span>
                            </div>
                            <div class="profile-tabnav">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('userpanel.index')}}"><i class="ti-book"></i>Edit Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('userpanel.reviews')}}"><i class="ti-bookmark-alt"></i>Comments and Reviews </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#edit-profile"><i class="ti-pencil-alt"></i>Edit Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#change-password"><i class="ti-lock"></i>Change Password</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>