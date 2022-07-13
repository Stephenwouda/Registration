<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="insert.php" method="POST">
    <div class="mb-3">
        <label class="form-label">First Name</label>
        <input type="text" name="firstName" class="form-control" id="" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Surname</label>
        <input type="text" name="surname" class="form-control" id="" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Initials</label>
        <input type="text" name="initials" class="form-control" id="" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Postal Code</label>
        <input type="zip" name="postalCode" class="form-control" id="" required>
    </div>
    <div class="mb-3">
        <label class="form-label">House Number</label>
        <input type="number text" name="houseNumber" class="form-control" id="" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Telephone Number</label>
        <input type="tel" name="telNumber" class="form-control" id="phone" pattern="[0-9]{2}-[0-9]{8}" required >
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="passw" class="form-control" id="" required>
    </div>
        <button type="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>