<html>
    <head>
        <title>Canary Test Application</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    </head>
        
    <body>
        <h1>Canary Test Application</h1>
        <p>This view is only here because there is no other theme has been chosen. If you are installing canary for the first time, please
            go ahead and change your theme. I'll not be around until you've deleted the corresponding section in config file. <p/>
        <h2>Form Based Actions</h1>
        <!-- USER ACTIONS -->
        <div class="action">
            <h3>Create User</h3>
        </div>
        <form action="/users/create" method="POST">
            <div class="form-row">
                    <label>Username :</label>
                    <input type="text" name="username">
            </div>
            <div class="form-row">
                    <label>Password :</label>
                    <input type="text" name="password">
            </div>
            <div class="form-row">
                    <label>Email :</label>
                    <input type="text" name="username">
            </div>
            <input type="submit"/>
        </form>
        </div>
        <div class="action">
            <h3>Update User</h3>
        </div>
        <form action="/users/create" method="POST">
            <div class="form-row">
                    <label>Username :</label>
                    <input type="text" name="username">
            </div>
            <div class="form-row">
                    <label>Password :</label>
                    <input type="text" name="password">
            </div>
            <div class="form-row">
                    <label>Email :</label>
                    <input type="text" name="username">
            </div>
            <input type="submit"/>
        </form>
        </div>
        <div class="action">
            <h3>Delete User</h3>
        </div>
        <form action="/users/%user_id%/delete" method="POST">
            <div class="form-row">
                    <label>User ID :</label>
                    <input type="text" name="user_id">
            </div>
            <input type="submit"/>
        </form>
        </div>
        <!-- PLAYLIST ACTIONS -->
        <div class="action">
            <h3>Create Playlist</h3>
        </div>
            <form action="/playlist/create" method="POST">
                <div class="form-row">
                        <label>Path :</label>
                        <input type="text" name="path">
                </div>
                <input type="submit"/>
            </form>
        </div>

    <script>
        $('form').each(function(elem,index){
            $(elem).attr("action","/canary.php/"$(elem).attr("action"))
        });
    </script>
    </body>
</html>