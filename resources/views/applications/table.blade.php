<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>


<div class="limiter">

    <div class="container-table100">
        @include('applications.links')
        <div class="wrap-table100">
            <div class="table">

                <div class="row header">
                    <div class="cell">
                        school
                    </div>
                    @foreach($applications->getMonths() as $item)
                        <div class="cell">
                            {{ $item }}
                        </div>
                    @endforeach
                </div>
                @foreach($applications->getSchoolData() as $key => $item)
                    <div class="row">
                        <div class="cell">
                            {{ $key }}
                        </div>
                    @foreach($item as $row)
                            <div class="cell" data-title="">
                                {{ $row }}
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<script src="../js/app.js"></script>
</body>
</html>


