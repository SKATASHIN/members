<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                            <div class="py-8 flex flex-col text-center w-full mb-12">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">削除済み会員一覧</h1>
                            </div>

                            <x-flash-message status="session('status')" />

                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <tbody>
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">名前</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">削除した日</th>
                                        </tr>
                                    </thead>
                                    

                                        @foreach ($expiredMembers as $member)
                                        <tr>
                                            <td class="px-4 py-3">{{ $member->name }}</td>
                                            <td class="px-4 py-3">{{ $member->email }}</td>
                                            <td class="px-4 py-3 text-lg text-gray-900">{{ $member->deleted_at->diffForHumans() }}
                                        </td>

                                        <form id="delete_{{$member->id}}" method="post" action="{{ route('expired-members.destroy', ['member' => $member->id ] )}}">
                                        @csrf
                                        <td class="px-4 py-3">
                                            <a href="#" data-id="{{ $member->id }}" onclick="deletePost(this)" class="text-white bg-red-400 border-0 py-2 px-4 focus:outline-none hover:bg-red-500 rounded ">完全削除</a>                        
                                        </td>
                                        </form>

                                    </tr>
                                        

                                </tbody>
                                </table>

                                @endforeach
                            </div>
                            </div>
                        </section>

                    {{-- テスト 
                        エロクアント 
                    @foreach ($members as $member)
                        {{ $member->name }}
                        {{ $member->created_at->diffForHumans() }}
                    @endforeach
                    <br>
                    クエリビルダ
                    @foreach ($q_get as $q_member )
                    {{ $q_member->name }}
                    {{ Carbon\Carbon::parse($q_member->created_at)->diffForHumans() }}
                    @endforeach
                    --}}

                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(e) {
            'use strict';
            if (confirm('本当に削除してもいいですか?')) {
            document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
        </script>

</x-app-layout>