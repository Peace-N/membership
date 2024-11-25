<div>
    @foreach($categories as $key => $category)
    <x-tab-slider.tab-name controls="{{$category->name}}-1" active="{{$key == 0 ? 'true' : ''}}">
        <div style="max-width:100%;" class="flex align-items-center flex-row mr-4">
            <span class="mr-4" style="width: 27px; border-radius: 8px; background: #f0f0f0; border: 1px solid #d9d9d9; padding:3px">{{ svg($category->icon) }}</span>
            <span>{{$category->name}}</span>
        </div>
    </x-tab-slider.tab-name>
    @endforeach
</div>
