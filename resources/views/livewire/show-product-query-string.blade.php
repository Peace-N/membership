<div>
        <div
            class="flex w-9/12 flex-col rounded-2xl bg-cover"
            style='background: #fff; height: 100%'
        >
            <div class="w-full">
                <ul class="min-w-[230px] w-full  inline-block py-5">
                    <h4 class="py-2 px-3  text-lg font-light text-gray-600">Product Categories</h4>

                    @foreach($categories as $category)
                        <li id="{{$category->name}}Tab" style="border-radius: 6px;"
                            class="vtab  active:bg-[#7fffd4] hover:bg-gray-300  flex items-center text-sm text-gray-800 hover:text-gray-600 py-2 px-3 cursor-pointer transition-all">
                            <span class="w-[18px] mr-4">{{ svg($category->icon) }}</span>
                            {{$category->name}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

</div>
