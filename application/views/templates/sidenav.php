<style>
    .nav-link {
        display: block !important;
        line-height: normal;
        margin: 0rem !important;
        padding: 0rem !important;

        padding-top: 0.35rem !important;
        margin-top: 0.35rem !important;

        padding-bottom: 0.55rem !important;
        margin-bottom: 0.55rem !important;

        padding-left: 0.5rem !important;
        margin-left: 0.5rem !important;

        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    .nav-sub {
        padding-top: 0.35rem !important;
        margin-top: 0.35rem !important;

        padding-bottom: 0.35rem !important;
        margin-bottom: 0.35rem !important;
    }

    .nav-link-text {
        font-size: .95em;
    }

    .nav-link-text.active {
        font-size: .95em;
        font-weight: 600;
    }

    li.nav-link {
        padding-bottom: 0rem !important;
    }

    .nav-link-wrapper {
        transition: 0.1s;
    }

    li.nav-link:hover:not(.active) {
        color: var(--bs-dark) !important;
    }

    .nav-link-wrapper:hover {
        color: var(--bs-primary) !important;
    }

    .nav-link-wrapper.active {
        font-weight: 600;
        color: var(--bs-primary) !important;
    }

    .nav-link-wrapper.active>.nav-link-icon {
        font-weight: 600;
        color: var(--bs-primary) !important;
    }

    .collapsed>ul {
        visibility: hidden;
        opacity: 0;
        max-height: 0;
    }

    ul {
        margin: 0.75rem, 0;
        padding: 0;
        list-style: none;
        cursor: pointer;
        /* transition: all .3s; */
    }

    ul.sidenav-menu-nested {
        /* padding-top: 0.75rem !important; */
        margin-top: 0.75rem !important;
        padding-left: 0.45rem !important;
        margin-left: 0.45rem !important;
    }
</style>

<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion text-capitalize" id="accordionSidenav">
                <!-- Ini adalah halaman menu -->
                <!-- <ul>
                    <li class="sidenav-menu-heading">Core</li>
                    <li class="nav-link" data-bs-toggle="collapse" data-bs-target="#collapseMasters">
                        <div class="nav-link-wrapper">
                            <div class="nav-link-icon float-start"><i data-feather="activity"></i></div>
                            <span class="nav-link-text">Masters</span>
                            <div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div>
                        </div>
                        <ul class="sidenav-menu-nested nav accordion">
                            <a class="nav-link" href="http://localhost/hr-quiz/management/Master/navigationMenu">Navigation Menu</a>
                            <a class="nav-link" href="http://localhost/hr-quiz/management/Master/employee">Menu</a>
                            <a class="nav-link" href="#!">Default</a>
                            <li class="nav-link" data-bs-toggle="collapse" data-bs-target="#collapseMasters">
                                <div class="nav-link-wrapper">
                                    <span class="nav-link-text">Masters 2</span>
                                    <div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div>
                                </div>
                                <ul class="sidenav-menu-nested nav accordion">
                                    <a class="nav-link" href="http://localhost/hr-quiz/management/Master/scheduleTest">Jadwal Test</a>
                                    <a class="nav-link" href="#!">Default</a>
                                    <a class="nav-link" href="#!">Default</a>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="sidenav-menu-heading">Core</li>
                    <li class="nav-link" data-bs-toggle="collapse" data-bs-target="#collapseMasters">
                        <div class="nav-link-wrapper">
                            <div class="nav-link-icon float-start"><i data-feather="activity"></i></div>
                            <span class="nav-link-text">Masters</span>
                            <div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div>
                        </div>
                        <ul class="sidenav-menu-nested nav accordion">
                            <a class="nav-link" href="#!">Navigation Menu</a>
                            <a class="nav-link" href="http://localhost/hr-quiz/management/Master/employee">Menu</a>
                            <a class="nav-link" href="#!">Default</a>
                            <li class="nav-link" data-bs-toggle="collapse" data-bs-target="#collapseMasters">
                                <div class="nav-link-wrapper">
                                    <span class="nav-link-text">Masters 2</span>
                                    <div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div>
                                </div>
                                <ul class="sidenav-menu-nested nav accordion">
                                    <a class="nav-link" href="http://localhost/hr-quiz/management/Master/scheduleTest">Jadwal Test</a>
                                    <a class="nav-link" href="#!">Default</a>
                                    <a class="nav-link" href="#!">Default</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul> -->
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">Adam Rachman</div>
            </div>
        </div>
    </nav>
</div>

<script type="text/javascript">
    $(document).ready(loadMenu);

    function loadActiveMenu() {
        var url = window.location.href;
        $('.nav-link').find('a').each(function() {
            var anchor = $(this).attr('href')
            if (anchor == url) {
                $(this).parents().children('li.nav-link div.nav-link-wrapper').addClass('active');
                $(this).addClass('active');
                $(this).parents().closest('li.nav-link').removeClass('collapsed');
            }
        });

        setupBreadcrumb();
    }

    function clearSidenav() {
        $('#accordionSidenav').html('');
    }

    function loadMenu() {
        clearSidenav();

        var restURL = api_ntm_url + "getMenu";

        $.ajax({
            type: "GET",
            url: restURL,
            headers: {
                'Authorization': authKey
            },
            data: {
                userId: 1,
                isActive: [1]
            },
            error: function(xhr, status, error) {
                var myErrText = error ? error : "Tidak Terhubung ke Server"
                toast('error', 'Kode ' + xhr.status + ' - ' + myErrText);
            },
            success: function(data) {
                data = JSON.parse(data['data']);
                menu(document.getElementById("accordionSidenav"), data);
                feather.replace();
            }
        }).done(function() {
            loadActiveMenu();
        })

        return false;
    }

    var html = '';

    function menu(container, menu) {
        if (!menu || !menu.length) return;
        const ul = document.createElement("ul");
        for (const {
                id,
                parent_id,
                icon,
                url,
                category,
                title,
                submenu
            } of menu) {

            const li = document.createElement("li");
            if (submenu) {
                if (category == "HEADER") {
                    li.textContent = title;
                    li.className = "sidenav-menu-heading";
                } else {
                    if (category == "DROPDOWN MENU" && parent_id == 0) {
                        li.className = "nav-link collapsed";
                        li.innerHTML = '<div class="nav-link-wrapper" onclick="toggleDropdown(this)"><div class="nav-link-icon float-start"><i data-feather="' + icon + '"></i></div><span class="nav-link-text">' + title + '</span><div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div></div>';

                        li.addEventListener("click", (e) => {
                            if (e.target !== e.currentTarget) return;
                            // e.target.classList.toggle("expanded");
                            e.target.classList.toggle("collapsed");
                        });
                    } else if (category == "DROPDOWN MENU" && parent_id != 0) {
                        ul.className = "sidenav-menu-nested nav accordion";
                        li.className = "nav-link collapsed nav-sub";
                        li.innerHTML = '<div class="nav-link-wrapper" onclick="toggleDropdown(this)"><span class="nav-link-text">' + title + '</span><div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div></div>';

                        li.addEventListener("click", (e) => {
                            if (e.target !== e.currentTarget) return;
                            // e.target.classList.toggle("expanded");
                            e.target.classList.toggle("collapsed");
                        });
                    } else if (category == "SUB MENU") {
                        ul.className = "sidenav-menu-nested nav accordion";
                        // li.className = "nav-link";
                        li.innerHTML = '<a class="nav-link nav-sub" href="' + url + '"><span class="nav-link-text">' + title + '</span></a>';
                    } else if (category == "SINGLE MENU") {
                        li.className = "nav-link";
                        li.innerHTML = '<div class="nav-link-wrapper"><div class="nav-link-icon float-start"><i data-feather="' + icon + '"></i></div><span class="nav-link-text">' + title + '</span></div>';
                    } else {
                        // li.className = "nav-link";
                        if (parent_id != 0) {
                            li.innerHTML = '<a class="nav-link nav-sub" href="' + url + '"><span class="nav-link-text">' + title + '</span></a>';
                        } else {
                            li.innerHTML = '<a class="nav-link" href="' + url + '"><span class="nav-link-text">' + title + '</span></a>';
                        }
                    }
                }
                this.menu(li, submenu);
            }
            ul.appendChild(li);
        }
        container.appendChild(ul);
    }

    function toggleDropdown(state) {
        $(state).closest('.nav-link').toggleClass('collapsed');
    }
</script>