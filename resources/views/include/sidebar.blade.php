<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav border-bottom">
        <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
                <div class="nav-profile-image">
                    <img src="{{ asset('avatar/'.Auth::user()->profile->avatar) }}" alt="profile" />
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                    <span class="font-weight-semibold mb-1 mt-2 text-center">{{ Auth::user()->name }}</span>
                </div>
            </a>
        </li>
        <li class="nav-item {{ Request::route('dashboard.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <i class="mdi mdi-compass-outline menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ Request::route('kegiatan.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('kegiatan.index') }}">
                <i class="mdi mdi-format-list-checks menu-icon"></i>
                <span class="menu-title">Kegiatan</span>
            </a>
        </li>
        <li class="nav-item {{ Request::route('proposal.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('proposal.index') }}">
                <i class="mdi mdi-file-outline menu-icon"></i>
                <span class="menu-title">Proposal</span>
            </a>
        </li>
        @if (Auth::user()->role == 'Kesiswaan' or Auth::user()->role == 'Pembina_PMR' or Auth::user()->role ==
        'Pembina_PRAMUKA' or Auth::user()->role ==
        'Pembina_ROHIS')
        <li class="nav-item {{ Request::route('users.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="mdi mdi-account-multiple-outline menu-icon"></i>
                <span class="menu-title">Manage User</span>
            </a>
        </li>
        @endif

        {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li> --}}
    </ul>
    <ul class="nav border-bottom">
        <li class="nav-item {{ Request::route('profile.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('profile.index') }}">
                <i class="mdi mdi-account-box-outline menu-icon"></i>
                <span class="menu-title">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#modalChangePassword" style="cursor: pointer">
                <i class="mdi mdi-textbox-password menu-icon"></i>
                <span class="menu-title">Change Password</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#modalLogout" style="cursor: pointer">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>
{{-- modal change password --}}
<div class="modal fade" id="modalChangePassword" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="modalChangePasswordLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalChangePasswordLabel">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('profile.changePassword', Auth::user()->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label class="mb-1" for="oldPassword">Old Password</label>
                        <input id="oldPassword" type="password"
                            class="form-control rounded-pill @error('oldPassword') is-invalid @enderror"
                            name="oldPassword" required autocomplete="oldPassword">

                        @error('oldPassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="mb-1" for="password">New Password</label>
                        <input id="password" type="password"
                            class="form-control rounded-pill @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="password-confirm">Confirm New Password</label>
                        <input id="password-confirm" type="password" class="form-control rounded-pill"
                            name="password_confirmation" autocomplete="new-password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary rounded-pill">Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- modal logout --}}
<div class="modal fade" id="modalLogout" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="modalLogoutLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLogoutLabel">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="text-capitalize">apakah anda yakin untuk melakukan logout ???</h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Close</button>
                <a href="{{ url('/logout') }}" class="btn btn-primary rounded-pill">Logout</a>
            </div>
        </div>
    </div>
</div>
