<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li>
                            <a href="#">
                                <i class="mdi-hardware-keyboard-tab"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                        Aghits Nidallah
                        <i class="mdi-navigation-arrow-drop-down right"></i>
                    </a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
        </li>
        <li class="bold">
            <a href="<?= base_url('/dashboard') ?>" class="waves-effect waves-cyan">
                <i class="mdi-action-dashboard"></i>
                Dashboard
            </a>
        </li>
        <li class="bold">
            <a href="<?= base_url('/dashboard/kamar') ?>" class="waves-effect waves-cyan">
                <i class="mdi-action-view-carousel"></i>
                Kamar
            </a>
        </li>
        <li class="bold">
            <a href="<?= base_url('/dashboard/pasien') ?>" class="waves-effect waves-cyan">
                <i class="mdi-communication-email"></i>
                Pasien
            </a>
        </li>
        <li class="bold">
            <a href="<?= base_url('/dashboard/dokter') ?>" class="waves-action-invert-colors">
                <i class="mdi-editor-insert-invitation"></i>
                Dokter
            </a>
        </li>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
</aside>
<!-- END LEFT SIDEBAR NAV-->