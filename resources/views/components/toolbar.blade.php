<div class="card">
    <div class="toolbar">

        <div class="toolbar__left mr+++">
            <button class="btn btn--l btn--black btn--icon" lx-ripple>
                <i class="mdi mdi-menu icon-white"></i>
            </button>
        </div>

        <span class="toolbar__label fs-title">Phoenix</span>

        <div class="toolbar__right">

            <div>
                <lx-dropdown position="right" from-top>
                    <label class="btn" lx-ripple lx-dropdown-toggle>
                        Invoices
                        <i class="mdi mdi-menu-down icon-white"></i>
                    </label>

                    <lx-dropdown-menu>
                        <ul>
                            <li><a class="dropdown-link">Action</a></li>
                            <li><a class="dropdown-link">Another action</a></li>
                            <li><a class="dropdown-link">Something else here</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-link dropdown-link--is-header">Header</a></li>
                            <li><a class="dropdown-link">Separated link</a></li>
                        </ul>
                    </lx-dropdown-menu>
                </lx-dropdown>

            </div>


            <div>
                <lx-dropdown position="right" from-top>
                    <label class="btn" lx-ripple lx-dropdown-toggle>
                        Reports
                        <i class="mdi mdi-menu-down icon-white"></i>
                    </label>

                    <lx-dropdown-menu>
                        <ul>
                            <li><a class="dropdown-link">Action</a></li>
                            <li><a class="dropdown-link">Another action</a></li>
                            <li><a class="dropdown-link">Something else here</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-link dropdown-link--is-header">Header</a></li>
                            <li><a class="dropdown-link">Separated link</a></li>
                        </ul>
                    </lx-dropdown-menu>
                </lx-dropdown>

            </div>

            <label>{{session("user")}}</label>

            <lx-dropdown position="right" from-top>
                <button class="btn btn--l btn--black btn--icon" lx-ripple lx-dropdown-toggle>
                    <i class="mdi mdi-dots-vertical icon-white"></i>
                </button>

                <lx-dropdown-menu>
                    <ul>
                        <li><a class="dropdown-link">Action</a></li>
                        <li><a class="dropdown-link">Another action</a></li>
                        <li><a class="dropdown-link">Something else here</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-link dropdown-link--is-header">Header</a></li>
                        <li><a class="dropdown-link">Separated link</a></li>
                    </ul>
                </lx-dropdown-menu>
            </lx-dropdown>
        </div>
    </div>
</div>