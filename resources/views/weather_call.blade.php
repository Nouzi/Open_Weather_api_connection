<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather call</title>
</head>
<body>


<p>
    Your Latitude :
    <span style="font-weight: bold">
    {{$weather->coord->lat}}
    </span>
</p>
<p>
    Your Longitude :
    <span style="font-weight: bold">
    {{$weather->coord->lon}}
    </span>
</p>

<p>
    Current Weather :
    <span style="font-weight: bold">
     {{$weather->weather[0]->main}}
     </span>
</p>

<p>
    Current Weather more specific version  :
    <span style="font-weight: bold">
     {{Str::title($weather->weather[0]->description)}}
     </span>
</p>
<p>
    Current temperature :
    <span style="font-weight: bold">
     {{$weather->main->temp}}
     </span>
</p>
<p>
    Minimal temperature today :
    <span style="font-weight: bold">
     {{$weather->main->temp_min}}
     </span>
</p>
<p>
    Maximal temperature today :
    <span style="font-weight: bold">
     {{$weather->main->temp_max}}
     </span>
</p>
<p>
    Today's humidity :
    <span style="font-weight: bold">
     {{$weather->main->humidity}}
     </span>
</p>

<p>
    Today's wind speed :
    <span style="font-weight: bold">
     {{$weather->wind->speed}}
     </span>
</p>
<p>
    Today's time of sunrise :
    <span style="font-weight: bold">
     {{$weather->sys->sunrise}}
     </span>
</p>



{{--
 {{$weather['coord']}}
 {{$weather['weather']}}
 {{$weather['main']}}
 {{$weather['wind']}}
 {{$weather['sys']}}--}}

</body>
</html>
