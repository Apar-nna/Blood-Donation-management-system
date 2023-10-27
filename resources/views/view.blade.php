<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blood Bank</title>
        <link rel="stylesheet" href="{{asset('css/blood.css')}}">
    </head>
    <body>
    <form method='POST' action="{{url('/blood')}}">
                @csrf
                <br>
                <center>
                    <h1 style="font-size: 40px">Donor Details</h1>
<p><b>Donor Name: </b> {{$contacts->name}}</p>
<p><b>Blood Group of Donor: </b> {{$contacts->blood}}</p>
<p><b>Date of Donation:  </b>{{$contacts->date}}</p>
<p><b>Quantity(in ml):  </b>{{$contacts->quantity}}</p>
</center>
</form>
</body>
</html>
</x-app-layout>