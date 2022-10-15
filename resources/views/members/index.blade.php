<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            会員一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                            <div class="flex justify-end mb-4">
                                <button onclick="location.href='{{ route('members.create') }}' " class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">新規登録する</button>
                            </div>
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">

                                <thead>
                                    <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">名前</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">電話番号</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作成日</th>
                                    </tr>
                                </thead>

                                @foreach ($members as $member)
                                <tr>
                                    <td class="px-4 py-3">{{ $member->name }}</td>
                                    <td class="px-4 py-3">{{ $member->tel }}</td>
                                    <td class="px-4 py-3">{{ $member->email }}</td>
                                    <td class="px-4 py-3 text-lg text-gray-900">{{ $member->created_at->diffForHumans() }}</td>
                                </tr>
                                @endforeach
                                <tbody>
                                </tbody>
                                </table>
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
</x-app-layout>