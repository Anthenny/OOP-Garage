<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Garage</title>
</head>
<body>
    <?php include 'process.php'; ?>
    <div class="row justify-content-center">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Name customer</label>
                <input type="text" name="name" value="" class="form-control" placeholder="Enter name customer">
            </div>

            <div class="form-group">
                <label for="">Location customer</label>
                <input type="text" name="location" value="" class="form-control" placeholder="Enter location customer">
            </div>

            <div class="form-group">
                <label for="">Phone number customer</label>
                <input type="text" name="phone" value="" class="form-control" placeholder="Enter phone number">
            </div>
            <div class="form-group">
                <label for="">Email customer</label>
                <input type="text" name="email" value="" class="form-control" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="">Car customer</label>
                <input type="text" name="car" value="" class="form-control" placeholder="Enter name car">
            </div>

            <div class="form-group">
                <label for="">Time joined</label>
                <input type="text" name="join" value="" class="form-control" placeholder="Joined at">
            </div>

            <div class="form-group">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

    <h6>HOI</h6>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>