@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h3><b>NOTE:</b> Laravel 8</h3>
    <hr>
    <h5>Table of Content:</h5>
    <div class="text-left my-3">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Socket.io</td>
                    <td>
                        <a href="/websocket/send-socket-io" target="blank" class="btn btn-primary py-0">send</a>
                        <a href="/websocket/receive-socket-io" target="blank" class="btn btn-primary py-0">receive</a>
                        <a href="https://medikre.com/stories/contoh-tutorial-realtime-event-broadcasting-di-laravel-876-dengan-socketio" target="blank" class="btn btn-primary py-0">Tutorial</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Webhook</td>
                    <td>
                        <a href="/webhook/send-test" target="blank" class="btn btn-primary py-0">send</a>
                        <a href="/webhook/webhook-receiving-url" target="blank" class="btn btn-primary py-0">receive</a>
                        <a href="https://www.laravelcode.com/post/how-to-send-webhook-in-laravel-8" target="blank" class="btn btn-primary py-0">Tutorial</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <small>
            <a href="/route-list" target="_blank">Route List</a>
        </small>
    </div>
</div>
@endsection('content')