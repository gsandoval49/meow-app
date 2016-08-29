<header ng-controller="navController">
    <!-- bootstrap breakpoint directive to control collapse behavior -->
    <bootstrap-breakpoint></bootstrap-breakpoint>

    <nav class="navbar navbar-default navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" aria-expanded="false" ng-click="navCollapsed = !navCollapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">MeowApp v1.5.0</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" uib-collapse="navCollapsed">

                <ul class="nav navbar-nav navbar-right" >
                    <li><a href="index">Home</a></li>
                    <li><a href="treats">Treats</a></li>
                    <li><a href="donate">Donate</a></li>
                    <li><a href="sign-up">Sign Up</a></li>
                    <li><a href="https://github.com/rlewis2892/meow-app" target="_blank">GitHub</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>