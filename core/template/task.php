<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks - Task management</title>
    <link rel="stylesheet" href="style.min.css">
</head>
<body class="tasks">
    <div class="container">
        <div class="body">
            <div class="yui-el__bar1">
                <span class="yui-el__bar1-release"></span>
                <a class="yui-el__bar1-gnav" href="javascipt:void(0)" target="_self"><img src="items/menu_blue.svg" alt="menu"></a>
                <h1 class="yui-el__bar1-title">Tasks</h1>
                <nav class="yui-el__bar1-gnav-list">
                    <ul class="yui-el__bar1-gnav-list-wrap">
                        <li class="yui-el__bar1-gnav-list-title">Task management</li>
                        <li class="yui-el__bar1-gnav-list-cont"><a href="javascript:void(0)" target="_self"><img class="yui-el__bar1-gnav-list-icon" src="items/members_white.svg" alt="members">Memberes</a></li>
                        <li class="yui-el__bar1-gnav-list-cont"><a href="javascript:void(0)" target="_self"><img class="yui-el__bar1-gnav-list-icon" src="items/tasks_white.svg" alt="tasks">Tasks</a></li>
                        <li class="yui-el__bar1-gnav-list-cont"><a href="javascript:void(0)" target="_self"><img class="yui-el__bar1-gnav-list-icon" src="items/message_white.svg" alt="message">Message</a></li>
                        <li class="yui-el__bar1-gnav-list-cont"><a href="javascript:void(0)" target="_self"><img class="yui-el__bar1-gnav-list-icon" src="items/settings_white.svg" alt="settings">Settings</a></li>
                    </ul>
                </nav>
                <a class="yui-el__bar1-search" href="javascript:void(0)" target="_self"><img src="items/search_blue.svg" alt="search"></a>
                <form class="yui-el__bar1-form" action="" method="POST">
                    <input class="yui-el__bar1-input" type="text" name="search" placeholder="search" autocomplete="off">
                </form>
            </div>
            <div class="yui-el__bar2">
                <ul>
                    <a class="yui-el__bar2-list-cont" href="javascript:void(0)" target="_self"><li><img src="items/members_white.svg" alt="members"></li></a>
                    <a class="yui-el__bar2-list-cont" href="javascript:void(0)" target="_self"><li><img src="items/tasks_white.svg" alt="tasks"></li></a>
                    <a class="yui-el__bar2-list-cont" href="javascript:void(0)" target="_self"><li><img src="items/profile_white.svg" alt="profile"></li></a>
                    <a class="yui-el__bar2-list-cont" href="javascript:void(0)" target="_self"><li><img src="items/settings_white.svg" alt="settings"></li></a>
                </ul>
            </div>
            <div class="l-main">
                <div class="main__breadcrumb">
                    <span class="main__breadcrumb-head">Tasks</span>
                </div>
                <section class="main__tasks">
                    <div class="main__tasks-wrap">
                        <span class="main__tasks-release"></span>
                        <div class="addpop">
                            <a class="addpop__close" href="javascript:void(0)" target="_self"><img src="items/no_blue.svg" alt="close"></a>
                            <div class="addpop__head">
                                <h3 class="addpop__head-title">task name</h3>
                                <p class="addpop__head-limit">2020 / 01 / 16 - 2020 / 01 / 20</p>
                                <p class="addpop__head-status">status: progress</p>
                                <a class="addpop__head-edit" href="javascript:void(0)" target="_self">edit</a> 
                            </div>
                            <div class="addpop__content">
                                <img class="addpop__statusimg" src="items/progress_blue.svg" alt="done">
                                <p class="addpop__percent">60%</p>
                                <span class="addpop__bar"></span>
                                <div class="addpop__process">
                                    <section class="addpop__process-cont">
                                        <h4 class="addpop__process-cont-title">Process 1</h4>
                                        <p>Details contents of the process</p>
                                    </section>
                                    <section class="addpop__process-cont">
                                        <h4 class="addpop__process-cont-title">Process 2</h4>
                                        <p>Details contents of the process</p>
                                    </section>
                                    <section class="addpop__process-cont">
                                        <h4 class="addpop__process-cont-title">Process 3</h4>
                                        <p>Details contents of the process</p>
                                    </section>
                                    <section class="addpop__process-cont">
                                        <h4 class="addpop__process-cont-title">Process 4</h4>
                                        <p>Details contents of the process</p>
                                    </section>
                                    <section class="addpop__process-cont">
                                        <h4 class="addpop__process-cont-title">Process 5</h4>
                                        <p>Details contents of the process</p>
                                    </section>
                                    <section class="addpop__process-cont">
                                        <h4 class="addpop__process-cont-title">Process 6</h4>
                                        <p>Details contents of the process</p>
                                    </section>
                                    <section class="addpop__process-cont">
                                        <h4 class="addpop__process-cont-title">Process 7</h4>
                                        <p>Details contents of the process</p>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">task name 1</h3>
                            <p class="main__tasks-cont-status">6min ago</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">task name 2</h3>
                            <p class="main__tasks-cont-status">6min ago</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">task name 3</h3>
                            <p class="main__tasks-cont-status">6min ago</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">task name 4</h3>
                            <p class="main__tasks-cont-status">6min ago</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">task name 5</h3>
                            <p class="main__tasks-cont-status">6min ago</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">task name 6</h3>
                            <p class="main__tasks-cont-status">6min ago</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">task name 7</h3>
                            <p class="main__tasks-cont-status">6min ago</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">task name 8</h3>
                            <p class="main__tasks-cont-status">6min ago</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">task name 9</h3>
                            <p class="main__tasks-cont-status">6min ago</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">task name 10</h3>
                            <p class="main__tasks-cont-status">6min ago</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">task name 11</h3>
                            <p class="main__tasks-cont-status">6min ago</p>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>