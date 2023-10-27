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
        <center>
        <h1 style="font-size: 40px">Blood Donation Management System</h1>
        <br> 
            <table id="table"></center>
                    <div id="border" >
                    <h1 style="font-size: 30px">Blood Donation List</h1>
                    <a href="{{url('blood/create')}}">Add New</a>
        </div>
                <center>
                    <table border="2">
                        <tr>
                        <th class="table1">#</th>
                        <th class="table1">Donor Name</th>
                        <th class="table1">Blood Group</th>
                        <th class="table1">Date of Donation</th>
                        <th class="table1">Quantity</th>
                        <th class="table1"></th>
                        <th class="table1">Action</th>
                        <th class="table1"></th>

                        </tr>
                            @foreach($comments as $item)
                            <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->blood}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->quantity}}</td>
                          <td><button class="but1"><a href="{{url('blood/'.$item->id)}}">View</a></button></td>
                             <td><button class="but2"><a href="{{url('blood/'.$item->id.'/edit')}}">Edit</a></button></td>
                                <td><form action="{{'blood'.'/'.$item->id}}" method="POST">
                                    {{method_field('DELETE')}}
                                    @csrf
                                   <input class="but3" type='submit' value='delete'/>
                                </form>
                                </td>
                            </tr>
                            @endforeach 
                    </table>
                </center>
    </body>
    </html>
</x-app-layout>