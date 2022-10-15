<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          会員情報編集
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">

                <section class="text-gray-600 body-font relative">
                  <div class="container px-5 mx-auto">
                    <div class="flex flex-col text-center w-full mb-12">
                      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">会員情報編集</h1>
                    </div>

                      {{-- バリデーションエラー --}}
                      <x-input-error :messages="$errors->get('name')" class="mt-2" />
                      <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <div class="lg:w-1/2 md:w-2/3 mx-auto">
                      <form method="post" action="{{ route('members.update', ['member' => $member->id ]) }}">
                        @method('PUT')
                        @csrf
                        
                      <div class="-m-2">

                        <div class="p-2 w-1/2 mx-auto">
                          <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">名前</label>
                            <input type="text" id="name" name="name" value="{{ $member->name }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div>
                        </div>

                        <div class="p-2 w-1/2 mx-auto">
                          <div class="relative">
                            <label for="tel" class="leading-7 text-sm text-gray-600">電話番号</label>
                            <input type="tel" id="tel" name="tel" value="{{ $member->tel }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div>
                        </div>

                        <div class="p-2 w-1/2 mx-auto">
                          <div class="relative">
                            <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                            <input type="email" id="email" name="email" value="{{ $member->email }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div>
                        </div>

                        <div class="p-8 w-full flex justify-around mt-2">
                          <button type="button" onclick="location.href='{{ route('members.index') }}' " class=" bg-gray-200 border-0 py- px-10 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</button>
                          <button type="submit" class=" text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">編集する</button>
                        </div>
                      </form>

                      <form id="delete_{{ $member->id }}" method="post" action="{{ route('members.destroy', ['member' => $member->id ]) }}">
                        @method('delete')
                        @csrf

                        <div class="flex justify-around mt-1">
                          <a href="#" data-id="{{ $member->id }}" onclick="deletePost(this)" class="text-white bg-red-500 border-0 py-2 px-10 focus:outline-none hover:bg-red-600 rounded text-lg">削除</a>
                        </div>
                      </form>

                      </div>
                    
                    </div>

                  </div>
                </section>
                  
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