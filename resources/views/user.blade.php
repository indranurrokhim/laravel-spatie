<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>halaman user</h1>
    @role('manager')
        I am a manager! <br>
    @endrole


    @role('staff')
        I am a staff! <br>
    @endrole

    @can('read user')
        read user <br>
    @endcan
    @can('create user')
        create user <br>
    @endcan
    @can('update user')
        update user <br>
    @endcan
    @can('delete user')
        delete user <br>
    @endcan
</body>

</html>
