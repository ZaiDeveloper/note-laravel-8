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
                        <a href="/websocket/send-socket-io" target="blank" class="btn btn-primary py-0">Send</a>
                        <a href="/websocket/receive-socket-io" target="blank" class="btn btn-primary py-0">Receive</a>
                        <a href="https://medikre.com/stories/contoh-tutorial-realtime-event-broadcasting-di-laravel-876-dengan-socketio" target="blank" class="btn btn-primary py-0">Tutorial</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Webhook</td>
                    <td>
                        <a href="/webhook/send-test" target="blank" class="btn btn-primary py-0">Send</a>
                        <a href="/webhook/webhook-receiving-url" target="blank" class="btn btn-primary py-0">Receive</a>
                        <a href="https://www.laravelcode.com/post/how-to-send-webhook-in-laravel-8" target="blank" class="btn btn-primary py-0">Tutorial</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Webscraping</td>
                    <td>
                        <a href="/webscraping/sample" target="blank" class="btn btn-primary py-0">Send</a>
                        <a href="https://github.com/jae-jae/QueryList" target="blank" class="btn btn-primary py-0">Tutorial</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Laravel Vue3</td>
                    <td>
                        <a href="http://laravel-vue-3-composition-api-crud.test/dashboard" target="blank" class="btn btn-primary py-0">Demo</a>
                        <a href="https://laraveldaily.com/laravel-8-vue-3-crud-composition-api/" target="blank" class="btn btn-primary py-0">Tutorial</a>
                        <a href="https://shouts.dev/articles/laravel-spa-with-vue3-auth-crud-example" target="blank" class="btn btn-primary py-0">Tutorial</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>custom package</td>
                    <td>
                        <a href="http://note-laravel-8.test/register" target="blank" class="btn btn-primary py-0">Demo</a>
                        <a href="https://dev.to/devingray/how-to-create-a-highly-configurable-laravel-package-4pj0" target="blank" class="btn btn-primary py-0">Tutorial</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Unit testing</td>
                    <td>
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