<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <label>Title</label>
            <input type="text" name="name" />
        </div>
        <div>
            <label>1st Category</label>
            <select name="type" id="type">
                <option value="event">Event</option>
                <option value="bootcamp">Bootcamp</option>
                <option value="competition">Competition</option>
            </select>
        </div>
        <div>
            <label>Cover Banner</label>
            <input type="file" name="banner" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="details" />
        </div>
        <div>
            <label>Event Start</label>
            <input type="datetime-local" name="start" />
        </div>
        <div>
            <label>Event End</label>
            <input type="datetime-local" name="end" />
        </div>
        <div>
            <label>Ticket Price</label>
            <b>Rp.</b> <input type="text" name="price" />
        </div>
        <div>
            <label>Venue</label>
            <input type="text" name="venue" />
        </div>
        <div>
            <label>Quota</label>
            <input type="number" name="capacity" />
        </div>
        <div>
            <label>Organizer_id</label>
            <input type="number" name="organizer_id" />
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>