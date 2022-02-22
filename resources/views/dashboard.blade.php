<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v13.0" nonce="j2ps1Uxj"></script>

<div class="py-55">
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-4 ">Tasks Lists</div>

                <div class="flex-auto text-right mt-2">

                    <a href="/task" class="buttonAdd text font-bold py-2 px-4 rounded">Add new Task</a>
                </div>
            </div>
            <table class="w-full text-md rounded mb-4">
                <thead>

                <tr class="border-b">
                    <th class="text-left p-3 px-5">Task</th>
                    <th class="text-left p-3 px-5">Actions</th>
                    <th></th>
                </tr>
</thead>
                <tbody>
                @foreach(auth()->user()->tasks as $task)
                    <tr class="border-b hover:bg-orange-100">
                        <td class="p-3 px-5">
                            {{$task->description}}
                        </td>
                        <td class="p-3 px-5">

                            <a href="/task/{{$task->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                            <form action="/task/{{$task->id}}" class="inline-block">
                                <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                {{ csrf_field() }}
                            </form>
                            <div class="fb-share-button" data-href="https://www.facebook.com/sathitiporn.tang" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fsathitiporn.tang&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">share</a></div>
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="MsgTweet" data-url="{{$task->description}}" data-show-screen-name="false" data-lang="en" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    </div>
</div>
</x-app-layout>
