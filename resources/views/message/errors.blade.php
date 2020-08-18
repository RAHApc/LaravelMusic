<div style="background: #b96363;margin-bottom: 10px;padding-top: 30px;font-size: 3em;color: #bf9c9c;border-radius: 20px;height: 64px;">
    <ul style="padding: 0 30px;list-style: disc;">
        @foreach($errors->all as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
