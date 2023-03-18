<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <?php
        require "save.inc";

        if($_POST['btnSubmit'])
        {
            saveMonster();
        }
    ?>
</head>
<body>
    <div class="row">
        <div class="p-3 col-4">
            <h2>Monster Details</h2>
                <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    Monster name :
                    <input type="text" name="txtname" size="15" class="form-control" required/>
                    </br>
                    Monster image :
                    <input type="file" name="monsterimage" accept="image/jpeg" class="form-control" required/>
                    </br>
                    Monster Sound :
                    <input type="file" name="monsteraudio" accept="audio/wav" class="form-control" required/>
                    </br>
                    <input type="submit" name="btnSubmit" class="btn btn-dark" value="Save" />
                </form>
            </br>
        </div>
        <div class="p-3 col-4">
            <?php
        
            
            displayTable();
            ?>
        </div>
    </div>
</body>
</html>