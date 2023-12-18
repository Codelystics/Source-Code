<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('event.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label>Title</label>
            <input type="text" name="title" />
        </div>
        <div>
            <label>1st Category</label>
            <select name="category" id="category">
                <option value="event">Event</option>
                <option value="bootcamp">Bootcamp</option>
                <option value="competition">Competition</option>
            </select>
        </div>
        <div>
            <label>Cover Banner</label>
            <input type="file" name="cover-banner" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" />
        </div>
        <div>
            <label>Event Start</label>
            <input type="date" name="event-start" />
        </div>
        <div>
            <label>Event End</label>
            <input type="date" name="event-end" />
        </div>
        <div>
            <label>Ticket Price</label>
            <b>Rp.</b> <input type="text" name="duration" />
        </div>
        <div>
            <label>Venue</label>
            <input type="text" name="quota" />
        </div>
        <div>
            <label>Quota</label>
            <input type="number" name="quota" />
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>