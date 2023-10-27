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
        <form method='POST' action="{{url('/blood',$contact->id)}}">
            @method('PATCH')
            @csrf
                <center>
                    <h1 style="font-size: 40px">Profile of Donor</h1>
                <table border=1>
                <tr>
                    <td><label>Donor Name</label></td>
                    <td><input type="text" name="name" value={{$contact->name}}></td>
                </tr>
                <tr>
                    <td><label>Blood Group</label></td>
                    <td><input type="text" name="blood" value={{$contact->blood}}></td>
                </tr>
                <tr>
                    <td><label>Date of Donation</label></td>
                    <td><input type="text" name="date"  value={{$contact->date}}></td>
                </tr>
                <tr>
                    <td><label>Quantity</label></td>
                    <td><input type="number" name="quantity" value={{$contact->quantity}}></td>
                </tr>
                <tr colspan=1>
                    <td><input type="submit" class="but3" name="submit" value="update"></td>
                </tr>
                </table>
            </center>
            </form>
    </body>
    </html>
</x-app-layout>