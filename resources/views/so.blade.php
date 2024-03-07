<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>halaman so</h1>

    @role('manager')
        I am a manager! <br>
    @endrole


    @role('staff')
        I am a staff! <br>
    @endrole

    @can('read so')
        read so <br>
    @endcan
    @can('create so')
        create so <br>
    @endcan
    @can('update so')
        update so <br>
    @endcan
    @can('delete so')
        delete so <br>
    @endcan


</body>

</html>
