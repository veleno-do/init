<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task - Task management</title>
    <link rel="stylesheet" href="style.min.css">
</head>
<body class="settings">
    <div class="container">
        <div class="body">
            <div class="yui-el__bar1">
                <span class="yui-el__bar1-release"></span>
                <a class="yui-el__bar1-gnav" href="javascipt:void(0)" target="_self"><img src="items/menu_blue.svg" alt="menu"></a>
                <h1 class="yui-el__bar1-title">Task</h1>
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
                    <a class="yui-el__bar2-list-cont" href="javascript:void(0)" target="_self"><li><img src="items/message_white.svg" alt="message"></li></a>
                    <a class="yui-el__bar2-list-cont" href="javascript:void(0)" target="_self"><li><img src="items/settings_white.svg" alt="settings"></li></a>
                </ul>
            </div>
            <div class="l-main">
                <div class="main__breadcrumb">
                    <span class="main__breadcrumb-head">Task</span>
                </div>
                <section class="main__tasks">
                    <div class="main__tasks-wrap">
                        <span class="main__tasks-release"></span>
                        <div class="addpop">
                            <a class="addpop__close" href="javascript:void(0)" target="_self"><img src="items/no_blue.svg" alt="close"></a>
                            <div class="addpop__head">
                                <form class="addpop__head-form" action="" method="POST">
                                    <h3 class="addpop__head-title">User name</h3>
                                    <div class="addpop__head-info">
                                        <input class="addpop__head-input" type="text" name="update_cont" placeholder="value" autocomplete="off">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">Task name</h3>
                            <p class="main__tasks-cont-status">task name</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">Limit</h3>
                            <p class="main__tasks-cont-status">tempo@gmail.com</p>
                        </a>
                        <a class="main__tasks-cont" href="javascript:void(0)" target="_self">
                            <h3 class="main__tasks-cont-name">User password</h3>
                            <p class="main__tasks-cont-status">0000</p>
                        </a>
                        <form class="main__tasks-form" action="" method="POST">
                            <input class="main__tasks-submit" type="submit" name="update" value="update">
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>