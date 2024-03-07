<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>halaman role</h1>
    @role('manager')
        I am a manager! <br>
    @endrole


    @role('staff')
        I am a staff! <br>
    @endrole

    @can('read role')
        read role <br>
    @endcan
    @can('create role')
        create role <br>
    @endcan
    @can('update role')
        update role <br>
    @endcan
    @can('delete role')
        delete role <br>
    @endcan
</body>

</html>
